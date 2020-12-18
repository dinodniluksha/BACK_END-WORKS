<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetinghallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetinghalls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Mid');
            $table->string('meetinghalls_name');
            $table->string('meetinghalls_details');
            $table->string('meetinghalls_price');
            $table->string('meetinghalls_capacity');
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
        Schema::dropIfExists('meetinghalls');
    }
}
