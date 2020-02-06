<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaseInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lease_invites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->unsignedInteger('lease_id');
            $table->timestamps();
        });

        Schema::table('lease_invites', function (Blueprint $table) {
            $table->foreign('lease_id')->references('id')->on('leases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lease_invites');
    }
}
