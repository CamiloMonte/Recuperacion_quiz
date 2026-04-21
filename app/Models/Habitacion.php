<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $table = 'habitacions';

    protected $fillable = ['tipo', 'hotel_id'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function agencias()
    {
        return $this->belongsToMany(Agencia::class, 'agencia_habitacions');

    }

    public function particulares()
    {
        return $this->belongsToMany(Particular::class, 'particular_habitacions');

    }
}
