<?php

namespace App\Models\Alumno;

use App\Models\Bachillerato\Area;
use App\Models\Bachillerato\Plantel;
use App\Models\Bachillerato\Subsistema;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DatoAcademico extends Model
{
    use HasFactory;
    protected $table = 'datos_academicos';
    protected $guarded = [];

    /**
     * Get the subsistema that owns the DatoAcademico
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subsistema(): BelongsTo
    {
        return $this->belongsTo(Subsistema::class);
    }
    public function plantel(): BelongsTo
    {
        return $this->belongsTo(Plantel::class);
    }
    public function campo_formacion(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }
}
