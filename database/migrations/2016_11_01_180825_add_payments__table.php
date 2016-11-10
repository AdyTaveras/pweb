<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('credit_id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->bigInteger('fee_payment');
            $table->string('name',50);
            $table->string('last_name',50);
            $table->string('ssn',14);
            $table->timestamps();

            //Forein keys

            $table->foreign('credit_id')->references('id')->on('credits')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payments');
    }
}
