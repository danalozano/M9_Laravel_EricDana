<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'precio',
        'pais',
        'fecha_ida',
        'fecha_vuelta'
    ];
}
