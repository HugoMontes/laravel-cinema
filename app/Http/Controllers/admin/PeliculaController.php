<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Pelicula;
use App\Genero;
use App\Director;
use App\Imagen;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $peliculas=Pelicula::search($request->titulo)->orderBy('id','DESC')->paginate(5);
        $peliculas->each(function($peliculas){
            $peliculas->genero;
            $peliculas->user;
        });
        // dd($peliculas);
        return view('admin.pelicula.index')->with('peliculas',$peliculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos=Genero::orderBy('genero','ASC')->pluck('genero','id');
        $directores=Director::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('admin.pelicula.create')
            ->with('generos',$generos)
            ->with('directores',$directores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelicula=new Pelicula($request->all());

        $pelicula->user_id=\Auth::user()->id;
        
        $pelicula->save();
        $pelicula->directores()->sync($request->directores);
        if($request->file('imagen')){
            $file=$request->file('imagen');
            $name_file='cinema_'.time().'.'.$file->getClientOriginalExtension();
            $path_file=public_path().'/imagenes/pelicula';
            $file->move($path_file,$name_file);
        }
        
        $imagen=new Imagen();
        $imagen->nombre=$name_file;
        
        $imagen->pelicula()->associate($pelicula); 
        $imagen->save();
        
        flash('Se ha guardado exitosamente la pelicula '.$pelicula->titulo.'.')->success(); 
        return redirect()->route('pelicula.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
