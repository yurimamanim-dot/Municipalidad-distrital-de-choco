<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Noticia extends Model
{
        use HasFactory;

    protected $fillable = [
        'titulo',
        'slug',
        'bajada',
        'contenido',
        'imagen_portada',
        'categoria',
        'publicado_en',
        'es_destacada',
    ];

    protected $casts = [
        'publicado_en' => 'datetime',
        'es_destacada' => 'boolean',
    ];

    protected static function booted()
    {
        static::creating(function (Noticia $noticia) {
            if (empty($noticia->slug)) {
                $noticia->slug = Str::slug($noticia->titulo) . '-' . uniqid();
            }
        });
    }

    public function getFechaPublicacionFormateadaAttribute()
    {
        $fecha = $this->publicado_en ?? $this->created_at;

        return $fecha?->format('d \d\e F, Y'); // “15 de Octubre, 2023”
    }
}
