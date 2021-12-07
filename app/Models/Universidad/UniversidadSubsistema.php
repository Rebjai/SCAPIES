<?php

namespace App\Models\Universidad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversidadSubsistema extends Model
{
    use HasFactory;
    static $rules = ["nombre"=> "required"];
    protected $fillable = ["nombre"];
}
