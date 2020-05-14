<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationSolutionRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('station_solution_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email_id')->nullable();
            $table->integer('password')->nullable();
            $table->integer('phone_no')->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('station_solution_registrations');
    }
}
