<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adjunto extends Model
{
    protected $fillable = ['tramite_id','nombre_original','mime','size','path'];

    public function tramite()
    {
        return $this->belongsTo(Tramite::class);
    }
}

