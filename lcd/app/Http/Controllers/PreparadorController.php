<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preparador;

class PreparadorController extends Controller
{
    public function index()
    {
        $preparadores = Preparador::all();
        return view('preparadores', ['preparadores' => $preparadores]);
    }
}
