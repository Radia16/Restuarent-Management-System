<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKitchenAssignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitchen_assigns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('outlet_id');//foreign key
            $table->string('kitchen_list_id');//foreign key
            $table->string('customer_id');//foreign key
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
        Schema::dropIfExists('kitchen_assigns');
    }
}
