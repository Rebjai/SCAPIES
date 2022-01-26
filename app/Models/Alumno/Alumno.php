<?php

namespace App\Models\Alumno;

use App\Models\Cuestionario;
use App\Models\Direccion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    /**
     * Get the cuestionario associated with the Alumno
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuestionario(): HasOne
    {
        return $this->hasOne(Cuestionario::class);
    }

    public function getNombreCompletoAttribute()
    {
        return ucfirst($this->nombre).' '. ucfirst($this->apellido_paterno).' '. ucfirst($this->apellido_materno);
    }
}
