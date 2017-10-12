<?php

namespace App\Http\Controllers;

use App\Aliado;

use Illuminate\Http\Request;

class AliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aliados = Aliado::all();
        return view('aliados.index')->with('aliados', $aliados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aliados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aliados = new Aliado();
        if ($request->hasFile('imagen')) {
            $file = time().'.'.$request->imagen->getClientOriginalExtension();
            $request->imagen->move(public_path('images'), $file);
        }
        $aliados->imagen = 'images/'.$file;
        $aliados->descripcion = $request->get('descripcion');
        $aliados->link = $request->get('link');
        if($aliados->save()) {
            return redirect('aliados')->with('status', 'El programa de formación fue adicionado con exito!');            
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
        $aliados = Aliado::find($id);
        return view('aliados.edit', compact('aliados'));
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
        $aliados = Aliado::find($id);
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $file);
        }
        $aliados->imagen = 'images/'.$file;
        $aliados->descripcion = $request->get('descripcion');
        $aliados->link = $request->get('link');
        if($aliados->save()) {
            return redirect('aliados')->with('status', 'El programa de formación fue adicionado con exito!');            
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
        Aliado::destroy($id);
        return redirect('aliados')->with('status', 'El usuario fue eliminado con exito!');
    }
}
