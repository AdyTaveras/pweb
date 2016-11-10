<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('last_name',50);
            $table->string('ssn',14)->unique();
            $table->string('address',60);
            $table->string('work_location',60);
            $table->string('email',50)->unique()->nullable();
            $table->string('phone',12)->unique();
            $table->string('phone2',12)->nullable();
            $table->string('debt',3)->default('No');
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
        Schema::drop('clients');
    }
}
