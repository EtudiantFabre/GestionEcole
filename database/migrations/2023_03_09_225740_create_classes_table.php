<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id_classe');
            $table->string('nom_classe', 100)->default('rien');
            $table->date('annee_scolaire');
            $table->bigInteger('id_niveau')->unsigned(); // Ajouter la colonne "id_niveau"
            $table->foreign('id_niveau')->references('id_niveau')->on('niveau_series')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('classes');
    }
}
