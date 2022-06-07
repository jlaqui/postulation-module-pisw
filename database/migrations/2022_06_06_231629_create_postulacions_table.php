<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulacions', function (Blueprint $table) {
            $table->id('postulacionId');
            $table->integer('postulacionPostulanteId');
            $table->integer('postulacionConvocatoriaId');
            $table->string('postulacionCertificate');
            $table->string('postulacionRanking');
            $table->string('postulacionGradeBook');
            $table->string('postulacionCTIFile');
            $table->string('postulacionPresentation');
            $table->string('postulacionAntecedents');
            $table->string('postulacionStatus');
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
        Schema::dropIfExists('postulacions');
    }
}
