<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        // de esta manera especifico que mi llave clave es slug
        return 'slug';
    }

}
