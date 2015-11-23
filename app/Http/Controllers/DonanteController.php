<?php

namespace App\Http\Controllers;

use App\Donante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonanteController extends Controller
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
        $donantes = Donante::all();
        return view('donantes.index', compact('donantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donantes = Donante::all();
        
        return view('donantes.create', compact('donantes'));
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
        
        $donantes = $this->request->all();
        
        Donante::create($donantes);
        
        return redirect('donantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donante = Donante::find($id);      
        return view('donantes.show', compact('donante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donante = Donante::find($id);
        return view('donantes.edit', compact('donante'));
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
        
        $donanteUpdate = $this->request->all();
        
        $donante = Donante::find($id);
        
        $donante->update($donanteUpdate);
        
        return redirect('donantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Donante::find($id)->delete();
        
        return redirect('donantes');
    }
}
