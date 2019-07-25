<?php

namespace App\Http\Controllers;

use App\proveedores;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = proveedores::all();    //defino variable proveedores le paso el modelo =proveedores, retorna la vista proveedores
//        $mensaje= 'Este es un mensaje';
        //return $productos;
        return view('proveedores')
            ->with('proveedores', $proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor = new proveedores();
        $proveedor->nombre= $request->get("nombre");
        $proveedor->razonsocial= $request->get("razonsocial");
        $proveedor->direccion= $request->get("direccion");
        $proveedor->telefono= $request->get("telefono");
        $proveedor->mail= $request->get("mail");
        $proveedor->CUIT= $request->get("cuit");
        $proveedor->created_at=now();
        $proveedor->save();

        return back();
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
