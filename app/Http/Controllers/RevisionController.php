<?php

namespace App\Http\Controllers;

use App\Revision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RevisionController extends Controller
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
        $revisiones = Revision::all();
        return view('revisiones.index', compact('revisiones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $revisiones = Revision::all();
        
        return view('revisiones.create', compact('revisiones'));
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
        
        $revisiones = $this->request->all();
        
        Revision::create($revisiones);
        
        return redirect('revisiones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $revision = Revision::find($id);      
        return view('revisiones.show', compact('revision'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $revision = Revision::find($id);
        return view('revisiones.edit', compact('revision'));
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
        
        $revisionUpdate = $this->request->all();
        
        $revision = Revision::find($id);
        
        $revision->update($revisionUpdate);
        
        return redirect('revisiones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Revision::find($id)->delete();
        
        return redirect('revisiones');
    }
}