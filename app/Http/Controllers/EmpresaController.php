<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return Empresa::all();
        } else{
            return view('empresa')->with('state','index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa')->with('state', 'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa= new Empresa();
        $empresa-> Nombre_Largo = $request->Nombre_Largo;
        $empresa->Nombre_Corto = $request->Nombre_Corto;
        $empresa->Correo_electronico = $request->Correo_electronico;
        $empresa->Telefono = $request->Telefono;
        $empresa->NIT = $request->NIT;
        $empresa->Solvencia = $request->Solvencia;
        $empresa->Constitucion = $request->Constitucion;
        $empresa->Plan_Pago = $request->Plan_Pago ;
        $empresa->Carta = $request->Carta;
        $empresa->Socio_1 = $request->Socio_1;
        $empresa->Socio_2 = $request->Socio_2;
        $empresa->Socio_3 = $request->Socio_3;
        $empresa->Socio_4 = $request->Socio_4;
        $empresa->Socio_5 = $request->Socio_5;
        $empresa->save();

        return $empresa;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

        if($request->ajax()){
           return Empresa::where('id', auth()->id());
            //return Empresa::table('empresas')->find('id');
        } else{
            return view('empresa');
        }
        //return $empresa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
