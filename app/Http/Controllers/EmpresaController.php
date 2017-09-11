<?php

namespace App\Http\Controllers;
use App\Empresa;
use Illuminate\Http\Request;
use App\Http\Requests\EmpresaRequest;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas=Empresa::all();
        return view('empresas.index')->with('empresas',$empresas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaRequest $request)
    {
        $emp = new Empresa();
        $emp->titulo = $request->get('titulo');
        $emp->descripcion = $request->get('descripcion');
        if ($request->hasFile('foto')) {
        $file = time().'.'.$request->foto->getClientOriginalExtension();
        $request->foto->move(public_path('/images/'), $file);
        $emp->foto='/images/'.$file;
        }


        if($emp->save()) {
            return redirect('empresas')->with('status', 'La empresa '.$emp->titulo.' fue adicionado con éxtio!');            
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
        $empresas=Empresa::find($id);
        return view('empresas.edit')->with('empresas',$empresas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpresaRequest $request, $id)
    {
        $emp =  Empresa::find($id);
        $emp->titulo = $request->get('titulo');
        $emp->descripcion = $request->get('descripcion');
        if ($request->hasFile('foto')) {
        $file = time().'.'.$request->foto->getClientOriginalExtension();
        $request->foto->move(public_path('/images/'), $file);
        $emp->foto='/images/'.$file;
        }


        if($emp->save()) {
            return redirect('empresas')->with('status', 'La empresa '.$emp->titulo.' fue adicionado con éxtio!');            
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
        Empresa::destroy($id);
        return redirect('empresas')
            ->with('status', 'La empresa fue eliminada con éxito');
    }
}
