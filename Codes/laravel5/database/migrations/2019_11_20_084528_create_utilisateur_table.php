<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->increments('IdUtilisateur');
            $table->string('Login', 50);
            $table->string('Mdp', 100);
            $table->string('Nom', 50);
            $table->string('Prénom', 50);
            $table->string('Tel', 14);
            $table->string('Mail', 100);
            $table->string('DateNaiss', 10);
            $table->string('Profil', 15);
            $table->integer('IdPref', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateur');
    }
}
