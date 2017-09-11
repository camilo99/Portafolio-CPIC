<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider_images;
use App\Http\Requests\SliderRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagen=Imagen::all()->sortBy('titulo');
        return view('slider.index')->with('imagen',$imagen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('slider.create');
 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $img = new Slider_images();
        if ($request->hasFile('imagen')) {
            $file = time().'.'.$request->imagen->getClientOriginalExtension();
            $request->imagen->move(public_path('images'), $file);
        }
        $img->imagen = '/images/'.$file;
        if($img->save()) {
            return redirect('/')->with('status', 'El programa de formación fue adicionado con exito!');            
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
        $img = Slider_images::find($id);
        return view('slider.edit', compact('img'));
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
          $img = Slider_images::find($id);

          if ($request->hasFile('imagen')) {
            $file = time().'.'.$request->imagen->getClientOriginalExtension();
            $request->imagen->move(public_path('/images/'), $file);
            $img->imagen = '/images/'.$file;
        }


        if($img->save()) {
            return redirect('/')->with('status', 'La imagen '.$img->imagen.' fue editada con éxito!');            
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
        //
    }


}
