<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logement', function (Blueprint $table) {
            $table->increment('IdLogement');
            $table->string('Type', 10);
            $table->integer('Superficie', 10);
            $table->integer('NbPiece0', 10);
            $table->string('Adresse', 50);
            $table->string('AdressComp', 50);
            $table->string('Ville', 50);
            $table->integer('NbColoc', 10);
            $table->integer('Prix', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logement');
    }
}
