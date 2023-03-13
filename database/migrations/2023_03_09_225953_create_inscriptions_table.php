<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->bigIncrements('id_inscription');
            $table->string('nom_eleve');
            $table->string('prenom_eleve');
            $table->string('sexe');
            $table->date('date_naissance');
            $table->json('adresse');
            $table->bigInteger('id_annee_scolaire')->unsigned();
            $table->bigInteger('id_eleve')->unsigned();
            $table->foreign('id_annee_scolaire')->references('id_annee_scolaire')->on('annee_scolaires')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_eleve')->references('id_eleve')->on('eleves')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
