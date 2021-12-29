<?php

namespace App\Models;

use App\Models\Universidad\Carrera;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cuestionario extends Model
{
    use HasFactory;
    static $rules = [
		'clave' => 'required',
		'nombre' => 'required',
    ];
    protected $fillable = ['alumno_id'];
    /**
     * Get all of the carreras for the Cuestionario
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carreras(): HasMany
    {
        return $this->hasMany(Carrera::class);
    }
}
