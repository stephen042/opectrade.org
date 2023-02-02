<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->decimal('dolla_balance', 16, 2)->default(0.00);
            $table->decimal('ethereum_balance', 16, 10)->default(0.00);
            $table->decimal('bitcoin_balance', 16, 10)->default(0.00);
            $table->decimal('referral_balance', 16, 2)->default(0.00);
            $table->decimal('dolla_withdrawals', 16, 2)->default(0.00);
            $table->decimal('bitcoin_withdrawals', 16, 10)->default(0.00);
            $table->decimal('ethereum_withdrawals', 16, 10)->default(0.00);
            $table->decimal('dolla_invested', 16, 2)->default(0.00);
            $table->decimal('bitcoin_invested', 16, 10)->default(0.00);
            $table->decimal('ethereum_invested', 16, 10)->default(0.00);


            
            $table->decimal('dolla_earned', 16, 2)->default(0.00);
            $table->decimal('ethereum_earned', 16, 10)->default(0.00);
            $table->decimal('bitcoin_earned', 16, 10)->default(0.00);


            $table->decimal('deposits', 16, 2)->default(0.00);
            $table->string("perfectmoney_address",200)->nullable();
            $table->string("bitcoin_address",200)->nullable();
            $table->string("usdt_address",200)->nullable();
            $table->string("ethereum_address",200)->nullable();
            $table->string("litecoin_address",200)->nullable();
            $table->string('bitcoincash_address',200)->nullable();
            $table->string('binancecoin_address',200)->nullable();
            $table->string('dodgecoin_address',200)->nullable();
            $table->timestamps();
        });

        DB::table('accounts')->insert(["user_id"=>1,"dolla_balance"=>0.00,"referral_balance"=>0.00,"ethereum_balance"=>0.00000000,"bitcoin_balance"=>0.00000000,"dolla_withdrawals"=>0.00,"deposits"=>0.00,"perfectmoney_address"=>"","bitcoin_address"=>"","usdt_address"=>"","ethereum_address"=>"","litecoin_address"=>""]);

        DB::table('accounts')->insert(["user_id"=>2,"dolla_balance"=>0.00,"referral_balance"=>0.00,"ethereum_balance"=>0.00000000,"bitcoin_balance"=>0.00000000,"dolla_withdrawals"=>0.00,"deposits"=>0.00,"perfectmoney_address"=>"","bitcoin_address"=>"","usdt_address"=>"","ethereum_address"=>"","litecoin_address"=>""]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
