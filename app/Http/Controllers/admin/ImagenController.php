<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Imagen;

class ImagenController extends Controller {

    function index() {
        $imagenes=Imagen::orderBy('id','ASC')->paginate(10);
        $imagenes->each(function($imagenes){
            $imagenes->pelicula;
        });
        return view('admin.imagen.index')->with('imagenes',$imagenes);
    }
}
