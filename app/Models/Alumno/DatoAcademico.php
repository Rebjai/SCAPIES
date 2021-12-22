<?php

namespace App\Models\Alumno;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatoAcademico extends Model
{
    use HasFactory;
    protected $table = 'datos_academicos';
    protected $guarded = [];
}
