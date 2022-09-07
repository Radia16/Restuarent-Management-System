<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingMethodSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_method_settings', function (Blueprint $table) {
            $table->id();
            $table->string('outlet_id');//foreign key
            $table->string('shipping_method_name');
            $table->string('shipping_rate');
            $table->string('payment_method_id');//foreign key
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
        Schema::dropIfExists('shipping_method_settings');
    }
}
