<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonaController extends Controller
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
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = Persona::all();
        
        return view('personas.create', compact('personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'cuit_cuil' => 'required|integer',
            'domicilio' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'fecha_carga' => 'date',
        ]);
        
        $personas = $this->request->all();
        
        Persona::create($personas);
        
        return redirect('personas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::find($id);      
        return view('personas.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::find($id);
        return view('personas.edit', compact('persona'));
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
        $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'cuit_cuil' => 'required|integer',
            'domicilio' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'fecha_carga' => 'date',
        ]);
        
        $personaUpdate = $this->request->all();
        
        $persona = Persona::find($id);
        
        $persona->update($personaUpdate);
        
        return redirect('personas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Persona::find($id)->delete();
        
        return redirect('personas');
    }
}
