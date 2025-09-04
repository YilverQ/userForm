<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\User;

class ClassController extends Controller
{
    /*
        Formulario para crear un recurso
    */
    public function create(){
        return view('class.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name'        => 'required|string',
            'description' => 'required|string',
            'class_day'   => 'required|date',
            'start_time'  => 'required|date_format:H:i',
            'end_time'    => 'required|date_format:H:i|after:start_time',
        ]);

        // Creamos el registro en la BD
        ClassModel::create($validated);

        return to_route('class.create');
    }

    public function show(ClassModel $item){
        return "Muestra los datos del registro $item";
    }
}
