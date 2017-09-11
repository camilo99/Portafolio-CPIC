<?php

namespace App\Http\Controllers;



use App\Bienestar;

use Illuminate\Http\Request;

class BienestarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bienestar=Bienestar::all();
        return view('bienestar.index')->with('bienestar',$bienestar);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('bienestar.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $bien = new Bienestar();
        if ($request->hasFile('icono')) {
        $file = time().'.'.$request->icono->getClientOriginalExtension();
        $request->icono->move(public_path('/images/'), $file);
        $bien->icono='/images/'.$file;
        $bien->titulo = $request->get('titulo');
        $bien->descripcion = $request->get('descripcion');
        
        }


        if($bien->save()) {
            return redirect('bienestar')->with('status', 'La información '.$bien->titulo.' fue adicionado con éxtio!');            
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

        $bienestar=Bienestar::find($id);
        return view('bienestar.edit')->with('bienestar',$bienestar);

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


        $bien =  Bienestar::find($id);
         if ($request->hasFile('icono')) {
        $file = time().'.'.$request->icono->getClientOriginalExtension();
        $request->icono->move(public_path('/images/'), $file);
        $bien->icono='/images/'.$file;
        }
        $bien->titulo = $request->get('titulo');
        $bien->descripcion = $request->get('descripcion');
    


        if($bien->save()) {
            return redirect('bienestar')->with('status', 'La información '.$bien->titulo.' fue adicionado con éxtio!');            
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

        Bienestar::destroy($id);
        return redirect('bienestar')
            ->with('status', 'La información fue eliminada con éxito');

    }
}
