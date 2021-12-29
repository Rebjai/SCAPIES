<?php

namespace App\Models\Universidad;

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
}
