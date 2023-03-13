<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id_note');
            $table->string('note');
            $table->date('date_note');
            $table->bigInteger('id_matiere')->unsigned();
            $table->bigInteger('id_type')->unsigned();            
            $table->bigInteger('id_eleve')->unsigned();            
            $table->bigInteger('id_app')->unsigned();            
            $table->foreign('id_eleve')->references('id_eleve')->on('eleves')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_type')->references('id_type')->on('type_notes')->onDelete('cascade')->onUpdate('cascade');            
            $table->foreign('id_app')->references('id_app')->on('appreciations')->onDelete('cascade')->onUpdate('cascade');            
            $table->foreign('id_matiere')->references('id_matiere')->on('matieres')->onDelete('cascade')->onUpdate('cascade');            
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
        Schema::dropIfExists('notes');
    }
}
