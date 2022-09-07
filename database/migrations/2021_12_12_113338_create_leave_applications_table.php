<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_applications', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('outlet_id');
            $table->integer('employee_id');
            $table->integer('leave_type_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('days');
            $table->date('approve_start')->nullable();
            $table->date('approve_end')->nullable();
            $table->integer('approve_day')->nullable();
            $table->text('application');
            $table->tinyInteger('approve')->default(0);


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
        Schema::dropIfExists('leave_applications');
    }
}


