<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('admin')->except('edit');
    }

    public function index()
    {
        $users = User::all();
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('users.create');  
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $file);
        }
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->dependencia = $request->get('dependencia');
        $user->image = 'images/'.$file;
        if($user->save()) {
            return redirect('users')->with('status', 'El programa de formación fue adicionado con exito!');            
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
        $user = User::find($id);
        return view('users.edit', compact('user'));
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
        $user = User::find($id);
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $file);
        }
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->dependencia = $request->get('dependencia');
        $user->image = 'images/'.$file;
        if($user->save()) {
            return redirect('admin')->with('status', 'El programa de formación fue adicionado con exito!');            
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
        User::destroy($id);
        return redirect('users')->with('status', 'El usuario fue eliminado con exito!');
    }
    public function pdf() {
        $users = User::all();
        $view = \View::make('users.pdf', compact('users'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('lista-usuarios.pdf');
    }
    public function showexcel() {
         \Excel::create('usersfile', function($excel) {
         $excel->sheet('List', function($sheet) {
         $users = User::all();
         $sheet->loadView('users.excel', array('users' => $users));
         });
         })->download('xls');
        }
}
