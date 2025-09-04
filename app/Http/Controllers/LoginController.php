<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /*
        Retorna una vista con dos enlaces: Ingresar y Registrarse.
    */
    public function index()
    {
        return view('login.index');
    }

    /*
        Retorna un formulario para verificar el usuario.
    */
    public function login(){
        return view('login.login');
    }


    /*
        # Explication
    */
    public function loginCheck(Request $request)
    {
        // Validar la información
        $validated = $request->validate([
            'identification_card' => 'required|exists:users,identification_card',
        ]);

        $identification_card = $validated['identification_card'];

        if ($identification_card == '28333459'){
            return to_route('admin.index');
        }

        // Buscar usuario por 'identification_card'
        $user = User::where('identification_card', $identification_card)->first();

        if ($user){
            return "Retornar la vista del usuario";
        }

        return to_route('login.login');
    }


    /*
        Retorna un formulario para registrar un nuevo usuario 
    */
    public function signup()
    {
        return view('login.signup');
    }


    /*
        Crea un nuevo usuario y luego retorna una vista
    */
    public function createUser(Request $request){
        # Validar datos antes de crear el registro
        $validated = $request->validate([
            'identification_card'   => 'required|unique:users',
            'first_name'            => 'required|string',
            'second_name'           => 'nullable|string',
            'first_lastname'        => 'required|string',
            'second_lastname'       => 'nullable|string',
            'gender'                => 'required|in:Femenino,Masculino',
            'birthdate'             => 'required|date',
            'organization'          => 'required|string',
            'job_title'             => 'required|string',
            'email'                 => 'required|email|unique:users',
            'phone'                 => 'required|unique:users',
        ]);

        # Crear el registro del usuario
        $user = User::create($validated);

        return to_route('login.index');
    }
}
