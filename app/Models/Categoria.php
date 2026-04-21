<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['iva', 'descripcion'];

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
}
}
