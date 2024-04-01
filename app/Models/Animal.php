<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Animal extends Model
{
    use HasFactory;
    public function especie()
    {
        return $this->belongsTo(Especie::class, 'especie_id');
    }

    public function recinto()
    {
        return $this->belongsTo(Recinto::class, 'recinto_id');
    }

    public function cuidador()
    {
        return $this->belongsTo(Cuidador::class, 'cuidador_id');
    }
}
