<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Genero;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos=Genero::orderBy('id','ASC')->paginate(10);
        return view('admin.genero.index')->with('generos', $generos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.genero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genero=new Genero($request->all());
        $genero->save();
        flash('Se ha registrado exitosamente el genero con nombre '.$genero->name.'.')->success();
        return redirect()->route('genero.create');
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
        $genero=Genero::find($id);
        return view('admin.genero.edit')->with('genero',$genero);
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
        $genero=Genero::find($id);
        $genero->fill($request->all());
        $genero->save();
        flash('Se ha editado exitosamente el genero '.$genero->genero.'.')->success();
        return redirect()->route('genero.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genero=Genero::find($id);
        $genero->delete();
        flash('Se ha eliminado exitosamente el genero'.$genero->genero.'.')->success(); 
        return redirect()->route('genero.index');
    }
}
