<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('listing_type_id');
            $table->string('residential_address');
            $table->string('unit_number')->nullable();
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('state_id');
            $table->unsignedInteger('country_id');
            $table->string('zip_code');
            $table->timestamps();
        });

        Schema::table('listings', function (Blueprint $table) {
            $table->foreign('listing_type_id')->references('id')->on('listing_types');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
