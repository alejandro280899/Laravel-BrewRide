<?php

namespace App\Http\Controllers;
use App\Models\Informacion;

use Illuminate\Http\Request;

class InformacionController extends Controller
{
    public function formularioInfo()
    {
        return view('home.inicio');
    }
    public function guardar(Request $request)
    {
        $informacion = new Informacion();
        $informacion->name = $request->name;
        $informacion->email = $request->email;
        $informacion->phone = $request->phone;
        $informacion->message = $request->message;
        $informacion->save();


        // Redireccionar o responder con un mensaje de éxito
        return redirect()->back()->with('success', '¡La información se ha guardado correctamente!');
    }
}
