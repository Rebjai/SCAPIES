<?php

namespace App\Models;

use App\Models\Alumno\Alumno;
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
    protected $fillable = ['alumno_id', 'aviso_privacidad', 'continuar_estudios','mes'];
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
    
    public function alumno(): BelongsTo
    {
        return $this->belongsTo(Alumno::class);
    }
    public function modalidad_estudios(): BelongsTo
    {
        return $this->belongsTo(ModalidadEstudio::class);
    }

    public function getOpcionPrincipalAttribute()
    {
        // return $this->opciones_carreras()->where('principal', true)->first();
        $option = $this->getRelation('opciones_carreras')->where('principal', true)->first();
        if ($option) {
            return $option->carrera_no_registrada?:$option->carrera?->carrera;
        }
        return 'N/A';
    }
    public function getOpcionSecundariaAttribute()
    {
        $option =$this->opciones_carreras()->where('principal', false)->first();
        if ($option) {
            return $option->carrera?->carrera;
        }
        return 'N/A';
    }

    public function getUniversidadPrincipalAttribute()
    {
        // return $this->opciones_carreras()->where('principal', true)->first();
        $option = $this->getRelation('opciones_carreras')->where('principal', true)->first();
        if ($option) {
            return $option->carrera_no_registrada?'OTRA':$option->carrera->universidad->nombre;
        }
        return 'N/A';
    }
    public function getUniversidadSecundariaAttribute()
    {
        $option =$this->opciones_carreras()->where('principal', false)->first();
        if ($option) {
            return $option->carrera?->universidad->nombre;
        }
        return 'N/A';
    }
}
