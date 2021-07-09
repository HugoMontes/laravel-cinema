<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Director;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directores=Director::orderBy('id','ASC')->paginate(10);
        return view('admin.director.index')->with('directores', $directores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.director.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $director=new Director($request->all());
        $director->save();
        flash('Se ha registrado exitosamente el director con nombre '.$director->nombre.'.')->success();
        return redirect()->route('director.create');
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
        $director=Director::find($id);
        return view('admin.director.edit')->with('director',$director);
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
        $director=Director::find($id);
        $director->fill($request->all());
        $director->save();
        flash('Se ha editado exitosamente el director '.$director->nombre.'.')->success();
        return redirect()->route('director.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $director=Director::find($id);
        $director->delete();
        flash('Se ha eliminado exitosamente el director '.$director->nombre.'.')->success(); 
        return redirect()->route('director.index');
    }
}
