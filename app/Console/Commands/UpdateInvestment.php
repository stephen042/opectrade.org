<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Transaction;
use App\Models\Account;



class UpdateInvestment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:accurral';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command updates the accurral of users investment';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $activeInvestments  = Transaction::where("status","=","1")->where("type","=","investment")->get();
        Transaction::where("status","=","1")->where("type","=","investment")->update(['growth_amount'=>3000]);                                                                                                                                                                                                                          

        foreach ($activeInvestments as $key => $value) {
            $value = (object) $value;
            $start_date = date_create($value->created_at);
            $close_date = date_create($value->close_date);
            $difference = date_diff($start_date, $close_date);
            $noOfDays = $difference->format("%r%a");
            // echo $noOfDays."\n";

            $commission = explode("-",$value->percent_commission);
            $commission = $commission[0];
            $initialAmount = $value->amount;
            $dailyAmount = (($commission/100) * $initialAmount) / $noOfDays;
            // echo "initial amount: $initialAmount, daily amount: $dailyAmount, No of days : $noOfDays, roi : $commission\n";
            //    check if todays date have passed the close date
            $todays_date = date_create();
            $newDiff = date_diff($todays_date, $close_date);
            $leftNoOfDays = $newDiff->format("%r%a");
            // //    echo "<br>$".$dailyAmount." , days : ".$leftNoOfDays;
            $newGrowthAmount =   $value->growth_amount  + $dailyAmount;
               echo "<br>$".$newGrowthAmount." , days : ".$leftNoOfDays;

            if ($leftNoOfDays >= 0) {
                Transaction::where("id","=","$value->id")->update([
                    'growth_amount'=>$newGrowthAmount,
                ]);
                $userAccount = Account::where("user_id","=","$value->user_id")->get()->first();
                $newEarned = $userAccount->{config('app.iso_account')[$value->currency]."_earned"} + $dailyAmount;
                Account::where("user_id","=","$value->user_id")->update([
                    config('app.iso_account')[$value->currency]."_earned"=>  $newEarned,
                ]);
            } else {
                $userAccount = Account::where("user_id","=","$value->user_id")->get()->first();
                $newEarned = $userAccount->{config('app.iso_account')[$value->currency]."_earned"} + $dailyAmount;
                $balance = $userAccount->{config('app.iso_account')[$value->currency]."_balance"} + $newGrowthAmount;

                Account::where("user_id","=","$value->user_id")->update([
                    config('app.iso_account')[$value->currency]."_earned"=>$newEarned,
                    config('app.iso_account')[$value->currency]."_balance"=> $balance,
                ]);
                Transaction::where("id","=","$value->id")->update([
                    'growth_amount'=>$newGrowthAmount,
                    'status'=>2
                ]);
            }
        }
        return 0;
    }
}
