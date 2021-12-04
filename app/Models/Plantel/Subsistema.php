<?php

namespace App\Models\Plantel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsistema extends Model
{
    use HasFactory;

    static $rules = [
		'nombre' => 'required',
    ];

    protected $fillable = ['nombre'];

    
    
}
