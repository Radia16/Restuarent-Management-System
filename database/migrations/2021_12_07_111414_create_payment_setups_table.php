<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_setups', function (Blueprint $table) {
            $table->id();
            $table->string('outlet_id');//foreign key
            $table->string('payment_method_id');//foreign key
            $table->string('marchant_id_or_application_id');
            $table->string('currency');
            $table->string('mode');
            $table->string('status');//foreign key
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
        Schema::dropIfExists('payment_setups');
    }
}
