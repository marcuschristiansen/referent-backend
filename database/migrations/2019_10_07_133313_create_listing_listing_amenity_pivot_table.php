<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingListingAmenityPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_listing_amenity', function (Blueprint $table) {
            $table->integer('listing_id')->unsigned()->index();
            $table->foreign('listing_id')->references('id')->on('listings')->onDelete('cascade');
            $table->integer('listing_amenity_id')->unsigned()->index();
            $table->foreign('listing_amenity_id')->references('id')->on('listing_amenities')->onDelete('cascade');
            $table->primary(['listing_id', 'listing_amenity_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listing_listing_amenity');
    }
}
