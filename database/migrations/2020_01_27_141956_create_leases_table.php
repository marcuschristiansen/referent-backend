<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leases', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start_date');
            $table->integer('lease_duration_months');
            $table->integer('lease_termination_notice_months');
            $table->float('rental_amount', 8, 2);
            $table->float('deposit_amount', 8, 2);
            $table->float('late_fee_amount', 8, 2);
            $table->json('bank_details');
            $table->enum('due_day', [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31]);
            $table->enum('electricity_water', ['Billed', 'Included', 'Prepaid']);
            $table->boolean('sub_letting_allowed');
            $table->string('file_name', 255)->nullable();
            $table->unsignedInteger('listing_id');
            $table->unsignedInteger('tenant_id')->nullable();
            $table->timestamps();
        });

        Schema::table('leases', function (Blueprint $table) {
            $table->foreign('listing_id')->references('id')->on('listings');
            $table->foreign('tenant_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leases');
    }
}
