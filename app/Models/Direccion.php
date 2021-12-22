<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;
    protected $table = 'direcciones';
    public static $rules = [
        'calle' => ['required', 'string', 'max:255'],
        'numero' => ['required', 'string', 'max:255'],
        'colonia' => ['required', 'string', 'max:255'],
        'localidad' => ['required'],
        'codigo_postal' => ['required', 'string', 'max:6'],
    ];
    protected $fillable = ['calle', 'numero', 'colonia', 'localidad', 'codigo_postal'];
}
