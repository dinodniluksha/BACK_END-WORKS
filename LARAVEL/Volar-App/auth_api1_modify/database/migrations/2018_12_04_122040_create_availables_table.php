<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pro_id');
            $table->date('available_date');
            $table->string('day')->nullable();
            $table->string('night')->nullable();
            $table->integer('luxury')->nullable();
            $table->integer('semi')->nullable();
            $table->integer('eco')->nullable();
            $table->integer('single')->nullable();
            $table->integer('double')->nullable();
            $table->time('time_from')->nullable();
            $table->time('time_to')->nullable();
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
        Schema::dropIfExists('availables');
    }
}
