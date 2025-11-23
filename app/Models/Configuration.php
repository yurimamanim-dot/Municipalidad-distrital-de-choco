<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = ['direccion', 'email', 'telefono', 'whatsapp', 'facebook'];
}