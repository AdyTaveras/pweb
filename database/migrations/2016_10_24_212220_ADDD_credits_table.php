<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ADDDCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('amount');
            $table->enum('choices', ['Daily', 'Weekly','Monthly']);
            $table->integer('fee');
            $table->double('interest', 3, 2);
            $table->string('status')->default('Active');
            $table->integer('client_id')->unsigned();
            $table->bigInteger('fee_payment');
            $table->bigInteger('current_amount');
            $table->integer('current_fee');
            $table->timestamps();

            //Foreign keys

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
        Schema::drop('credits');
    }
}
