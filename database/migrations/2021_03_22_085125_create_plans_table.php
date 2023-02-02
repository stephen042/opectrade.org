<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string("name",150);
            $table->decimal("min",16,10)->default(0.00);
            $table->decimal("max",16,10)->default(0.00);
            $table->string("type",150)->nullable();
            $table->string("roi",200)->nullable();
            $table->string("currency",150)->nullable();
            $table->string("duration",150)->nullable();
            $table->string("commission",150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
