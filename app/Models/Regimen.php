<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regimen extends Model
{
    use HasFactory;
    protected $table = 'regimenes';
    static $rules = ["nombre"=> "required"];
    protected $fillable = ["nombre"];
}
