<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pref', function (Blueprint $table) {
            $table->increment('IdPref');
            $table->boolean('Sport', 1);
            $table->boolean('Musique', 1);
            $table->boolean('Lecture', 1);
            $table->boolean('Arts', 1);
            $table->boolean('Fete', 1);
            $table->boolean('JeuxVideos', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pref');
    }
}
