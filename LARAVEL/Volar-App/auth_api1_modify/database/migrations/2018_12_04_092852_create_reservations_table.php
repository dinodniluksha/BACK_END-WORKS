<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pid');
            $table->string('productcategory');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('contact');
            $table->string('address');
            $table->string('country');
            $table->string('comments')->nullable();
            $table->date('arrival')->nullable();
            $table->date('departure')->nullable();
            $table->string('hoteltimecategory')->nullable();
            $table->string('noofrooms')->nullable();
            $table->string('roomtype')->nullable();
            $table->string('adults')->nullable();
            $table->string('childs')->nullable();
            $table->string('functiontype')->nullable();
            $table->string('restnoodpersons')->nullable();
            $table->time('time_from')->nullable();
            $table->time('time_to')->nullable();
            $table->string('amount')->default(0);
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
        Schema::dropIfExists('reservations');
    }
}
