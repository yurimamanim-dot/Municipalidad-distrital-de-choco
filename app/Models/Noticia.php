<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'slug',
        'bajada',
        'contenido',
        'categoria',
        'imagen_portada',
        'publicado_en',
        'es_destacada',
    ];

    protected $casts = [
        'publicado_en' => 'datetime',
        'es_destacada' => 'boolean',
    ];

    /**
     * Genera automáticamente el slug a partir del título si está vacío.
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function (Noticia $noticia) {
            if (empty($noticia->slug)) {
                $noticia->slug = Str::slug($noticia->titulo);
            }
        });
    }

    /**
     * Fecha de publicación formateada en español.
     */
    public function getFechaPublicacionFormateadaAttribute(): string
    {
        if (!$this->publicado_en) {
            return '';
        }

        return $this->publicado_en
            ->locale('es')
            ->translatedFormat('d \\d\\e F, Y'); // Ej: 15 de mayo, 2025
    }
}
