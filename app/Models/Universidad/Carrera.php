<?php

namespace App\Models\Universidad;

use App\Models\ModalidadEstudio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carrera extends Model
{
    use HasFactory;
    /**
     * Get the universidad that owns the Carrera
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function universidad(): BelongsTo
    {
        return $this->belongsTo(Universidad::class);
    }
    public function modalidad(): BelongsTo
    {
        return $this->belongsTo(ModalidadEstudio::class, 'modalidad_estudio_id');
    }
}
