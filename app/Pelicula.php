<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'peliculas';
    protected $primaryKey = 'id';
    protected $fillable = ['titulo', 'costo', 'resumen', 'estreno', 'genero_id', 'user_id'];
    public $timestamps = true;
}
