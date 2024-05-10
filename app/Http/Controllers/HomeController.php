<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

    $contacto = Contacto::orderBy('id', 'desc')->get();
    return view('home.datos', compact('contacto'));
        

    }

    public function create()
    {
        return view('home.inicio');

    }

    public function store(Request $request)
    {

        $contacto = new Contacto();
        $contacto->name = $request->name;
        $contacto->email = $request->email;
        $contacto->emailFooter = $request->emailFooter;
        $contacto->phone = $request->phone;
        $contacto->message = $request->message;

        return redirect()->route('inicio.index');

    }
}
