<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string("currency",50)->default("USD");
            $table->string("type",50);
            $table->bigInteger("user_id");
            $table->text("message")->nullable();
            $table->decimal("amount",16,10)->default(0.00);
            $table->decimal("growth_amount",16,10)->default(0.00);
            $table->text("proof")->nullable();
            $table->string("plan_name",200)->nullable();
            $table->string("duration",200)->nullable();
            $table->string("percent_commission",200)->nullable();
            $table->timestamp('close_date')->nullable();
            $table->string("withdrawal_address",200)->nullable();
            $table->string("withdrawal_payment_method",200)->nullable();
            $table->decimal("withdrawal_amount",16,10)->nullable();
            $table->tinyInteger("status")->default(1);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
