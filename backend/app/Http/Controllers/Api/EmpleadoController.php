<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados= Empleados::all();

        return $empleados;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleados();
        $empleado->nombre = $request-> nombre;
        $empleado->apellido = $request-> apellido;
        $empleado->razon_social = $request-> razon_social;
        $empleado->cedula = $request-> cedula;
        $empleado->telefono = $request-> telefono;
        $empleado->ciudad = $request-> ciudad;
        $empleado->pais = $request-> pais;

        $empleado->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado= Empleados::find($id);
        return $empleado;
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
        $empleado= Empleados::findOrFail($request->$id);

        $empleado->nombre=$request->nombre;
        $empleado->apellido = $request-> apellido;
        $empleado->razon_social = $request-> razon_social;
        $empleado->cedula = $request-> cedula;
        $empleado->telefono = $request-> telefono;
        $empleado->ciudad = $request-> ciudad;
        $empleado->pais = $request-> pais;

        $empleado->save();

        return $empleado;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $empleado= Empleados::destroy($id);

       return $empleado;
    }
}
