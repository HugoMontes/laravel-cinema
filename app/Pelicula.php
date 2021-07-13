<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'peliculas';
    protected $primaryKey = 'id';
    protected $fillable = ['titulo', 'costo', 'resumen', 'estreno', 'genero_id', 'user_id'];
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function genero(){
        return $this->belongsTo('App\Genero');
    }
    
    public function imagenes(){
        return $this->hasMany('App\Imagen');
    }

    public function directores(){
        return $this->belongsToMany('App\Director', 'pelicula_director')->withTimestamps();
    }

    public function scopeSearch($query, $titulo){
        return $query->where('titulo', 'LIKE', '%'.$titulo.'%');
    }
}
