<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Especie extends Model
{
    use HasFactory;
    public function animal()
     {
        return $this->hasMany(Animal::class, 'especie_id');
     }
    
    public function recinto()
    {
        return $this->belongsTo(Recinto::class, 'recinto_id');
    }
}
    
