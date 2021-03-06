<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name',300);
            $table->string('slug',300);
            $table->string('shortName',300);
            $table->string('gender',300);
            $table->integer('userCount');
            $table->string('nameCode',300);
            $table->boolean('national');
            $table->integer('type');
            $table->integer('tournaments_id');
            $table->foreign('tournaments_id')->references('id')->on('unique_tournamentsses')->onDelete('cascade');
            $table->integer('seasons_id');
            $table->foreign('seasons_id')->references('id')->on('seasons')->onDelete('cascade');
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
        Schema::dropIfExists('teams');
    }
}
