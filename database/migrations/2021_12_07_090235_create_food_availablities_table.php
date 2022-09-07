<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodAvailablitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_availablities', function (Blueprint $table) {
            $table->id();
            $table->string('outlet_id')->nullable();
            $table->string('food_id')->nullable();
            $table->string('available_day')->nullable();
            $table->time('frome_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('food_availablities');
    }
}


