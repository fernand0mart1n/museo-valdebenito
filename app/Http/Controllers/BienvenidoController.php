<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BienvenidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bienvenido.index',compact('bienvenido'));
    }
}
