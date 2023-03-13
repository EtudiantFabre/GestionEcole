<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->bigIncrements('id_eleve');
            $table->string('nom_eleve');
            $table->string('prenom_eleve');
            $table->string('sexe');
            $table->string('date_naissance');
            $table->json('adresse');
            $table->bigInteger('id_parent')->unsigned();
            $table->bigInteger('id_etablissement')->unsigned();
            //$table->foreign('id_patient')->references('id_patient')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_parent')->references('id_parent')->on('parents')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissements')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('eleves');
    }
}
