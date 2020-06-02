<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use App\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $users = User:: all();
        return view( 'adminlte.usuarios.index', ['users' => $users]);
    }

    /**
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'adminlte.usuarios.create');
    }

    /**
     
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->name =   request('name');
        $usuario->email =   request('email');
        $usuario->password =   bcrypt(request('password'));

        // $usuario->name =   $request->input('name');
        // $usuario->email =   $request->input('email');
        // $usuario->password =   $request->input('password');

        // $usuario->name =   $request->usuario['name'];
        // $usuario->email =   $request->usuario['email'];
        // $usuario->password = $request->usuario['password'];
        
        $usuario->save();

        //return redirect()->route('usuarios');
        return redirect( '/usuarios');
        //return view( 'usuarios.index');
    }

    /**
    
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view( '/adminlte.usuarios.edit', ['user'=> User::findOrfail($id)]);
    }

    /**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = User::findOrfail($id);

        $usuario->name =   $request->input('name');
        $usuario->email =   $request->input('email');
             
       $usuario->update();
       return redirect( '/usuarios');
    }

    /**
    
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $usuario = User::findOrfail($id);
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success','Usuario elimindado correctamente.');
    }
}
