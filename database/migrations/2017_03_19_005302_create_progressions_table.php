<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgressionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progressions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');

            $table->integer('id_genre')->unsigned();
            $table->foreign('id_genre')->references('id')->on('genres');

            $table->integer('id_key')->unsigned();
            $table->foreign('id_key')->references('id')->on('keys');

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
        Schema::dropIfExists('progressions');
    }
}
