<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('outlet_id'); //new//
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('maritial_status')->nullable();
            $table->integer('phone');
            $table->integer('e_phone')->nullable();
            $table->longText('address');
            $table->longText('par_address')->nullable();
            $table->string('image');
            $table->unsignedInteger('employee_id'); //new//
            $table->string('department');
            $table->string('designation');

            $table->date('doj');
            $table->float('salary');
            $table->integer('nid')->nullable();
            $table->string('a_qua')->nullable();
            $table->string('p_qua')->nullable();
            $table->string('experience')->nullable();
            $table->string('acc_name')->nullable();
            $table->string('acc_num')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('branch')->nullable();
            $table->string('code')->nullable();
            $table->string('file')->nullable();
            $table->string('agfile')->nullable();



            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();

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
        Schema::dropIfExists('employees');
    }
}