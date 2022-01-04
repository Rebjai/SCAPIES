<?php

namespace App\Models;

use App\Models\Alumno\BajaAlumno;
use App\Models\Cuestionario\CuestionarioOpcionesCarrera;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cuestionario extends Model
{
    use HasFactory;
    static $rules = [
		'aviso_privacidad' => 'required',
    ];
    protected $fillable = ['alumno_id', 'aviso_privacidad', 'continuar_estudios'];
    /**
     * Get all of the carreras for the Cuestionario
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function opciones_carreras(): HasMany
    {
        return $this->hasMany(CuestionarioOpcionesCarrera::class);
    }

    /**
     * Get the baja associated with the Cuestionario
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function baja(): BelongsTo
    {
        return $this->belongsTo(BajaAlumno::class);
    }
}
