<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'postulanteFullname',
        'postulantePhone',
        'postulanteEmail',
        'tipoPostulanteId',
        'tipoDocumentoId',
        'postulanteDocument',
        'postulanteStatus'
    ]; 
}
