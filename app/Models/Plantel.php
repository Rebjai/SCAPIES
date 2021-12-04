<?php

namespace App\Models;

use App\Models\Plantel\Area;
use App\Models\Plantel\Subsistema;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Plantel extends Model
{
    use HasFactory;
    static $rules = [
        "subsistema_id" => "required",
        "clave" => "required",
        "nombre"=> "required"
    ];

    protected $fillable = ['clave', 'nombre', 'subsistema_id'];

    /**
     * The areas that belong to the Plantel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function areas(): BelongsToMany
    {
        return $this->belongsToMany(Area::class);
    }
    /**
     * Get the subsistema associated with the Plantel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subsistema(): HasOne
    {
        return $this->hasOne(Subsistema::class);
    }
}
