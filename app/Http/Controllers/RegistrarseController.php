<?php

namespace App\Http\Controllers;

use App\Models\Registrarse;
use Illuminate\Http\Request;

class RegistrarseController extends Controller
{
    public function index()
    {

    $registrarse = Registrarse::orderBy('id', 'desc')->get();
    return view('register.datos', compact('registrarse'));
        

    }

    public function create()
    {
        return view('register.registrarse');

    }

    public function store(Request $request)
    {

        $registrarse = new Registrarse();
        $registrarse->user = $request->user;
        $registrarse->password = $request->password;

        return redirect()->route('entrar.index');

    }
}
