<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferOutletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_outlets', function (Blueprint $table) {
            $table->id();
            $table->integer('reference_no');
            $table->date('date');
            $table->string('to_outlet');
            $table->string('status');
            $table->string('transfer_type')->nullable();
            $table->string('aboute_project')->nullable();
            $table->integer('qty_amount')->nullable();
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
        Schema::dropIfExists('transfer_outlets');
    }
}

