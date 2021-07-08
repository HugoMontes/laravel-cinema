<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'pelicula_id'];
    public $timestamps = true;
}
