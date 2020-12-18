<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestuarentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restuarents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Rid');
            $table->string('restuarent_name');
            $table->string('restuarent_function');
            $table->string('max_Capacity');
            $table->string('restuarent_details');
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
        Schema::dropIfExists('restuarents');
    }
}
