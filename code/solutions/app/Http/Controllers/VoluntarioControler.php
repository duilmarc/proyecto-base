<?php

namespace CruzRoja\Http\Controllers;
use CruzRoja\Voluntarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoluntarioControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voluntarios = DB::table('voluntarios')->get();
        $titulo = 'Listado de Voluntarios';
        return view('voluntarios.index',compact('titulo','voluntarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voluntarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        if($request->hasFile('archivo')){
            $file = $request->file('archivo');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/fotos/',$name);
            return $name;
        }
        */
        $voluntario= new Voluntarios();
        $voluntario->id_voluntario= $request->input('dni');
        $voluntario->nombre= $request->input('nombre');
        $voluntario->apellido= $request->input('apellido');
        $voluntario->area= $request->input('area');
        $voluntario->contraseña= $request->input('dni');
        $voluntario->estado= 1;
        $voluntario->tipo= $request->input('tipo_voluntario');

        $voluntario->save();
        $voluntarios = DB::table('voluntarios')->get();
        $titulo = 'Listado de Voluntarios';
        return view('voluntarios.index',compact('titulo','voluntarios'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_voluntario)
    {
        $voluntario= Voluntarios::find($id_voluntario);
        return view('voluntarios.verperfil',compact('voluntario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
