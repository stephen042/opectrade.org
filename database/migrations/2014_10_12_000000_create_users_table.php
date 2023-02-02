<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table){
            $table->id();
            $table->string('firstname',200);
            $table->string('lastname',200);
            $table->string('username',200);
            $table->string('referral',200)->nullable();
            $table->tinyInteger('referral_count')->default(0);
            $table->string('email')->unique();
            $table->string('country',200);
            $table->string('phone',200);
            $table->string('image',200)->default(asset("assets/images/user.png"));
            $table->tinyInteger('role')->default(0);
            $table->tinyInteger('accesslevel')->default(0);
            $table->string('password',200);
            $table->string('bitcoin_address',200)->nullable();
            $table->string('etherium_address',200)->nullable();
            $table->string('litecoin_address',200)->nullable();
            $table->string('bitcoincash_address',200)->nullable();
            $table->string('binancecoin_address',200)->nullable();
            $table->string('dodgecoin_address',200)->nullable();
            $table->string('usdt_address',200)->nullable();
            $table->string('pin',200);
            $table->tinyInteger('status')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(["firstname"=>"admin","lastname"=>"admin","pin"=>'444444',"username"=>"admin1","country"=>"nigeria","phone"=>"3333333333333","email"=>"edmund10arinze@gmail.com","image"=>"https://image.flaticon.com/icons/png/512/64/64495.png","password"=>'$2y$10$JvA0eWSSCuRJ9aCXubeTKe6ngDazhb40KH0fsiktEy6PcGoG.B4bq',"role"=>"1"]);
        DB::table('users')->insert(["firstname"=>"admin","lastname"=>"admin","pin"=>'444444',"username"=>"admin1","country"=>"nigeria","phone"=>"3333333333333","email"=>"edmund10@gmail.com","image"=>"https://image.flaticon.com/icons/png/512/64/64495.png","password"=>'$2y$10$JvA0eWSSCuRJ9aCXubeTKe6ngDazhb40KH0fsiktEy6PcGoG.B4bq',"role"=>"0"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
