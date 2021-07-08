<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'directores';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];
    public $timestamps = true;

    public function peliculas(){
        return $this->belongsToMany('App\Pelicula', 'pelicula_director');
    }
}
