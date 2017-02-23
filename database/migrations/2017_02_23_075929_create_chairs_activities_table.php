<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChairsActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chairs_activites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chair_id')->nullable()->unsigned()->index();
            $table->integer('movie_id')->nullable()->unsigned()->index();
            $table->integer('room_id')->nullable()->unsigned()->index();
            $table->boolean('active')->default(true);
            /**
             * Table relations
             */
            $table->foreign('chair_id')->references('id')->on('chairs')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign('movie_id')->references('id')->on('movies')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chairs_activites');
    }
}
