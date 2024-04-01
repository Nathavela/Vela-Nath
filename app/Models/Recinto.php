<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{
    use HasFactory;
    public function animales()
    {
        return $this->hasMany(Animal::class, 'recinto_id');
    }

    public function especies()
    {
        return $this->hasMany(Especie::class, 'recinto_id');
    }

    public function actividades()
    {
        return $this->hasMany(Actividad::class, 'recinto_id');
    }
}

  

