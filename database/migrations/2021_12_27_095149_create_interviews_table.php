<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('outlet_id')->nullable();
            // $table->integer('shortlist_id');
            $table->integer('candidate_id');
            $table->text('candidate_name');
            $table->text('interviewr_name');
            $table->date('interview_date');
            $table->integer('designation_id');
            $table->decimal('viva');
            $table->decimal('written');
            $table->decimal('mcq');
            $table->decimal('total_mark');
            $table->string('selection');
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
        Schema::dropIfExists('interviews');
    }
}
