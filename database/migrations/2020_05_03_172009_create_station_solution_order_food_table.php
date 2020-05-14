<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationSolutionOrderFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station_solution_order_foods', function (Blueprint $table) {
            $table->id();
            $table->string('user_name')->nullable();
            $table->string('authtoken')->nullable();
            $table->integer('hotel_id')->nullable();
            $table->longText('taken_food_description')->nullable();
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
        Schema::dropIfExists('station_solution_order_foods');
    }
}
