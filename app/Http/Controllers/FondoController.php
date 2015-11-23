<?php

namespace App\Http\Controllers;

use App\Fondo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FondoController extends Controller
{
    protected $request;

    public function __construct(\Illuminate\Http\Request $request)
    {
        $this->request = $request;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fondos = Fondo::all();
        return view('fondos.index', compact('fondos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fondos = Fondo::all();
        
        return view('fondos.create', compact('fondos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'cuit_cuil' => 'required|integer',
            'domicilio' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'fecha_carga' => 'date',
        ]);*/
        
        $fondos = $this->request->all();
        
        Fondo::create($fondos);
        
        return redirect('fondos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fondo = Fondo::find($id);      
        return view('fondos.show', compact('fondo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fondo = Fondo::find($id);
        return view('fondos.edit', compact('fondo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*$this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'cuit_cuil' => 'required|integer',
            'domicilio' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'fecha_carga' => 'date',
        ]);*/
        
        $fondoUpdate = $this->request->all();
        
        $fondo = Fondo::find($id);
        
        $fondo->update($fondoUpdate);
        
        return redirect('fondos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fondo::find($id)->delete();
        
        return redirect('fondos');
    }
}
