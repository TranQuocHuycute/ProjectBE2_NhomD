<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("country");
            $table->integer("HomeTeamID");
            $table->string("HomeTeam");
            $table->integer("AwayTeamID");
            $table->string("AwayTeam");
            $table->integer("HomeScore");
            $table->integer("AwayScore");
            $table->BigInteger("IncidentID");
            $table->string("ScheduleDate");
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
        Schema::dropIfExists('games');
    }
}
