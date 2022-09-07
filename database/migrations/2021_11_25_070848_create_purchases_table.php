<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('sn');//vouchar number
            $table->unsignedBigInteger('outlet_id');
            $table->string('reference_no');
            $table->unsignedBigInteger('supplier_id');//from employee table or supplier table
            // $table->string('ingredients');
            $table->date('date');
            $table->decimal('grand_total');
            $table->decimal('paid');
            $table->decimal('due');
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
        Schema::dropIfExists('purchases');
    }
}
