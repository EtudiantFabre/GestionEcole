<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotisationParralelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotisation_parraleles', function (Blueprint $table) {
            $table->bigIncrements('id_cotisation');
            $table->integer('montant');
            $table->bigInteger('id_classe')->unsigned();            
            $table->foreign('id_classe')->references('id_classe')->on('classes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('cotisation_parraleles');
    }
}
