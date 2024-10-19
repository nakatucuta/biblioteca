<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    // Especifica el nombre de la tabla en la base de datos (opcional si el nombre es plural del modelo)
    protected $table = 'libros';

    // Permite asignación masiva de los siguientes campos
    protected $fillable = ['name', 'cantidad'];

    // Si no deseas que los campos timestamps (created_at y updated_at) sean gestionados automáticamente
    public $timestamps = true;
}
