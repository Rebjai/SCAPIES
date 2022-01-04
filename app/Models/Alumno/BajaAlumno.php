<?php

namespace App\Models\Alumno;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BajaAlumno extends Model
{
    use HasFactory;
    protected $fillable = ['causa_baja_id', 'apoyo_economico'];
}
