<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProgramsRequest;
use App\Programs;

class ProgramController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $programs = Programs::all();
     return view('programas.index')->with('programs', $programs);

 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramsRequest $request)
    {
     $programs = new Programs();
     $programs->nombre_programa = $request->get('nombre_programa');
     $programs->descripcion_programa = $request->get('descripcion_programa');
     $programs->tipo_programa = $request->get('tipo_programa');
     $programs->duracion = $request->get('duracion');
     if($programs->save()) {
        return redirect('programas')->with('status', 'El programa de formación fue adicionado con éxtio!');            
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('programas.show', ['pro' => Programs::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro = Programs::find($id);
        return view('programas.edit', compact('pro'));

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
        $programs = Programs::find($id);
        $programs->nombre_programa = $request->get('nombre_programa');
        $programs->descripcion_programa = $request->get('descripcion_programa');
        $programs->tipo_programa = $request->get('tipo_programa');
        $programs->duracion = $request->get('duracion');
        if($programs->save()) {
            return redirect('programas')->with('status', 'El programa de formación fue editado con éxtio!');            
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Programs::destroy($id);
        return redirect('programas')->with('status', 'El artículo fue eliminado con éxtio!');
    }
}
