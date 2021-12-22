<?php

namespace App\Models\Alumno;

use App\Models\Direccion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function direccion()
    {
        return $this->belongsTo(Direccion::class);
    }
    public function formacion()
    {
        return $this->belongsTo(DatoAcademico::class,'datos_academicos_id');
    }
}
