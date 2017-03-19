<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgressionsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progressions_types', function(Blueprint $table)
        {
            $table->integer('id_progression')->unsigned()->nullable();
            $table->foreign('id_progression')->references('id')->on('progressions')->onDelete('cascade');

            $table->integer('id_type')->unsigned()->nullable();
            $table->foreign('id_type')->references('id')->on('types')->onDelete('cascade');

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
        Schema::dropIfExists('progressions_types');
    }
}
