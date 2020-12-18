<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInqueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inqueries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Iid');
            $table->string('user_name');
            $table->string('prop_venue');
            $table->string('meeting_date');
            $table->string('meeting_time');
            $table->string('prop_owner');
            $table->string('prop_owner_contact');
            $table->string('prop_name');
            $table->string('message');
            $table->string('status');
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
        Schema::dropIfExists('inqueries');
    }
}
