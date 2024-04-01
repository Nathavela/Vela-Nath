<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    use HasFactory;
    public function animales()
    {
        return $this->hasMany(Animal::class, 'cuidador_id');
    }

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }
}

    

