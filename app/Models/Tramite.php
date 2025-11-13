<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    protected $fillable = [
        'nombre','documento','correo','telefono',
        'tipo','asunto','descripcion',
        'expediente','estado','canal','fecha_recepcion'
    ];

    protected $casts = [
        'fecha_recepcion' => 'datetime',
    ];

    public function adjuntos()
    {
        return $this->hasMany(Adjunto::class);
    }
}

