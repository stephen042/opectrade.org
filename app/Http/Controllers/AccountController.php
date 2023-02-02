<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Transaction;
use App\Models\Account;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\GeneralMailer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //This shows the deposite page 
    public function deposit(Request $request)
    {
        if ($request->method()  == "GET") {
            $user = $request->user();
            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
            $application = Application::where("id", "=", "1")->get()->first();
            return view("customer.deposit", ["application"=>$application,"account"=>$userAccount]);
        }
    }

    //This function is used to handle wallet stuff
    public function wallet(Request $request){
        if ($request->method() == "GET") {

            $user = $request->user();
            $wallet = Account::where("user_id","=",$user->id)->get()->first();
            return view("customer.wallet", ["wallet"=>$wallet]);

        }
    }


    //This method is used to convert usd to crytpo
    public function currencyConverter(Request $request)
    {
        $data = (object) $request->all();
        $url = 'https://pro-api.coinmarketcap.com/v1/tools/price-conversion';
        $parameters = [
        'amount'=>$data->amount,
        'symbol'=>'USD',
        'convert' => $data->convert
        ];
        $headers = [
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY: 5c290e9e-d9b4-4d1a-9e08-2f8071b6f9cf'
            ];
        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "{$url}?{$qs}"; // create the request URL
        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array($curl, array(
        CURLOPT_URL => $request,            // set the request URL
        CURLOPT_HTTPHEADER => $headers,     // set the headers
        CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
        ));
        $response = curl_exec($curl); // Send the request, save the response
        curl_close($curl); // Close request
        $application = Application::where("id", "=", "1")->get()->first();
        $response = (object) json_decode($response, true);
        if (!empty($response->data)) {
            $response->address = $application->{config("app.crypto_address")[$data->convert]."_address"};
        }
        echo json_encode($response);
    }

    /**
     * This function  is used to upload something
    */
    public function uploadProof(Request $request, $action)
    {
        if ($action == "add") {
            $filename = $request->file('file')->getClientOriginalName();
            $path = $request->file("file")->storeAs('public', $filename, 'local');
            echo json_encode(["url"=>$path]);
        } elseif ($action == "delete") {
            $data = (object) $request->all();
            Storage::disk('local')->delete("public/$data->image_name");
            echo json_encode(["success"=>"deleted successfully"]);
        }
    }


    /**
     * This function is used to confirm deposit
     */
    public function confirmDeposit(Request $request)
    {
        $data = (object) $request->all();
        $user = $request->user();
        Transaction::insert([
            'currency'=>'USD',
            'type'=>'deposit',
            'user_id'=>$user->id,
            'message'=> $user->username." deposited $".number_format($data->amount, 0, ".", ","),
            "amount"=>$data->amount,
            'proof'=>json_encode($data->proof)
        ]);

        // to get the referer detail {so as to send him email }
        // NB : not in use for now .
        $userReferral = User::where("username","=",$user->referral)->get()->first() ;

        $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
        if (!empty($userAccount)) {
            Account::where("user_id", "=", $user->id)->update([
                'deposits'=>$userAccount->deposits + $data->amount
            ]);

            $details = [
                "appName"=>config("app.name"),
                "title"=>"Deposit",
                "username"=>$user->username,
                "content"=>"Hello <b>$user->username!</b><br>
                            You have successfully created a deposit request of $data->amount USD. <br> <br>
                            Your account will be credited once this deposit is confirmed and approve by our team.",
                "year"=>date("Y"),
                "appMail"=>config("app.email"),
                "domain"=>config("app.url")
                ];

                $admindetails10 = [
                    "appName"=>config("app.name"),
                    "title"=>"Deposit",
                    "username"=>"Admin",
                    "content"=>"Admin A client <b>$user->username!</b><br>
                                have successfully created a deposit request of $data->amount USD. <br> <br>
                                credit his account once you confirm deposit.",
                    "year"=>date("Y"),
                    "appMail"=>config("app.email"),
                    "domain"=>config("app.url")
                    ];
                try{
                    Mail::to($user->email)->send(new GeneralMailer($details));
                    Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails10));
                    // Mail::to(config("app.admin_mail"))->send(new GeneralMailer($adminDetails1));
                    }
                catch(\Exception $e){
                // Never reached
                }
    

            echo json_encode(['success'=>"Deposit request successfully created"]);
        } else {
            echo json_encode(['error'=>"Deposit request successfully created"]);
        }
    }


    /**
     * This function is used to withdraw funds
     */
    public function withdrawFunds(Request $request)
    {
        if ($request->method()  == "GET") {
            $user = $request->user();
            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
            $application = Application::where("id", "=", "1")->get()->first();
            return view("customer.withdraw", ["application"=>$application,"account"=>$userAccount]);
        }
        $data = (object) $request->all();
        $user = $request->user();
        $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
        $key = config("app.iso_account")[$data->charge_account];
        $key2 = config("app.iso_account")[$data->payment];

        // check pin
        if ($user->pin != $data->financial_password) {
            return response()->json(["error"=>true,"message"=>"Wrong financial password"]);
        }
        // check the users account
        if ($userAccount->{$key."_balance"} < $data->amount) {
            return response()->json(["error"=>true,"message"=>"insufficient fund to perform this withdrawal"]);
        }

        Account::where("user_id", "=", $user->id)->update([
            $key."_balance" =>$userAccount->{$key."_balance"} - $data->amount,
            $key."_withdrawals" =>$userAccount->{$key."_withdrawals"} + $data->amount,
        ]);

        Transaction::insert([
            'currency'=>$data->charge_account,
            'type'=>config("app.transaction_type")[2],
            'user_id'=>$user->id,
            'message'=>'withdrawal of '.$data->amount.' '.$data->charge_account,
            'amount'=>$data->amount,
            'growth_amount'=>$data->amount,
             'withdrawal_address'=>$userAccount->{$key2."_address"},
             'withdrawal_payment_method'=>  $data->payment,
             'withdrawal_amount'=>$data->amount
        ]);

        $message_amount = ($data->charge_account == "USD") ? number_format($data->amount,0,".",",") : $data->amount;
        // send email
        $details = [
                    "appName"=>config("app.name"),
                    "title"=>"Withdrawal",
                    "username"=>$user->username,
                    "content"=>"Hello <b>$user->username!</b><br>
                                You have successfully created a withdrawal request of $message_amount $data->charge_account <br> <br>
                                This will be processed and sent to your $data->payment address  <br> ".$userAccount->{$key2."_address"},
                    "year"=>date("Y"),
                    "appMail"=>config("app.email"),
                    "domain"=>config("app.url")
                    ];
                    $admindetails11 = [
                        "appName"=>config("app.name"),
                        "title"=>"Withdrawal",
                        "username"=>"Admin",
                        "content"=>"Admin <b>$user->username!</b><br>
                                    created a withdrawal request of $message_amount $data->charge_account <br> <br>
                                    you will pay him/her on $data->payment with address  <br> ".$userAccount->{$key2."_address"},
                        "year"=>date("Y"),
                        "appMail"=>config("app.email"),
                        "domain"=>config("app.url")
                        ];
        try{
            Mail::to($user->email)->send(new GeneralMailer($details));
            Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails11));
         }
        catch(\Exception $e){
          // Never reached
        }
        
        return response()->json(["success"=>true,"message"=>"Your withdrawal has been created"]);
    }

    /**
     * This function is used to convert funds
     */
    public function convertFunds(Request $request)
    {
        if ($request->method()  == "GET") {
            $user = $request->user();
            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
            $application = Application::where("id", "=", "1")->get()->first();
            return view("customer.convert", ["application"=>$application,"account"=>$userAccount]);
        }
        $user = $request->user();
        $data = (object) $request->all();
        $url = 'https://pro-api.coinmarketcap.com/v1/tools/price-conversion';
        $parameters = [
        'amount'=>$data->amount,
        'symbol'=>$data->from_currency,
        'convert' => $data->to_currency
        ];
        $headers = [
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY: 5c290e9e-d9b4-4d1a-9e08-2f8071b6f9cf'
            ];
        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "{$url}?{$qs}"; // create the request URL
        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array($curl, array(
        CURLOPT_URL => $request,            // set the request URL
        CURLOPT_HTTPHEADER => $headers,     // set the headers
        CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
        ));
        $response = curl_exec($curl); // Send the request, save the response
        curl_close($curl); // Close request
        $response = json_decode($response);
    
        if (!empty($response->data->quote->{$data->to_currency})) {
            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
            $key1 = config("app.iso_account")[$data->from_currency];
            $key2 = config("app.iso_account")[$data->to_currency];
            $toCurrencyAmount = round($response->data->quote->{$data->to_currency}->price, 10);
            // update his account detail
            Account::where("user_id", "=", $user->id)->update([
                $key1."_balance" =>$userAccount->{$key1."_balance"} - $data->amount,
                $key2."_balance" =>$userAccount->{$key2."_balance"} + $toCurrencyAmount,
            ]);

            Transaction::insert([
                'currency'=>$data->from_currency,
                'type'=>config("app.transaction_type")[3],
                'user_id'=>$user->id,
                'message'=>"Currency Conversion of $data->amount $data->from_currency   to  $toCurrencyAmount $data->to_currency",
                'amount'=>$data->amount,
                'growth_amount'=>$data->amount,
                'status'=>2
            ]);

            $details = [
                "appName"=>config("app.name"),
                "title"=>"Currency Conversion",
                "username"=>$user->username,
                "content"=>"Hello <b>$user->username!</b><br>
                            You have successfully converted  $data->amount $data->from_currency   to  $toCurrencyAmount $data->to_currency. <br>",
                "year"=>date("Y"),
                "appMail"=>config("app.email"),
                "domain"=>config("app.url")
                ];

                $admindetails12 = [
                    "appName"=>config("app.name"),
                    "title"=>"Currency Conversion",
                    "username"=>"Admin",
                    "content"=>"Admin <b>$user->username!</b><br>
                                converted  $data->amount $data->from_currency   to  $toCurrencyAmount $data->to_currency. <br>",
                    "year"=>date("Y"),
                    "appMail"=>config("app.email"),
                    "domain"=>config("app.url")
                    ];
                try{
                    Mail::to($user->email)->send(new GeneralMailer($details));
                    Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails12));
                }
                catch(\Exception $e){
                // Never reached
                }

            return response()->json(["success"=>true,"message"=>"Currency Conversion of $data->amount $data->from_currency   to  $toCurrencyAmount $data->to_currency was Successfull"]);
        } else {
            return response()->json(["error"=>true,"messsage"=>"Failed to process conversion"]);
        }
    }


    /**
     * This function is used to view plans
     */
    public function plans(Request $request, $name)
    {
        if ($request->method()  == "GET") {
            $user = $request->user();
            $plan = [];

            $plans = Plan::orderBy('currency', 'desc')->get();
            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
            $application = Application::where("id", "=", "1")->get()->first();
            return view("customer.plan", ["application"=>$application,"account"=>$userAccount,"plans"=>$plans]);
        }
        
        $data = (object) $request->all();
        $user = $request->user();
        $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
        $plan = Plan::where('id', '=', $data->planId)->get()->first();
        if (!empty($plan)) {
            $url = url("/customer/deposit/usd");
            $key = config("app.iso_account")[$plan->currency];
            // die($key);

          
            // die(config("app.iso_account")[$plan->currency]);
            // check if the user has up to that amount
            // echo $userAccount->{."_balance"};
            if ($userAccount->{$key."_balance"} < $data->amount) {
                return response()->json(["error"=>true,"message"=>"insufficient fund to perform this investment","url"=>$url]);
            }

            // update his account detail
            Account::where("user_id", "=", $user->id)->update([
                $key."_balance" =>$userAccount->{$key."_balance"} - $data->amount,
                $key."_invested" =>$userAccount->{$key."_invested"} + $data->amount,
            ]);

            Transaction::insert([
                'currency'=>$plan->currency,
                'type'=>config("app.transaction_type")[1],
                'user_id'=>$user->id,
                'message'=>'investment of '.$data->amount.' '.$plan->currency,
                'amount'=>$data->amount,
                'growth_amount'=>$data->amount,
                'plan_name'=>$plan->type,
                'duration'=>$plan->duration,
                'percent_commission'=>$plan->commission,
                'close_date'=>date('Y-m-d H:i:s', strtotime($plan->duration))
            ]);

            if(!$user->referral == null){
                $userReferral = User::where("username","=",$user->referral)->get()->first();
                $userReferralAccount = Account::where("user_id", "=", $userReferral->id)->get()->first();
                $amountToUpdate = ($user->referral_count == 0) ? ((config("app.referral_initial_percent") * $data->amount)/100) : ((config("app.referral_consequent_percent") * $data->amount)/100); 

                Account::where("user_id", "=", $userReferral->id)->update([
                    "referral_balance" => $userReferralAccount->referral_balance + $amountToUpdate
                ]);

                // if($user->referral_count == 0){
                //         User::where("id","=",$user->id)->update([
                //         "referral_count"=>1,
                //     ]);
                // }else{
                //     User::where("id","=",$user->id)->update([
                //         "referral_count"=>$user->referral_count + 1,
                //     ]);
                // }

            }

            $message_amount = ($plan->currency == "USD") ? number_format($data->amount,0,".",",") : $data->amount;
            $details = [
                "appName"=>config("app.name"),
                "title"=>"Investment",
                "username"=>$user->username,
                "content"=>"Hello <b>$user->username!</b><br><br>
                            Your investment of $message_amount $plan->currency in $plan->type is successfull <br>",
                "year"=>date("Y"),
                "appMail"=>config("app.email"),
                "domain"=>config("app.url")
            ];
            $admindetails13 = [
                "appName"=>config("app.name"),
                "title"=>"Investment",
                "username"=>"Admin",
                "content"=>"Admin <b>$user->username!</b><br><br>
                            made an investment of $message_amount $plan->currency in $plan->type <br>",
                "year"=>date("Y"),
                "appMail"=>config("app.email"),
                "domain"=>config("app.url")
            ];
                try{
                    Mail::to($user->email)->send(new GeneralMailer($details));
                    Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails13));
                }
                catch(\Exception $e){
                // Never reached
                }
           
            return response()->json(["success"=>true,"message"=>"Your investment has been created"]);
        } else {
            return response()->json(["error"=>true,"message"=>"something went wrong"]);
        }
    }

    /**
     * This function is used to view statistics
     */
    public function statistics(Request $request)
    {
        if ($request->method()  == "GET") {
            $user = $request->user();
            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
            $application = Application::where("id", "=", "1")->get()->first();
            
            return view("customer.statistics", ["application"=>$application,"account"=>$userAccount]);
        }
    }

    /**
     * This function is used to view partners
     */
    public function partners(Request $request)
    {
        if ($request->method()  == "GET") {
            $user = $request->user();
            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
            $application = Application::where("id", "=", "1")->get()->first();
            
            return view("customer.partners", ["application"=>$application,"account"=>$userAccount]);
        }
    }


    /**
     * This function is used to view plans
     */
    public function history(Request $request, $name)
    {
        if ($request->method()  == "GET") {
            $user = $request->user();
            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
            $application = Application::where("id", "=", "1")->get()->first();
            $type = 0;
            switch ($name) {
                case 'add':
                    $type = 0;
                    break;
                case 'withdraw':
                    $type = 2;
                    break;
                case 'exchange':
                    $type = 3;
                    break;
                
                default:
                    $type = 0;
                    break;
            }
            $data = Transaction::where("type", "=", config("app.transaction_type")[$type])->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(30)->get();

            return view("customer.$name-history", ["application"=>$application,"account"=>$userAccount,"data"=>$data]);
        }
    }

    /**
     * This function is used to view setting
     */
    public function setting(Request $request, $name)
    {
        if ($request->method()  == "GET") {
            $user = $request->user();
            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
            $application = Application::where("id", "=", "1")->get()->first();
            return view("customer.$name-setting", ["application"=>$application,"account"=>$userAccount,"user"=>$user]);
        }

        if ($name == "general") {
            $user  = $request->user();
            $data = (object) $request->all();
            $validated = $request->validate([
                'firstname'=>["required","max:100"],
                'lastname'=>["required","max:100"],
                'username'=>["required","unique:users,username,$user->id","max:100"],
                'email'=>["required","unique:users,email,$user->id","max:100"],
                'phone'=>["required","unique:users,phone,$user->id","max:100"]
            ]);
            $result = User::where("id", "=", $user->id)->update([
               'firstname'=>$data->firstname,
               'lastname'=>$data->lastname,
               'username'=>$data->username,
               'email'=>$data->email,
               'phone'=>$data->phone,
            ]);
    
            $user = User::where("id","=",$user->id)->get()->first();
            if ($result) {
                return view("customer.$name-setting", ["success"=>"Successfully updated your $name data","user"=>$user]);
            } else {
                return view("customer.$name-setting", ["error"=>"Failed to update your $name data","user"=>$user]);
            }
        } elseif ($name == "payment") {
            $user  = $request->user();
            $data = (object) $request->all();
            $validated = $request->validate([
                "transaction_pin"=>["required","digits:6","numeric"],
            ]);
            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
            $application = Application::where("id", "=", "1")->get()->first();
            if ($data->transaction_pin != $user->pin) {
                return view("customer.$name-setting", ["error"=>"Invalid Transaction Pin","application"=>$application,"account"=>$userAccount]);
            }
            $result = Account::where("user_id", "=", $user->id)->update([
                // 'perfectmoney_address' => $data->perfectmoney_address,
                'bitcoin_address' => $data->bitcoin_address,
                'usdt_address' => $data->usdt_address,
                'ethereum_address' => $data->ethereum_address,
                'litecoin_address' => !empty($data->litecoin_address) ? $data->litecoin_address : ""
            ]);

            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();


            if ($result) {
                return view("customer.$name-setting", ["success"=>"Successfully updated your $name data","application"=>$application,"account"=>$userAccount]);
            } else {
                return view("customer.$name-setting", ["error"=>"Failed to update your $name data","application"=>$application,"account"=>$userAccount]);
            }
        } elseif ($name == "security") {
            $data = (object) $request->all();
            $user  = $request->user();
        
            if (property_exists($data, 'current_pin')) {
                $validated = $request->validate([
                   "current_pin"=>["required","digits:6","numeric"],
                   "new_pin"=>["required","digits:6","numeric"],
               ]);

                //check the pin if they match
                if ($data->current_pin != $user->pin) {
                    return view("customer.$name-setting", ["error"=>"Wrong current pin"]);
                }

                $result = User::where("id", "=", $user->id)->update([
                 'pin'=>$data->new_pin
             ]);

                if ($result) {
                    return view("customer.$name-setting", ["success"=>"Successfully updated your transaction pin"]);
                } else {
                    return view("customer.$name-setting", ["error"=>"Failed to update your transaction pin"]);
                }
            } else {
                $validated = $request->validate([
                    "current_password"=>["required","between:6,15"],
                    "new_password"=>["required","between:6,15"],
                ]);


 
                //check the pin if they match
                if (!Hash::check($data->current_password, $user->password)) {
                    return view("customer.$name-setting", ["error_p"=>"Wrong current password"]);
                }

                $result = User::where("id", "=", $user->id)->update([
                    'password'=>Hash::make($data->new_password)
                ]);
   
                if ($result) {
                    return view("customer.$name-setting", ["success_p"=>"Successfully updated your account password"]);
                } else {
                    return view("customer.$name-setting", ["error_p"=>"Failed to update your account password"]);
                }
            }
        }
    }
}
