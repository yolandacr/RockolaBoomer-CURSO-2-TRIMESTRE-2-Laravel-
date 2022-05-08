<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegistroRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UsuarioController extends Controller
{

    /**
     * metodo que lleva a la pagina de registro
     */
    public function register(){
        return view('users/register');
    }

    /**
     * metodo que guarda el registro en db
     */
    public function store(RegistroRequest $request)
    {
        $usuario = new Usuario;
        $usuario->nombre = $request->nombre;
        $claveHash = Hash::make($request->clave);
        $usuario->clave = $claveHash;
        $usuario->save();


        return redirect('index')->with('alert', 'Usuario registrado con éxito');
    }

    /**
     * metodo que devuelve la vista del login
     */

    public function login(){
        return view('users/login');
    }

    /**
     * metodo para autentificar
     */

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nombre' => ['required'],
            'clave' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('screens.modo');
        }
 
        return back()->withErrors([
            'nombre' => 'El usuario o clave son incorrectos',
        ])->onlyInput('nombre');
    } 

    
}
