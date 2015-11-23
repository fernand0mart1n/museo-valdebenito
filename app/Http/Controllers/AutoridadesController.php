<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AutoridadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('autoridades.index');
    }
}
