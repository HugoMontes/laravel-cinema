<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'generos';
    protected $primaryKey = 'id';
    protected $fillable = ['genero'];
    public $timestamps = true;

    public function peliculas(){
        return $this->hasMany('App\Pelicula');
    }
}
