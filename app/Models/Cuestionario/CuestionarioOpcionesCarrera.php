<?php

namespace App\Models\Cuestionario;

use App\Models\Universidad\Carrera;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CuestionarioOpcionesCarrera extends Model
{
    use HasFactory;
    protected $fillable = ['principal','carrera_no_registrada','carrera_id'];

    /**
     * Get the carrera associated with the CuestionarioOpcionesCarrera
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrera(): BelongsTo
    {
        return $this->belongsTo(Carrera::class);
    }
}
