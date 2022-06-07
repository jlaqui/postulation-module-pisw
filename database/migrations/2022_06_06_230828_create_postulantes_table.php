<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulantes', function (Blueprint $table) {
            $table->id('postulanteId');
            $table->string('postulanteFullname');
            $table->integer('postulantePhone');
            $table->string('postulanteEmail');
            $table->integer('tipoPostulanteId');
            $table->integer('tipoDocumentoId');
            $table->string('postulanteDocument');
            $table->string('postulanteStatus');
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
        Schema::dropIfExists('postulantes');
    }
}
