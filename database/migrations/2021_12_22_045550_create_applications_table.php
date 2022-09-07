<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('outlet_id');
            $table->string('appliaction_title');
            $table->string('store_name');
            $table->string('address');
            $table->string('email_address');
            $table->string('phone');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('opening_time');
            $table->string('close_time');
            $table->string('discount_type')->nullable();
            $table->double('discount_rate')->nullable();
            $table->double('service_charge')->nullable();
            $table->string('service_charge_type')->nullable();
            $table->double('vat_setting')->nullable();
            $table->double('gst_vat')->nullable();
            $table->double('payment_setup_id')->nullable();
            $table->string('min_delivery_time')->nullable();
            $table->double('language_id')->nullable();
            $table->string('date_format');
            $table->string('time_zone');
            $table->string('application_alignment');
            $table->string('powered_by_text');
            $table->string('footer_text');
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
        Schema::dropIfExists('applications');
    }
}
