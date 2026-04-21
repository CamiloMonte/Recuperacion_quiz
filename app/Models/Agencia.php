<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'direccion', 'telefono', 'nombre_persona'];

    public function habitaciones()
    {
        return $this->belongsToMany(Habitacion::class, 'agencia_habitacions');

}
}
