<?php

namespace App\Http\Controllers;

use App\Models\Credencial;
use Illuminate\Http\Request;

class CredencialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.credenciales.credencial");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.credenciales.nuevo");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credencial = new Credencial;
        $credencial->nombres = $request->nombre;
        $credencial->apellidos = $request->apellidos;
        $credencial->cedula_identidad = $request->cedula_identidad;
        $credencial->cargo = $request->cargo;
        $credencial->fecha_nacimiento = $request->fecha_nacimiento;
        $credencial->tipo_sangre = $request->tipo_sangre;
        $credencial->imagen = $request->imagen;
        $credencial->enlace_qr = $request->enlace_qr;
        $credencial->save();
        return redirect("/credencial")->with("mensaje", "Credencial creada correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
