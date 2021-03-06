<?php

use Kalnoy\Nestedset\NestedSet;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_amenities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            NestedSet::columns($table);
            $table->enum('type', ['checkbox', 'select', 'radio'])->nullable();
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
        Schema::dropIfExists('listing_amenities');
    }
}
