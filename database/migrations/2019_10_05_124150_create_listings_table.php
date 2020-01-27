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
            $table->unsignedInteger('user_id');
            $table->string('name')->nullable();
            $table->unsignedInteger('listing_type_id');
            $table->boolean('house_share');
            $table->string('residential_address');
            $table->string('unit_number')->nullable();
            $table->unsignedInteger('city_id');
            $table->string('zip_code')->nullable();
            $table->json('rooms')->nullable();
            $table->json('parking')->nullable();
            $table->timestamps();
        });

        Schema::table('listings', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('listing_type_id')->references('id')->on('listing_types');
            $table->foreign('city_id')->references('id')->on('cities');
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
