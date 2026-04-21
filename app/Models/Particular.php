<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    use HasFactory;

    protected $table = 'particulars';

    protected $fillable = ['nombre', 'direccion', 'telefono'];

    public function habitaciones()
    {
        return $this->belongsToMany(Habitacion::class, 'agencia_habitacions');

    }
}
