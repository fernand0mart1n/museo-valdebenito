<?php

namespace App\Http\Controllers;

use App\Clasificacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClasificacionController extends Controller
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
        $clasificaciones = Clasificacion::all();
        return view('clasificaciones.index', compact('clasificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clasificaciones = Clasificacion::all();
        
        return view('clasificaciones.create', compact('clasificaciones'));
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
        
        $clasificaciones = $this->request->all();
        
        Clasificacion::create($clasificaciones);
        
        return redirect('clasificaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clasificacion = Clasificacion::find($id);      
        return view('clasificaciones.show', compact('clasificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clasificacion = Clasificacion::find($id);
        return view('clasificaciones.edit', compact('clasificacion'));
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
        
        $clasificacionUpdate = $this->request->all();
        
        $clasificacion = Clasificacion::find($id);
        
        $clasificacion->update($clasificacionUpdate);
        
        return redirect('clasificaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clasificacion::find($id)->delete();
        
        return redirect('clasificaciones');
    }
}
