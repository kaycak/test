<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id')->nullable()->unsigned()->index();
            $table->integer('movie_id')->nullable()->unsigned()->index();
            /**
             * Table relations
             */
            $table->foreign('room_id')->references('id')->on('rooms')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign('movie_id')->references('id')->on('movies')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms_movies');
    }
}
