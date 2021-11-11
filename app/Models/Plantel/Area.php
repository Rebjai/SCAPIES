<?php

namespace App\Models\Plantel;

use App\Models\Plantel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Area extends Model
{
    use HasFactory;
    /**
     * The planteles that belong to the Area
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function planteles(): BelongsToMany
    {
        return $this->belongsToMany(Plantel::class);
    }
}
