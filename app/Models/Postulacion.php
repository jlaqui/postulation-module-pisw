<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'postulacionPostulanteId',
        'postulacionConvocatoriaId',
        'postulacionCertificate',
        'postulacionRanking',
        'postulacionGradeBook',
        'postulacionCTIFile',
        'postulacionPresentation',
        'postulacionAntecedents',
        'postulacionStatus'
    ];
}