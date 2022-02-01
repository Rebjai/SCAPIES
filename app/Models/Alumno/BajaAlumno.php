<?php

namespace App\Models\Alumno;

use App\Models\Cuestionario\CausaBaja;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BajaAlumno extends Model
{
    use HasFactory;
    protected $fillable = ['causa_baja_id', 'apoyo_economico'];
    
    /**
     * Get the causa_baja that owns the BajaAlumno
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function causa_baja(): BelongsTo
    {
        return $this->belongsTo(CausaBaja::class);
    }
}
