<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rows', function (Blueprint $table) {
            $table->id();
            $table->integer('team_id');
            $table->integer('position');
            $table->integer('matches');
            $table->integer('wins');
            $table->integer('losses');
            $table->integer('draws');
            $table->integer('scoresAgainst');
            $table->integer('points');
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rows');
    }
}
