<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentAddCanditatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitment_add_canditates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('outlet_id')->nullable();
            $table->string('candidate_id');
            $table->text('candidate_name');
            $table->string('email');
            $table->integer('phone');
            $table->integer('alt_phone')->nullable();
            $table->string('present_add')->nullable();
            $table->string('par_add')->nullable();
            $table->date('dob')->nullable();
            $table->string('image')->nullable();
            $table->string('obtained_degree')->nullable();
            $table->text('university_name')->nullable();
            $table->decimal('gpa')->nullable();
            $table->decimal('outof_gpa')->nullable();
            $table->text('company_name')->nullable();
            $table->text('designation')->nullable();
            $table->string('working_period')->nullable();
            $table->text('duties')->nullable();
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
        Schema::dropIfExists('recruitment_add_canditates');
    }
}
