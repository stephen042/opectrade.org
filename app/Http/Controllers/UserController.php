<?php

namespace App\Http\Controllers;

use App\Mail\GeneralMailer;
use App\Models\Account;
use App\Models\Activity;
use App\Models\Application;
use App\Models\Charity;
use App\Models\ChildrenAccount;
use App\Models\fakeTransaction;
use App\Models\Loan;
use App\Models\Plan;
use App\Models\Retirement;
use App\Models\Token;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function services(Request $request)
    {
        return view("home.services");
    }

    public function children_account(Request $request)
    {
        return view("home.children_account");
    }

    public function retirement_funds(Request $request)
    {
        return view("home.retirement_funds");
    }

    public function CustomerCharity(Request $request)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            return view("customer.charity", ["userDetails" => $user]);
        }

        $data = (object) $request->all();
        $data->status = 0;

        $validated = $request->validate([
            "firstname" => ["required"],
            "lastname" => ["required"],
            "email" => ["required", "unique:loans,email"],
            "phone" => ["required"],
            "currency" => ["required"],
            "amount" => ["required"],
        ]);

        $charity = Charity::insert([
            "user_id" => $request->user()->id,
            "firstname" => $data->firstname,
            "lastname" => $data->lastname,
            "email" => $data->email,
            "phone" => $data->phone,
            "currency" => $data->currency,
            "amount" => $data->amount,
            'status' => 0,
        ]);

        if ($charity) {
            return redirect()->route('user.dashboard.view');
        }
    }

    public function CustomerRetirement(Request $request)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            return view("customer.customer_retirement", ["userDetails" => $user]);
        }
        $data = (object) $request->all();
        $data->status = 0;

        $validated = $request->validate([
            "firstname" => ["required"],
            "lastname" => ["required"],
            "email" => ["required", "unique:loans,email"],
            "phone" => ["required"],
            "next_of_kin" => ["required"],
            "currency" => ["required"],
            "amount" => ["required"],
            "duration" => ["required"],
        ]);

        $childrenAccount = Retirement::insert([
            "user_id" => $request->user()->id,
            "firstname" => $data->firstname,
            "lastname" => $data->lastname,
            "email" => $data->email,
            "phone" => $data->phone,
            "next_of_kin" => $data->next_of_kin,
            "currency" => $data->currency,
            "amount" => $data->amount,
            "duration" => $data->duration,
            'status' => 0,
        ]);

        if ($childrenAccount) {
            return redirect()->route('user.dashboard.view');
        }
    }

    public function customerChildrenAccount(Request $request)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            return view("customer.children_account", ["userDetails" => $user]);
        }
        $data = (object) $request->all();
        $data->status = 0;

        $validated = $request->validate([
            "childs_fullname" => ["required"],
            "childs_age" => ["required"],
            "currency" => ["required"],
            "amount" => ["required"],
            "duration" => ["required"],
        ]);

        $Caccount = ChildrenAccount::insert([
            "user_id" => $request->user()->id,
            "childs_fullname" => $data->childs_fullname,
            "childs_age" => $data->childs_age,
            "currency" => $data->currency,
            "amount" => $data->amount,
            "duration" => $data->duration,
            'status' => 0,
        ]);

        if ($Caccount) {
            return redirect()->route('user.dashboard.view');
        }

        // if(!empty($request->user()->id)){ return redirect()->route('user.dashboard.view');}
    }
    public function loan(Request $request)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            return view("customer.loan", ["userDetails" => $user]);
        }

        $data = (object) $request->all();
        $data->status = 0;

        $validated = $request->validate([
            "firstname" => ["required"],
            "lastname" => ["required"],
            "address" => ["required"],
            "email" => ["required", "unique:loans,email"],
            "next_of_kin" => ["required"],
            "currency" => ["required"],
            "amount" => ["required"],
            "duration" => ["required"],
        ]);

        $loan = Loan::insert([
            "user_id" => $request->user()->id,
            "firstname" => $data->firstname,
            "lastname" => $data->lastname,
            "address" => $data->address,
            "email" => $data->email,
            "next_of_kin" => $data->next_of_kin,
            "currency" => $data->currency,
            "amount" => $data->amount,
            "duration" => $data->duration,
            'status' => 0,
        ]);

        if ($loan) {
            return redirect()->route('user.dashboard.view');
        }
    }

    public function index(Request $request)
    {

        $Plans = Plan::orderBy('created_at', 'DESC')->get();
        $deposits = Transaction::select("users.firstname", "users.lastname", "users.phone", "users.username", "users.country", "transactions.*")->where("type", "=", config("app.transaction_type")[0])->orderBy("transactions.created_at", "desc")->leftJoin('users', 'transactions.user_id', '=', 'users.id')->limit(10)->get();
        $withdraws = Transaction::select("users.firstname", "users.lastname", "users.email", "users.username", "users.country", "transactions.*")->where("transactions.type", "=", config("app.transaction_type")[2])->leftJoin('users', 'transactions.user_id', '=', 'users.id')->orderBy("transactions.created_at", "desc")->limit(10)->get();

        return view("home.index", ["Plans" => $Plans, "deposits" => $deposits, "withdraws" => $withdraws]);
    }

    public function dena(Request $request)
    {
        return ("home.index");
    }

    public function returnFAQ(Request $request)
    {
        return view("home.faq");
    }

    public function about(Request $request)
    {
        return view("home.about");
    }

    public function cryptocurrency(Request $request)
    {
        return view("home.cryptocurrency");
    }

    public function escrow(Request $request)
    {
        return view("home.escrow");
    }

    public function stocks(Request $request)
    {
        return view("home.stocks");
    }

    public function realEstate(Request $request)
    {
        return view("home.realEstate");
    }

    public function forex(Request $request)
    {
        return view("home.forex");
    }

    public function nonfarmpayroll(Request $request)
    {
        return view("home.nonfarmpayroll");
    }

    public function personal_loan(Request $request)
    {
        return view("home.personal_loan");
    }

    public function investment_plan(Request $request)
    {
        return view("home.investment_plan");
    }

    public function contact(Request $request)
    {
        return view("home.contact");
    }

    public function returnPrivacy(Request $request)
    {
        return view("home.privacy");
    }

    public function returnTerms(Request $request)
    {
        return view("home.terms");
    }

    public function returnWithdrawalList(Request $request)
    {
        return view("home.withdrawal_list");
    }

    public function returnDepositeList(Request $request)
    {
        return view("home.deposit_list");
    }

    public function returnTopInvestor(Request $request)
    {
        return view("home.top_investors");
    }

    public function register(Request $request, $ref = null)
    {
        if ($request->method() == "GET") {
            if (!empty($request->user()->id)) {
                return redirect()->route('user.login');
            }
            return view("auth.register", ["ref" => $ref]);
        }
        $data = (object) $request->all();
        $data->status = 1;
        // dd($data);

        $validated = $request->validate([
            "firstname" => ["required"],
            "lastname" => ["required"],
            "username" => ["required", "unique:users,username"],
            "email" => ["required", "unique:users,email"],
            "referral" => ["nullable", "exists:users,username"],
            "phone" => ["required", "unique:users,phone"],
            "password" => ["required", "between:6,15", "confirmed"],
            "password_confirmation" => ["required"],
            "country" => ["required"],
            "pin" => ["required", "digits:6", "numeric"],
        ]);

        $allRef = User::where("referral", "=", "{$data->referral}")->get();
        $refCount = count($allRef);
        // dd($refCount);

        $user = User::create([
            "firstname" => $data->firstname,
            "lastname" => $data->lastname,
            "username" => $data->username,
            "email" => $data->email,
            "phone" => $data->phone,
            "country" => $data->country,
            "referral" => $data->referral,
            "referral_count" => 0,
            "password" => Hash::make($data->password),
            "pin" => $data->pin,
            'status' => 1,
        ]);

        if (!empty($user)) {

            User::where("username", "=", $user->referral)->update([
                "referral_count" => $refCount + 1,
            ]);

            Account::create([
                "user_id" => $user->id,
                "bitcoin_address" => "00",
                "usdt_address" => "00",
                "ethereum_address" => "00",
                "litecoin_address" => "00",
                "bitcoincash_address" => "00",
                "binancecoin_address" => "00",
                "dodgecoin_address" => "00",
            ]);

            // send email
            $details = [
                "appName" => config("app.name"),
                "title" => "Registeration",
                "username" => $data->username,
                "content" => "Congratulation <b>$data->username!</b><br>
                        You have successfully registered your personal account on " .
                config("app.domain") . " website! <br> <br>
                            Your financial code<sup style='text-align:red;'>**</sup>- $data->pin                        <br>
                         <br>
                        Login: $data->email
                        Password: $data->password<br><br>

                        Save this code please and don't pass it on to third parties. <br><br>
                        You need a financial code when you <br> withdraw funds from your " . config("app.name") . " account <br>
                         as well as change your personal data",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $adminDetails1 = [
                "appName" => config("app.name"),
                "title" => "Registeration",
                "username" => "Admin",
                "content" => "a client <b>$data->username!</b><br>
                            have successfully registered a personal account on " . config("app.domain") . " website! <br> <br>
                            his/her financial code<sup style='text-align:red;'>**</sup>- $data->pin <br><br>
                            Login: $data->email <br><br>
                            Password: $data->password<br><br>
                            ",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($data->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($adminDetails1));
            } catch (\Exception $e) {
                // Never reached
            }
            return redirect()->route('user.login');
        } else {
            return abort(500, "Server Error");
        }
    }

    public function login(Request $request)
    {

        if ($request->method() == "GET") {
            if (!empty($request->user()->id)) {
                return redirect()->route('user.dashboard.view');
            }

            return view("auth.login");
        }
        $data = (object) $request->all();

        $validated = $request->validate([
            "email" => ["required"],
            "password" => ["required"],
        ]);

        $user = User::where("email", "=", "{$data->email}")->get()->first();
        // dd($user);
        if ($user && Hash::check($data->password, $user->password)) {
            if ($user->status != 1) {
                return view("auth.login", ["noMatch" => "Your account has been suspended by the administration, please report to " . config("app.email")]);
            }
            Auth::loginUsingId($user->id);
            $route = ($user->role == 1) ? "admin.dashboard.view" : "user.dashboard.view";
            return redirect()->route($route);
        } else {
            return view("auth.login", ["noMatch" => "Invalid Login Detail"]);
        }
    }

    public function forgotPasswordAdmin(Request $request)
    {

        if ($request->method() == "GET") {
            return view("auth.forgot-password", ['appName' => config('name')]);
        }

        $validated = $request->validate([
            "email" => ["required", "exists:users,email"],
        ]);

        $data = (object) $request->all();

        $token = self::getToken(10);

        Token::insert(["email" => $data->email, "token" => $token]);
        $user = User::where("email", "=", $data->email)->get()->first();
        $details = [
            "appName" => config("app.name"),
            "title" => "Forgot Password",
            "username" => $user->username,
            "content" => "Hello <b>$user->username!</b><br><br>
                        Click on the link <br><br>" . route("admin.reset.password", [$data->email, $token])

            . "<br><br> To reset your password",
            "year" => date("Y"),
            "appMail" => config("app.email"),
            "domain" => config("app.url"),
        ];
        $adminDetails2 = [
            "appName" => config("app.name"),
            "title" => "Forgot Password",
            "username" => 'Admin',
            "content" => "Hello Admin a user by the username <b>$user->username!</b><br><br>
                        wants to reset their password details to<br><br>",
            "appMail" => config("app.email"),
            "domain" => config("app.url"),
        ];
        try {
            Mail::to($user->email)->send(new GeneralMailer($details));
            Mail::to(config("app.admin_mail"))->send(new GeneralMailer($adminDetails2));
            // Mail::to(config("app.admin_mail"))->send(new GeneralMailer($adminDetails));
        } catch (\Exception $e) {
            // Never reached
        }

        return view("auth.forgot-password", ["trueMatch" => "A reset password mail has been sent to you"]);
    }

    public function resePasswordAdmin(Request $request, $email, $token)
    {

        if ($request->method() == "GET") {
            $tokenObj = Token::where("email", "=", $email)->where("token", "=", $token)->get()->first();
            if (!$tokenObj) {
                abort(404);
            }
            if ($tokenObj->status != 1) {
                abort(404);
            }
            return view("auth.reset-password", ['appName' => config('name'), "email" => $email, "token" => $token]);
        }

        $data = (object) $request->all();
        $data->status = 2;
        $validated = $request->validate([
            "password" => ["required", "confirmed", "between:6,15"],
            "password_confirmation" => ["required"],
        ]);

        $user = User::where("email", "=", $email)->get()->first();
        User::where("email", "=", $email)->update([
            "password" => Hash::make($data->password),
        ]);
        Token::where("email", "=", $email)->where("token", "=", $token)->update([
            "status" => $data->status,
        ]);

        $details = [
            "appName" => config("app.name"),
            "title" => "Password Reset",
            "username" => $user->username,
            "content" => "Hello <b>$user->username!</b><br><br>
                         Your password was successfully changed. <br><br> If this action was not initiated by you, <br><br> Contact Our Support Team " . config("app.email"),
            "year" => date("Y"),
            "appMail" => config("app.email"),
            "domain" => config("app.url"),
        ];
        $adminDetails3 = [
            "appName" => config("app.name"),
            "title" => "Password Reset",
            "username" => "Admin",
            "content" => "Hello Admin <b>$user->username!</b><br><br>
                         has successfully changed his/her password. <br><br> Contact Our Support Team " . config("app.email"),
            "year" => date("Y"),
            "appMail" => config("app.email"),
            "domain" => config("app.url"),
        ];
        try {
            Mail::to($user->email)->send(new GeneralMailer($details));
            Mail::to(config("app.admin_mail"))->send(new GeneralMailer($adminDetails3));
        } catch (\Exception $e) {
            // Never reached
        }

        return view("auth.reset-password", ["trueMatch" => "Your password was successfully updated.", 'appName' => config('name'), "email" => $email, "token" => $token]);
    }

    public static function getToken($length, $type = null)
    {
        $token = "";
        $codeAlphabet = '';
        if ($type == "number") {
            $codeAlphabet = "0123456789";
        } elseif ($type == "letter") {
            $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        } else {
            $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        }
        $max = strlen($codeAlphabet); // edited

        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[random_int(0, $max - 1)];
        }

        return $token;
    }

    public function logout(Request $request)
    {
        /* for normal user logout */
        $userToLogout = User::find(auth()->user()->id);
        Auth::setUser($userToLogout);
        Auth::logout();

        return redirect()->route("user.login");
    }

    public function dashboard(Request $request)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            $deposits = Transaction::where("type", "=", config("app.transaction_type")[0])->where("user_id", "=", $user->id)->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(10)->get();
            $investments = Transaction::where("type", "=", config("app.transaction_type")[1])->where("user_id", "=", $user->id)->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(10)->get();
            $loans = Loan::where("user_id", "=", $user->id)->get()->first();
            $charities = Charity::where("user_id", "=", $user->id)->get()->first();
            // dd($charities);
            $childrenAccount = ChildrenAccount::where("user_id", "=", $user->id)->get()->first();
            // dd($childrenAccount);
            $retirement = Retirement::where("user_id", "=", $user->id)->get()->first();
            // dd($retirement);
            $withdrawals = Transaction::where("type", "=", config("app.transaction_type")[2])->where("user_id", "=", $user->id)->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(10)->get();
            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
            // dd($userAccount);
            return view("customer.index", ["user" => $user, "account" => $userAccount, "deposits" => $deposits, "investments" => $investments, "withdrawals" => $withdrawals, "loans" => $loans, "charities" => $charities, "childrenAccount" => $childrenAccount, "retirement" => $retirement]);
        }
    }

    public function staticPages(Request $request, $name)
    {
        $weeksPlan = Plan::where("duration", "LIKE", "%week%")->where("currency", "=", "USD")->where("type", "!=", "nfp-swap")->get();
        $monthsPlan = Plan::where("duration", "LIKE", "%month%")->where("currency", "=", "USD")->where("type", "!=", "nfp-swap")->get();
        $cryptoPlan = Plan::where("currency", "=", "BTC")->orWhere("currency", "=", "ETH")->where("type", "!=", "nfp-swap")->get();
        $nfpPlan = Plan::where("type", "=", "nfp-swap")->get();
        $Plans = Plan::get();

        if ($name == "trading") {
            return view("home.trading", ["weeksPlan" => $weeksPlan, "monthsPlan" => $monthsPlan, "cryptoPlan" => $cryptoPlan, "nfpPlan" => $nfpPlan]);
        } elseif ($name == "about") {
            return view("home.about", ["weeksPlan" => $weeksPlan, "monthsPlan" => $monthsPlan, "cryptoPlan" => $cryptoPlan, "nfpPlan" => $nfpPlan]);
        } elseif ($name == "terms") {
            return view("home.terms", ["weeksPlan" => $weeksPlan, "monthsPlan" => $monthsPlan, "cryptoPlan" => $cryptoPlan, "nfpPlan" => $nfpPlan]);
        } elseif ($name == "policy") {
            return view("home.policy", ["weeksPlan" => $weeksPlan, "monthsPlan" => $monthsPlan, "cryptoPlan" => $cryptoPlan, "nfpPlan" => $nfpPlan]);
        } elseif ($name == "faq") {
            return view("home.faq", ["weeksPlan" => $weeksPlan, "monthsPlan" => $monthsPlan, "cryptoPlan" => $cryptoPlan, "nfpPlan" => $nfpPlan]);
        } elseif ($name == "login" || $name == "register" || $name == "forgot-password" || $name == "reset-password") {
            return view("auth.$name");
        } else {
            return view("home.$name", ["weeksPlan" => $weeksPlan, "monthsPlan" => $monthsPlan, "cryptoPlan" => $cryptoPlan, "nfpPlan" => $nfpPlan, "Plans" => $Plans]);
        }
    }

    // ------------------------------------------ADMIN METHODS --------------------------------//
    //-----------------------------------------------------------------------------------------//

    /**
     * This is for the admin to login
     */
    public function loginAdmin(Request $request)
    {
        if ($request->method() == "GET") {
            return view("auth.admin-login");
        }

        $data = (object) $request->all();

        $validated = $request->validate([
            "email" => ["required"],
            "password" => ["required"],
        ]);

        $user = User::where("email", "=", "{$data->email}")->get()->first();
        if ($user && Hash::check($data->password, $user->password) && $user->role > 0) {
            if ($user->status != 1) {
                return view("auth.admin-login", ["noMatch" => "Your account has been suspended by the administration, please report to " . config("app.email")]);
            }
            Auth::loginUsingId($user->id);
            return redirect()->route("admin.dashboard.view");
        } else {
            return view("auth.admin-login", ["noMatch" => "Invalid Login Detail"]);
        }
    }

    /**
     * This is for the admin to view his dashboard
     */
    public function dashboardAdmin(Request $request)
    {
        if ($request->method() == "GET") {
            // $accounts = Account::select('dolla_balance as total_dolla_balance','ethereum_balance as total_ethereum_balance')->sum('dolla_balance','ethereum_balance');
            $account = DB::table('accounts')->selectRaw(
                'SUM(dolla_balance) as total_dolla_balance,
                SUM(bitcoin_balance) as total_bitcoin_balance,
                SUM(ethereum_balance) as total_ethereum_balance,
                SUM(dolla_withdrawals) as total_dolla_withdrawals,
                SUM(bitcoin_withdrawals) as total_bitcoin_withdrawals,
                SUM(ethereum_withdrawals) as total_ethereum_withdrawals,
                SUM(deposits) as total_deposits'
            )->get()->first();
            $deposits = DB::table('transactions')->selectRaw('COUNT(id) as total_deposits')->where('type', '=', config("app.transaction_type")[0])->where('status', '=', 1)->get()->first();
            $withdrawals = DB::table('transactions')->selectRaw('COUNT(id) as total_withdrawal')->where('type', '=', config("app.transaction_type")[2])->where('status', '=', 1)->get()->first();
            $investments = DB::table('transactions')->selectRaw('COUNT(id) as total_investment')->where('type', '=', config("app.transaction_type")[1])->where('status', '=', 1)->get()->first();
            $customers = DB::table('users')->selectRaw('COUNT(id) as total_customers')->where("role", "=", 0)->get()->first();
            $admins = DB::table('users')->selectRaw('COUNT(id) as total_admins')->where("role", "=", 1)->get()->first();
            $plans = DB::table('plans')->selectRaw('COUNT(id) as total_plans')->get()->first();
            $newCustomers = User::where("role", "=", 0)->orderBy("created_at", "desc")->limit(10)->get();
            $activities = Activity::orderBy("created_at", "desc")->limit(10)->get();
            return view("admin.index", ["account" => $account, "customer" => $customers, "admin" => $admins, "plan" => $plans, "deposit" => $deposits, "investment" => $investments, "withdraw" => $withdrawals, "newCustomers" => $newCustomers, "activities" => $activities]);
        }
    }

    /**
     * This is for the admin to view all the deposit
     */
    public function depositsAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            if (($name == "active") || ($name == "all")) {
                $deposits = ($name == "active") ?

                Transaction::select("users.firstname", "users.lastname", "users.phone", "users.username", "users.country", "transactions.*")->where("type", "=", config("app.transaction_type")[0])->where("transactions.status", "=", 1)->orderBy("transactions.created_at", "desc")->leftJoin('users', 'transactions.user_id', '=', 'users.id')->get() :

                Transaction::select("users.firstname", "users.lastname", "users.phone", "users.username", "users.country", "transactions.*")->where("type", "=", config("app.transaction_type"))->orderBy("transactions.created_at", "desc")->leftJoin('users', 'transactions.user_id', '=', 'users.id')->get();

                return view("admin.$name-deposit", ["deposits" => $deposits]);
            } else {
                $deposits = Transaction::select("users.firstname", "users.lastname", "users.phone", "users.username", "users.country", "transactions.*")->where("transactions.id", "=", $id)->leftJoin('users', 'transactions.user_id', '=', 'users.id')->get()->first();
                // dd($deposits);
                return view("admin.$name-deposit", ["deposit" => $deposits]);
            }
        }

        if ($name == "edit") {
            $validated = $request->validate([
                "message" => ["required"],
                "amount" => ["required", "numeric"],
                "status" => ["required"],
            ]);

            $data = (object) $request->all();
            $deposits = Transaction::select("users.firstname", "users.lastname", "users.phone", "users.username", "users.country", "transactions.*")->where("transactions.id", "=", $id)->leftJoin('users', 'transactions.user_id', '=', 'users.id')->get()->first();
            $result = Transaction::where("id", "=", $id)->update([
                'message' => $data->message,
                'amount' => $data->amount,
                'status' => $data->status,
            ]);

            if ($deposits->status == 2) {
                return view("admin.$name-deposit", ["deposit" => $deposits, "error" => "You can't role back request after approval"]);
            }
            $customerAccount = Account::where("id", "=", $deposits->user_id)->get()->first();
            if (!blank(collect($customerAccount))) {
                $newDepositAmount = (($customerAccount->deposits - $deposits->amount) + $data->amount);
                $newUsdAmount = ($data->status == 2) ? ($customerAccount->dolla_balance + $data->amount) : $customerAccount->dolla_balance;
                Account::where("id", "=", $deposits->user_id)->update([
                    'deposits' => $newDepositAmount,
                    'dolla_balance' => $newUsdAmount,
                ]);
            }

            $deposits = Transaction::select("users.firstname", "users.lastname", "users.phone", "users.username", "users.country", "transactions.*")->where("transactions.id", "=", $id)->leftJoin('users', 'transactions.user_id', '=', 'users.id')->get()->first();
            if ($result) {
                return view("admin.$name-deposit", ["deposit" => $deposits, "success" => "Deposit Data Updated Successfully"]);
            } else {
                return view("admin.$name-deposit", ["deposit" => $deposits, "error" => "Deposit data failed to update"]);
            }
        } elseif ($name == "delete") {
            $deposit = Transaction::where("id", "=", $id)->get()->first();
            $deposit->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "approve") {
            $deposit = Transaction::where("id", "=", $id)->get()->first();
            $userAccount = Account::where("id", "=", $deposit->user_id)->get()->first();
            if ($deposit->status == 2) {
                return response()->json(["error" => true, "message" => "This request has been approved previously"]);
            }
            $result = Account::where("user_id", "=", $deposit->user_id)->update([
                "dolla_balance" => $userAccount->dolla_balance + $deposit->amount,
            ]);
            Transaction::where("id", "=", $id)->update([
                'status' => 2,
            ]);
 
            $user = User::where("id", "=", $deposit->user_id)->get()->first();
            $message_amount = ($deposit->currency == "USD") ? number_format($deposit->amount, 0, ".", ",") : $deposit->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Deposit",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your deposit of $message_amount $deposit->currency has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails4 = [
                "appName" => config("app.name"),
                "title" => "Deposit",
                "username" => "Admin",
                "content" => "Hello <b>$user->username!</b><br><br>
                                Your deposit of $message_amount $deposit->currency has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_email"))->send(new GeneralMailer($admindetails4));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Deposit successfully approved"]);
        } elseif ($name == "decline") {
            $deposit = Transaction::where("id", "=", $id)->get()->first();
            $userAccount = Account::where("id", "=", $deposit->user_id)->get()->first();
            if ($deposit->status == 3) {
                return response()->json(["error" => true, "message" => "This request has been cancled previously"]);
            }
            $result = Account::where("user_id", "=", $deposit->user_id)->update([
                "deposits" => $userAccount->deposits - $deposit->amount,
            ]);
            Transaction::where("id", "=", $id)->update([
                'status' => 3,
            ]);

            $user = User::where("id", "=", $deposit->user_id)->get()->first();
            $message_amount = ($deposit->currency == "USD") ? number_format($deposit->amount, 0, ".", ",") : $deposit->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Deposit",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your deposit of $message_amount $deposit->currency has been cancled. <br><br> This is due to unverified evidence or proof of payment. <br><br> Please chat our support team for proper verifiation or mail us at " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails5 = [
                "appName" => config("app.name"),
                "title" => "Deposit",
                "username" => "Admin",
                "content" => "You cancelled <b>$message_amount $deposit->currency!</b><br><br>
                                deposit of $user->username <br><br> due to unverified evidence or proof of payment. " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];

            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails5));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Deposit successfully cancled"]);
        }
    }

    public function loanAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            if (($name == "active") || ($name == "all")) {
                $loans = ($name == "active") ?

                Loan::where("status", "=", 1)->orderBy("created_at", "desc")->limit(10)->get() :

                Loan::where("status", "=", 0)->orderBy("created_at", "desc")->limit(10)->get();

                return view("admin.$name-loans", ["loans" => $loans]);
            } else {
                $loans = Loan::where("id", "=", $id)->orderBy("created_at", "desc")->get()->first();
                // dd($loans);
                return view("admin.$name-loans", ["loans" => $loans]);
            }
        }

        if ($name == "edit") {
            $loans = DB::table('loans')->get();
            $validated = $request->validate([
                // "message" => ["required"],
                "amount" => ["required", "numeric"],
                "status" => ["required"],
            ]);

            $data = (object) $request->all();
            $loans = Loan::where("id", "=", $id)->orderBy("created_at", "desc")->get()->first();
            // dd($loans);
            $result = Loan::where("id", "=", $id)->update([
                // 'message' => $data->message,
                'amount' => $data->amount,
                'status' => $data->status,
            ]);

            if ($loans->status == 1) {
                return view("admin.$name-loans", ["loans" => $loans, "error" => "You can't role back request after approval"]);
            }

            if ($result) {
                return view("admin.$name-loans", ["loans" => $loans, "success" => "Loan Data Updated Successfully"]);
            } else {
                return view("admin.$name-loans", ["deposit" => $loans, "error" => "Loan data failed to update"]);
            }
        } elseif ($name == "delete") {
            $loans = Loan::where("id", "=", $id)->get()->first();
            $loans->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "approve") {
            $loans = Loan::where("id", "=", $id)->get()->first();
            if ($loans->status == 1) {
                return response()->json(["error" => true, "message" => "This request has been approved previously"]);
            }
            Loan::where("id", "=", $id)->update([
                'status' => 1,
            ]);

            $user = User::where("id", "=", $loans->user_id)->get()->first();
            $message_amount = $loans->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Loan",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Loan of $message_amount has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails4 = [
                "appName" => config("app.name"),
                "title" => "Loan",
                "username" => "Admin",
                "content" => "Hello <b>$user->username!</b><br><br>
                                Your Loan of $message_amount  has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_email"))->send(new GeneralMailer($admindetails4));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Loan successfully approved"]);
        } elseif ($name == "decline") {
            $loans = Loan::where("id", "=", $id)->get()->first();
            if ($loans->status == 3) {
                return response()->json(["error" => true, "message" => "This request has been cancled previously"]);
            }
            Loan::where("id", "=", $id)->update([
                'status' => 3,
            ]);

            $user = User::where("id", "=", $loans->user_id)->get()->first();
            $message_amount = $loans->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Loan",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Loan Request of $message_amount has been cancled. <br><br> This is due to unverified evidence or proof of payment. <br><br> Please chat our support team for proper verifiation or mail us at " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails5 = [
                "appName" => config("app.name"),
                "title" => "Loan",
                "username" => "Admin",
                "content" => "You cancelled <b>$message_amount !</b><br><br>
                                deposit of $user->username <br><br> due to unverified evidence or proof of payment. " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];

            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails5));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Loan successfully cancled"]);
        }
    }

    public function charityAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            if (($name == "active") || ($name == "all")) {
                $charities = ($name == "active") ?

                Charity::where("status", "=", 1)->orderBy("created_at", "desc")->limit(10)->get() :

                Charity::where("status", "=", 0)->orderBy("created_at", "desc")->limit(10)->get();

                return view("admin.$name-charity", ["charities" => $charities]);
            } else {
                $charities = DB::table('charities')->get()->first();
                // dd($charities);
                return view("admin.$name-charity", ["charities" => $charities]);
            }
        }

        if ($name == "edit") {
            $charities = DB::table('charities')->get();
            // dd($charities);
            $validated = $request->validate([
                // "message" => ["required"],
                "amount" => ["required", "numeric"],
                "status" => ["required"],
            ]);

            $data = (object) $request->all();
            $charities = Charity::where("id", "=", $id)->orderBy("created_at", "desc")->get()->first();
            $result = Charity::where("id", "=", $id)->update([
                // 'message' => $data->message,
                'amount' => $data->amount,
                'status' => $data->status,
            ]);

            if ($charities->status == 1) {
                return view("admin.$name-charity", ["charities" => $charities, "error" => "You can't role back request after approval"]);
            }

            if ($result) {
                return view("admin.$name-charity", ["charities" => $charities, "success" => "Charity Donation Data Updated Successfully"]);
            } else {
                return view("admin.$name-charity", ["deposit" => $charities, "error" => "Charity Donation data failed to update"]);
            }
        } elseif ($name == "delete") {
            $charities = Charity::where("id", "=", $id)->get()->first();
            $charities->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "approve") {
            $charities = Charity::where("id", "=", $id)->get()->first();
            if ($charities->status == 1) {
                return response()->json(["error" => true, "message" => "This request has been approved previously"]);
            }

            Charity::where("id", "=", $id)->update([
                'status' => 1,
            ]);

            $user = User::where("id", "=", $charities->user_id)->get()->first();
            $message_amount = $charities->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Charity Donation",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your donation of $message_amount has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails4 = [
                "appName" => config("app.name"),
                "title" => "Charity Donation",
                "username" => "Admin",
                "content" => "Hello <b>$user->username!</b><br><br>
                                Your deposit of $message_amount  has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_email"))->send(new GeneralMailer($admindetails4));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Donation successfully approved"]);
        } elseif ($name == "decline") {
            $charities = Charity::where("id", "=", $id)->get()->first();
            if ($charities->status == 3) {
                return response()->json(["error" => true, "message" => "This request has been cancled previously"]);
            }
            Charity::where("id", "=", $id)->update([
                'status' => 3,
            ]);

            $user = User::where("id", "=", $charities->user_id)->get()->first();
            $message_amount = $charities->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Donation Declined",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Donation Request of $message_amount has been cancled. <br><br> This is due to unverified evidence or proof of payment. <br><br> Please chat our support team for proper verifiation or mail us at " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails5 = [
                "appName" => config("app.name"),
                "title" => "Charity Donation",
                "username" => "Admin",
                "content" => "You cancelled <b>$message_amount !</b><br><br>
                                charity donation of $user->username <br><br> due to unverified evidence or proof of payment. " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];

            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails5));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Donation successfully cancled"]);
        }
    }

    public function retirementAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            if (($name == "active") || ($name == "all")) {
                $retirement = ($name == "active") ?

                Retirement::where("status", "=", 1)->orderBy("created_at", "desc")->limit(10)->get() :

                Retirement::where("status", "=", 0)->orderBy("created_at", "desc")->limit(10)->get();

                return view("admin.$name-retirement", ["retirement" => $retirement]);
            } else {
                $retirement = DB::table('retirements')->get()->first();
                // dd($charities);
                return view("admin.$name-retirement", ["retirement" => $retirement]);
            }
        }

        if ($name == "edit") {
            $retirement = DB::table('retirements')->get();
            // dd($charities);
            $validated = $request->validate([
                // "message" => ["required"],
                "amount" => ["required", "numeric"],
                "status" => ["required"],
            ]);

            $data = (object) $request->all();
            $retirement = Retirement::where("id", "=", $id)->orderBy("created_at", "desc")->get()->first();
            $result = Retirement::where("id", "=", $id)->update([
                // 'message' => $data->message,
                'amount' => $data->amount,
                'status' => $data->status,
            ]);

            if ($retirement->status == 1) {
                return view("admin.$name-retirement", ["retirement" => $retirement, "error" => "You can't role back request after approval"]);
            }

            if ($result) {
                return view("admin.$name-retirement", ["retirement" => $retirement, "success" => "Retirement Funds Deposit Request Data Updated Successfully"]);
            } else {
                return view("admin.$name-retirement", ["retirement" => $retirement, "error" => "retirement funds data failed to update"]);
            }
        } elseif ($name == "delete") {
            $retirement = Retirement::where("id", "=", $id)->get()->first();
            $retirement->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "approve") {
            $retirement = Retirement::where("id", "=", $id)->get()->first();
            // dd($retirement);
            if ($retirement->status == 1) {
                return response()->json(["error" => true, "message" => "This request has been approved previously"]);
            }

            Retirement::where("id", "=", $id)->update([
                'status' => 1,
            ]);

            $user = User::where("id", "=", $retirement->user_id)->get()->first();
            $message_amount = $retirement->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Retirement Funds Deposit Request",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Retirement Funds Deposit Request of $message_amount has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails4 = [
                "appName" => config("app.name"),
                "title" => "Retirement Funds Deposit Request",
                "username" => "Admin",
                "content" => "Hello <b>$user->username!</b><br><br>
                                Your Retirement Funds Deposit Request of $message_amount  has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_email"))->send(new GeneralMailer($admindetails4));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Retirement Funds Deposit Request successfully approved"]);
        } elseif ($name == "decline") {
            $retirement = Retirement::where("id", "=", $id)->get()->first();
            if ($retirement->status == 3) {
                return response()->json(["error" => true, "message" => "This request has been cancled previously"]);
            }
            Retirement::where("id", "=", $id)->update([
                'status' => 3,
            ]);

            $user = User::where("id", "=", $retirement->user_id)->get()->first();
            $message_amount = $retirement->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Donation Declined",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Donation Request of $message_amount has been cancled. <br><br> This is due to unverified evidence or proof of payment. <br><br> Please chat our support team for proper verifiation or mail us at " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails5 = [
                "appName" => config("app.name"),
                "title" => "Charity Donation",
                "username" => "Admin",
                "content" => "You cancelled <b>$message_amount !</b><br><br>
                                charity donation of $user->username <br><br> due to unverified evidence or proof of payment. " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];

            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails5));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Retirement Fund Deposit Report successfully cancled"]);
        }
    }

    public function childAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            if (($name == "active") || ($name == "all")) {
                $child = ($name == "active") ?

                ChildrenAccount::where("status", "=", 1)->orderBy("created_at", "desc")->limit(10)->get() :

                ChildrenAccount::where("status", "=", 0)->orderBy("created_at", "desc")->limit(10)->get();

                return view("admin.$name-childrenAccount", ["child" => $child]);
            } else {
                $child = DB::table('children_accounts')->get()->first();
                // dd($child);
                return view("admin.$name-childrenAccount", ["child" => $child]);
            }
        }

        if ($name == "edit") {
            $child = DB::table('children_accounts')->get();
            // dd($charities);
            $validated = $request->validate([
                // "message" => ["required"],
                "amount" => ["required", "numeric"],
                "status" => ["required"],
            ]);

            $data = (object) $request->all();
            $child = ChildrenAccount::where("id", "=", $id)->orderBy("created_at", "desc")->get()->first();
            $result = ChildrenAccount::where("id", "=", $id)->update([
                // 'message' => $data->message,
                'amount' => $data->amount,
                'status' => $data->status,
            ]);

            if ($child->status == 1) {
                return view("admin.$name-childrenAccount", ["child" => $child, "error" => "You can't role back request after approval"]);
            }

            if ($result) {
                return view("admin.$name-childrenAccount", ["child" => $child, "success" => "child Funds Deposit Request Data Updated Successfully"]);
            } else {
                return view("admin.$name-childrenAccount", ["child" => $child, "error" => "child funds data failed to update"]);
            }
        } elseif ($name == "delete") {
            $child = ChildrenAccount::where("id", "=", $id)->get()->first();
            $child->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "approve") {
            $child = ChildrenAccount::where("id", "=", $id)->get()->first();
            // dd($retirement);
            if ($child->status == 1) {
                return response()->json(["error" => true, "message" => "This request has been approved previously"]);
            }

            ChildrenAccount::where("id", "=", $id)->update([
                'status' => 1,
            ]);

            $user = User::where("id", "=", $child->user_id)->get()->first();
            $message_amount = $child->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Children Account Funds Deposit Request",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Children Account Funds Deposit Request of $message_amount has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails4 = [
                "appName" => config("app.name"),
                "title" => "Children Account Funds Deposit Request",
                "username" => "Admin",
                "content" => "Hello <b>$user->username!</b><br><br>
                                Your Children Account Funds Deposit Request of $message_amount  has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_email"))->send(new GeneralMailer($admindetails4));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Children Account Funds Deposit Request successfully approved"]);
        } elseif ($name == "decline") {
            $child = ChildrenAccount::where("id", "=", $id)->get()->first();
            if ($child->status == 3) {
                return response()->json(["error" => true, "message" => "This request has been cancled previously"]);
            }
            ChildrenAccount::where("id", "=", $id)->update([
                'status' => 3,
            ]);

            $user = User::where("id", "=", $child->user_id)->get()->first();
            $message_amount = $child->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Children Account Funds Deposit Declined",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Children Account Deposit Request of $message_amount has been cancled. <br><br> This is due to unverified evidence or proof of payment. <br><br> Please chat our support team for proper verifiation or mail us at " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails5 = [
                "appName" => config("app.name"),
                "title" => "Children Account Fund Deposit Request",
                "username" => "Admin",
                "content" => "You cancelled <b>$message_amount !</b><br><br>
                                charity donation of $user->username <br><br> due to unverified evidence or proof of payment. " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];

            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails5));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Children Account Fund Deposit Request successfully cancled"]);
        }
    }

    /**
     * This is for the admin to view all the withdraw
     */
    public function withdrawAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            $withdrawals = Transaction::select("users.firstname", "users.lastname", "users.email", "users.username", "users.country", "transactions.*")->where("transactions.type", "=", config("app.transaction_type")[2])->where("transactions.status", "=", 1)->leftJoin('users', 'transactions.user_id', '=', 'users.id')->orderBy("transactions.created_at", "desc")->get();
            return view("admin.$name-withdraw", ["withdrawals" => $withdrawals]);
        }

        if ($name == "delete") {
            $deposit = Transaction::where("id", "=", $id)->get()->first();
            $deposit->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "decline") {
            $withdraw = Transaction::where("id", "=", $id)->get()->first();
            $result = Transaction::where("id", "=", $id)->update([
                'status' => 3,
            ]);
            $userAccount = Account::where("id", "=", $withdraw->user_id)->get()->first();
            $key = config("app.iso_account")[$withdraw->currency];

            Account::where("user_id", "=", $withdraw->user_id)->update([
                $key . "_balance" => $userAccount->{$key . "_balance"}+$withdraw->withdrawal_amount,
                $key . "_withdrawals" => $userAccount->{$key . "_withdrawals"}-$withdraw->withdrawal_amount,
            ]);

            $user = User::where("id", "=", $withdraw->user_id)->get()->first();
            $message_amount = ($withdraw->currency == "USD") ? number_format($withdraw->withdrawal_amount, 0, ".", ",") : $withdraw->withdrawal_amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Withdrawal",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                           Your withdrawal request of $message_amount $withdraw->currency has been cancled due to unverified reasons.
                           <br><br> Please chat our support team for proper verifiation or mail us at " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails6 = [
                "appName" => config("app.name"),
                "title" => "Withdrawal",
                "username" => "Admin",
                "content" => "You cancel a withdrawal request of <b>$message_amount $withdraw->currency</b><br><br>
                            due to unverified reasons.
                            <br><br> " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails6));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "withdrawal successfully declined"]);
        } elseif ($name == "approve") {
            $withdraw = Transaction::where("id", "=", $id)->get()->first();
            $result = Transaction::where("id", "=", $id)->update([
                'status' => 2,
            ]);

            $user = User::where("id", "=", $withdraw->user_id)->get()->first();
            $message_amount = ($withdraw->currency == "USD") ? number_format($withdraw->withdrawal_amount, 0, ".", ",") : $withdraw->withdrawal_amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Withdrawal",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your withdrawal request of  $message_amount $withdraw->currency has been approved successfully ",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails7 = [
                "appName" => config("app.name"),
                "title" => "Withdrawal",
                "username" => "Admin",
                "content" => "Hello <b>$user->username!</b><br><br>
                                   You approved $user->username withdrawal request of  $message_amount $withdraw->currency",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails7));
            } catch (\Exception $e) {
                //dsdssd
            }

            return response()->json(["success" => true, "message" => "withdrawal successfully approved"]);
        }
    }

    /**
     * This is for the admin to view all the investment
     */
    public function investmentAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            if ($name != "edit") {
                $investments = ($name == "active") ?
                Transaction::select("users.firstname", "users.lastname", "users.email", "users.username", "users.country", "transactions.*")->where("transactions.type", "=", config("app.transaction_type")[1])->where("transactions.status", "=", 1)->leftJoin('users', 'transactions.user_id', '=', 'users.id')->orderBy("transactions.created_at", "desc")->get() :
                Transaction::select("users.firstname", "users.lastname", "users.email", "users.username", "users.country", "transactions.*")->where("transactions.type", "=", config("app.transaction_type")[1])->leftJoin('users', 'transactions.user_id', '=', 'users.id')->orderBy("transactions.created_at", "desc")->get();
                return view("admin.$name-investment", ["investments" => $investments]);
            } else {
                $investment = Transaction::where("id", "=", $id)->get()->first();
                return view("admin.$name-investment", ["investment" => $investment]);
            }
        }
        if ($name == "delete") {
            $investment = Transaction::where("id", "=", $id)->get()->first();
            $investment->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "today") {
            $investment = Transaction::where("id", "=", $id)->get()->first();
            $todayGrowth = (($investment->amount * $investment->percent_commission) / 100) / preg_replace('~\D~', '', $investment->duration);
            $result = Transaction::where("id", "=", $id)->update([
                'growth_amount' => $investment->growth_amount + $todayGrowth,
            ]);

            $user = User::where("id", "=", $investment->user_id)->get()->first();
            $message_amount = ($investment->currency == "USD") ? number_format($investment->amount, 0, ".", ",") : $investment->amount;
            $message_growth_amount = ($investment->currency == "USD") ? number_format($investment->growth_amount, 0, ".", ",") : $investment->growth_amount;

            $details = [
                "appName" => config("app.name"),
                "title" => "Investment",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Investment  of  $message_amount $investment->currency has accured to $message_growth_amount $investment->currency  ",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails8 = [
                "appName" => config("app.name"),
                "title" => "Investment",
                "username" => "Admin",
                "content" => "Admin <b>$user->username!
                                   Investment  of  $message_amount $investment->currency has accured to $message_growth_amount $investment->currency  ",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails8));
            } catch (\Exception $e) {
                //dsdssd
            }

            return response()->json(["success" => true, "message" => "Today Growth successfully updated "]);
        } elseif ($name == "complete") {
            $investment = Transaction::where("id", "=", $id)->get()->first();
            $result = Transaction::where("id", "=", $id)->update([
                'status' => 2,
            ]);
            $userAccount = Account::where("id", "=", $investment->user_id)->get()->first();
            $key = config("app.iso_account")[$investment->currency];
            $earned = $investment->growth_amount - $investment->amount;
            Account::where("user_id", "=", $investment->user_id)->update([
                $key . "_balance" => $userAccount->{$key . "_balance"}+$investment->growth_amount,
                $key . "_earned" => $userAccount->{$key . "_earned"}+$earned,
            ]);

            $user = User::where("id", "=", $investment->user_id)->get()->first();
            $message_amount = ($investment->currency == "USD") ? number_format($investment->amount, 0, ".", ",") : $investment->amount;
            $message_growth_amount = ($investment->currency == "USD") ? number_format($investment->growth_amount, 0, ".", ",") : $investment->growth_amount;

            $details = [
                "appName" => config("app.name"),
                "title" => "Investment",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Investment  of  $message_growth_amount $investment->currency has been completed successfully   ",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails9 = [
                "appName" => config("app.name"),
                "title" => "Investment",
                "username" => "Admin",
                "content" => "Admin <b>$user->username!</b><br><br>
                                   Investment  of  $message_growth_amount $investment->currency has been completed successfully   ",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails9));
            } catch (\Exception $e) {
                //dsdssd
            }

            return response()->json(["success" => true, "message" => "Investment Successfully Completed"]);
        } elseif ($name == "edit") {
            $investment = Transaction::where("id", "=", $id)->get()->first();
            $validated = $request->validate([
                "message" => ["required"],
                "amount" => ["required", "numeric"],
                "growth_amount" => ["required", "numeric"],
                "duration" => ["required"],
                "percent_commission" => ["required"],
                "status" => ["required"],
            ]);
            $data = (object) $request->all();
            if ($data->status == 2 || $data->status == 3) {
                return view("admin.$name-investment", ["investment" => $investment, "error" => "You can't approve/decline an investment from this end, please select completed from the previous table"]);
            }
            $result = Transaction::where("id", "=", $id)->update([
                'message' => $data->message,
                'amount' => $data->amount,
                'growth_amount' => $data->growth_amount,
                'duration' => $data->duration,
                'duration' => $data->duration,
                'percent_commission' => $data->percent_commission,
                'status' => $data->status,
            ]);
            $investment = Transaction::where("id", "=", $id)->get()->first();

            if ($result) {
                return view("admin.$name-investment", ["investment" => $investment, "success" => "Investment Data Updated Successfully"]);
            } else {
                return view("admin.$name-investment", ["investment" => $investment, "error" => "Investment data failed to update"]);
            }
        }
    }

    /**
     * This is for the admin to view all the wallet
     */
    public function walletAdmin(Request $request, $name = null, $id = null)
    {
        if ($request->method() == "GET") {
            if (($name == "edit") || ($name == "view")) {
                $wallet = Account::select("users.firstname", "users.lastname", "users.email", "users.username", "accounts.*")->where("accounts.user_id", "=", $id)->leftJoin('users', 'accounts.user_id', '=', 'users.id')->get()->first();
                return view("admin.$name-wallet", ["account" => $wallet]);
            } else {
                $accounts = Account::select("users.firstname", "users.lastname", "users.email", "users.username", "users.country", "accounts.*")->leftJoin('users', 'accounts.user_id', '=', 'users.id')->orderBy("accounts.created_at", "desc")->get();
                return view("admin.wallet", ["accounts" => $accounts]);
            }
        }

        if ($name == "edit") {
            $wallet = Account::where("user_id", "=", $id)->get()->first();
            $data = (object) $request->all();
            $validated = $request->validate([
                'dolla_balance' => ["required", "numeric"],
                'ethereum_balance' => ["required", "numeric"],
                'bitcoin_balance' => ["required", "numeric"],
                'referral_balance' => ["required", "numeric"],
                'dolla_withdrawals' => ["required", "numeric"],
                'bitcoin_withdrawals' => ["required", "numeric"],
                'ethereum_withdrawals' => ["required", "numeric"],
                'dolla_invested' => ["required", "numeric"],
                'bitcoin_invested' => ["required", "numeric"],
                'ethereum_invested' => ["required", "numeric"],
                'dolla_earned' => ["required", "numeric"],
                'ethereum_earned' => ["required", "numeric"],
                'bitcoin_earned' => ["required", "numeric"],
                'deposits' => ["required", "numeric"],
                'perfectmoney_address' => [],
                'bitcoin_address' => [],
                'usdt_address' => [],
                'ethereum_address' => [],
                'litecoin_address' => [],
            ]);

            $result = Account::where("user_id", "=", $id)->update([
                'dolla_balance' => $data->dolla_balance,
                'ethereum_balance' => $data->ethereum_balance,
                'bitcoin_balance' => $data->bitcoin_balance,
                'referral_balance' => $data->referral_balance,
                'dolla_withdrawals' => $data->dolla_withdrawals,
                'bitcoin_withdrawals' => $data->bitcoin_withdrawals,
                'ethereum_withdrawals' => $data->ethereum_withdrawals,
                'dolla_invested' => $data->dolla_invested,
                'bitcoin_invested' => $data->bitcoin_invested,
                'ethereum_invested' => $data->ethereum_invested,
                'dolla_earned' => $data->dolla_earned,
                'ethereum_earned' => $data->ethereum_earned,
                'bitcoin_earned' => $data->bitcoin_earned,
                'deposits' => $data->deposits,
                'perfectmoney_address' => $data->perfectmoney_address,
                'bitcoin_address' => $data->bitcoin_address,
                'usdt_address' => $data->usdt_address,
                'ethereum_address' => $data->ethereum_address,
                'litecoin_address' => $data->litecoin_address,
            ]);
            $wallet = Account::where("user_id", "=", $id)->get()->first();
            // error side i corrected strictly for stephen
            $investment = '';
            // assigned @investment to empty to remove code error
            if ($result) {
                return view("admin.$name-wallet", ["account" => $wallet, "success" => "wallet Data Updated Successfully"]);
            } else {
                return view("admin.$name-wallet", ["account" => $investment, "error" => "wallet data failed to update"]);
            }
        }
    }

    /**
     * This is for the admin to view all the users
     */
    public function usersAdmin(Request $request, $name = null, $id = null)
    {
        if ($request->method() == "GET") {
            if ($name == "edit-customer-profile") {
                $user = User::where("id", "=", $id)->get()->first();
                return view("admin.$name", ["user" => $user]);
            } elseif ($name == "view-profile") {
                $user = User::where("id", "=", $id)->get()->first();
                return view("admin.$name", ["user" => $user]);
            } elseif ($name == "change-customer-password") {
                $user = User::where("id", "=", $id)->get()->first();
                return view("admin.$name", ["user" => $user]);
            } else {
                $users = ($name == "admin") ? User::where("role", "=", 1)->get() : User::where("role", "=", 0)->get();
                return view("admin.$name", ["users" => $users]);
            }
        }

        if ($name == "edit-customer-profile") {
            $user = User::where("id", "=", $id)->get()->first();
            $data = (object) $request->all();
            $validated = $request->validate([
                "firstname" => ["required"],
                "lastname" => ["required"],
                "username" => ["required", "unique:users,username,$user->id"],
                "email" => ["required", "unique:users,email,$user->id"],
                "country" => ["required"],
                "phone" => ["required", "unique:users,phone,$user->id"],
                // "password" => ["required","confirmed","between:6,15",],
                // // "password_confirmation" => ["required"],
                "pin" => ["required", "digits:6", "numeric"],
            ]);

            $result = User::where("id", "=", $id)->update([
                'firstname' => $data->firstname,
                'lastname' => $data->lastname,
                'username' => $data->username,
                'email' => $data->email,
                'country' => $data->country,
                'phone' => $data->phone,
                'pin' => $data->pin,
            ]);
            $user = User::where("id", "=", $id)->get()->first();

            if ($result) {
                return view("admin.$name", ["user" => $user, "success" => "profile Data Updated Successfully"]);
            } else {
                return view("admin.$name", ["user" => $user, "error" => "profile data failed to update"]);
            }
        } elseif ($name == "delete") {
            $user = User::where("id", "=", $id)->get()->first();
            $user->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "change-customer-password") {
            $user = User::where("id", "=", $id)->get()->first();
            $data = (object) $request->all();
            $validated = $request->validate([
                "password" => ["required", "between:6,15"],
            ]);

            $result = User::where("id", "=", $id)->update([
                'password' => Hash::make($data->password),
            ]);
            $user = User::where("id", "=", $id)->get()->first();
            if ($result) {
                return view("admin.$name", ["user" => $user, "success" => "profile password Data Updated Successfully"]);
            } else {
                return view("admin.$name", ["user" => $user, "error" => "profile password data failed to update"]);
            }
        } elseif ($name == "suspend") {
            $result = User::where("id", "=", $id)->update([
                'status' => 2,
            ]);
            return response()->json(["success" => true, "message" => "User suspended successfully"]);
        } elseif ($name == "activate") {
            $result = User::where("id", "=", $id)->update([
                'status' => 1,
            ]);
            return response()->json(["success" => true, "message" => "User activation successfully"]);
        } elseif ($name == "make-admin") {
            $result = User::where("id", "=", $id)->update([
                'role' => 1,
            ]);
            return response()->json(["success" => true, "message" => "User made admin successfully"]);
        } elseif ($name == "unmake-admin") {
            $result = User::where("id", "=", $id)->update([
                'role' => 0,
            ]);
            return response()->json(["success" => true, "message" => "User  admin cancled successfully"]);
        }
    }

    /**
     * This is for the admin to view all the plans
     */
    public function plansAdmin(Request $request)
    {
        if ($request->method() == "GET") {
            $plans = Plan::all();
            return view("admin.plan", ["plans" => $plans]);
        }
    }

    /**
     * This is for the admin to view all the application
     */
    public function applicationAdmin(Request $request, $name = null)
    {
        if ($request->method() == "GET") {
            if ($name == "edit-application") {
                $app = Application::where("id", "=", 1)->get()->first();
                return view("admin.$name", ["app" => $app]);
            } else {
                $app = Application::where("id", "=", 1)->get()->first();
                return view("admin.application", ["app" => $app]);
            }
        }

        if ($name == "edit-application") {
            $data = (object) $request->all();
            $result = Application::where("id", "=", 1)->update([
                'bitcoin_address' => $data->bitcoin_address,
                // 'ethereum_address' => $data->ethereum_address,
                'btc_cash_address' => $data->btc_cash_address,
                'litecoin_address' => $data->litecoin_address,
                'binancecoin_address' => $data->binancecoin_address,
                // 'dodgecoin_address' => $data->dodgecoin_address,
                'usdt_address' => $data->usdt_address,

            ]);
            $app = Application::where("id", "=", 1)->get()->first();
            if ($result) {
                return view("admin.$name", ["app" => $app, "success" => "App  Data Updated Successfully"]);
            } else {
                return view("admin.$name", ["app" => $app, "error" => "App Data failed to update"]);
            }
        }
    }

    /**
     * This is for the admin to view all the profile
     */
    public function profileAdmin(Request $request)
    {
        if ($request->method() == "GET") {
            $user = User::where("id", "=", $request->user()->id)->get()->first();
            return view("admin.profile", ["user" => $user]);
        }
    }

    /**
     * This is for the admin to logout
     */
    public function logoutAdmin(Request $request)
    {
        /* for normal user logout */
        $userToLogout = User::find(auth()->user()->id);
        Auth::setUser($userToLogout);
        Auth::logout();
        return redirect()->route("admin.login");
    }

    /**
     * This is for the admin to view all the wallet
     */
    public function editWalletAdmin(Request $request, $id)
    {
        if ($request->method() == "GET") {
            return view("admin.edit-wallet");
        }
    }

    /**
     * This is for the admin to view all the wallet
     */
    public function editCustomerProfileAdmin(Request $request, $id)
    {
        if ($request->method() == "GET") {
            return view("admin.edit-customer-profile");
        }
    }

    /**
     * This is for the admin to view all the wallet
     */
    public function editCustomerPasswordAdmin(Request $request, $id)
    {
        if ($request->method() == "GET") {
            return view("admin.edit-customer-password");
        }
    }

    /**
     * This is for the admin to view all the plan
     */
    public function editPlanAdmin(Request $request, $id)
    {
        if ($request->method() == "GET") {
            $plan = Plan::where("id", "=", $id)->get()->first();
            if (empty($plan)) {
                abort(404);
            }
            return view("admin.edit-plan", ["plan" => $plan]);
        }
        $data = $request->all();
        $validated = $request->validate([
            "name" => ["required"],
            "min" => ["required", "numeric", "lt:max"],
            "max" => ["required", "numeric", "gt:min"],
            "type" => ["required"],
            "roi" => ["required"],
            "currency" => ["required"],
            "duration" => ["required"],
            "commission" => ["required", "numeric"],
        ]);
        unset($data["_token"], $data["edit-plan"]);
        $result = Plan::where("id", "=", $id)->update([
            'name' => $data['name'],
            "min" => ($data['currency'] == "USD") ? round($data['min'], 2) : $data['min'],
            "max" => ($data['currency'] == "USD") ? round($data['max'], 2) : $data['max'],
            'type' => $data['type'],
            'roi' => $data['roi'],
            'currency' => $data['currency'],
            'commission' => $data['commission'],
            'duration' => $data['duration'],
        ]);
        $plan = Plan::where("id", "=", $id)->get()->first();
        if ($result) {
            return view('admin.edit-plan', ["success" => "Plan updated successfully", "plan" => $plan]);
        } else {
            return view('admin.edit-plan', ["error" => "Plan Failed To update", "plan" => $plan]);
        }
    }

    /**
     * This is for the admin to view all the plan
     */
    public function deletePlanAdmin(Request $request, $id)
    {
        $plan = Plan::find($id);
        $plan->delete();
        echo json_encode(["success" => true]);
    }

    /**
     * This is for the admin to view all the plan
     */
    public function addPlanAdmin(Request $request)
    {
        if ($request->method() == "GET") {
            return view("admin.add-plan");
        }
        $data = $request->all();
        $validated = $request->validate([
            "name" => ["required"],
            "min" => ["required", "numeric", "lt:max"],
            "max" => ["required", "numeric", "gt:min"],
            "type" => ["required"],
            "roi" => ["required"],
            "currency" => ["required"],
            "duration" => ["required"],
            "commission" => ["required", "numeric"],
        ]);

        unset($data["_token"], $data["add-plan"]);
        $result = Plan::insert([
            'name' => $data['name'],
            "min" => ($data['currency'] == "USD") ? round($data['min'], 2) : $data['min'],
            "max" => ($data['currency'] == "USD") ? round($data['max'], 2) : $data['max'],
            'type' => $data['type'],
            'roi' => $data['roi'],
            'currency' => $data['currency'],
            'commission' => $data['commission'],
            'duration' => $data['duration'],
        ]);

        if ($result) {
            return view('admin.add-plan', ["success" => "Plan Added successfully"]);
        } else {
            return view('admin.add-plan', ["error" => "Plan Failed To Add"]);
        }
    }

    public function fakeTransaction(Request $request, $name = null, $id = null)
    {
        if ($request->method() == "GET") {
            if ($name == "add") {
                return view("admin.add-fake-transaction");
            }

            $fakeTransactions = fakeTransaction::get();
            // $depositsfakeTransactions = fakeTransaction::where("type","=","deposits")->limit(10)->get();
            return view("admin.fake-transaction", ["fakeTransactions" => $fakeTransactions]);
        }

        if ($name == "add") {
            $data = (object) $request->all();
            $validated = $request->validate([
                "name" => ["required", "unique:fake_transactions,name"],
                "amount" => ["required"],
                "transaction_type" => ["required"],
                "currency" => ["required"],
            ]);

            $result = fakeTransaction::create([
                "name" => $data->name,
                "type" => $data->transaction_type,
                "currency" => $data->currency,
                "amount" => $data->amount,
            ]);

            if ($result) {
                return view("admin.add-fake-transaction", ["success" => "Transaction Added successfully"]);
            } else {
                return view("admin.add-fake-transaction", ["error" => "Transaction Failed To Add"]);
            }
        } else if ($name == "delete") {
            $data = (object) $request->all();

            $fake = fakeTransaction::where("id", "=", $id)->delete();

            echo json_encode(["success" => true]);
        }
    }

    /**
     * This is for the admin to view all the application
     */
    public function editApplicationAdmin(Request $request, $id)
    {
        if ($request->method() == "GET") {
            return view("admin.edit-application");
        }
    }
}
