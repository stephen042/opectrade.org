<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string("bitcoin_address",200)->nullable();
            $table->string("ethereum_address",200)->nullable();
            $table->string("btc_cash_address",200)->nullable();
            $table->string("litecoin_address",200)->nullable();
            $table->string("binancecoin_address",200)->nullable();
            $table->string("usdt_address",200)->nullable();
            $table->string("dodgecoin_address",200)->nullable();

            $table->timestamps();
        });

        DB::table('applications')->insert(["bitcoin_address"=>"dsddedd","ethereum_address"=>"sdsdddsd","btc_cash_address"=>"dssdsdfd","litecoin_address"=>"dsdsddsd"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
