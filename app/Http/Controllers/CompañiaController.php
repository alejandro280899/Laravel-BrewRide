<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompañiaController extends Controller
{
    public function createAcerca()
    {
        return view('compañia.acercaDe');
    }

    public function createPrivacidad()
    {
        return view('compañia.privacidad');
    }

    public function createTérminos()
    {
        return view('compañia.condiciones');
    }

    public function createLeerMás()
    {
        return view('compañia.leer');
    }
}


