<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use App\Models\User;
use Illuminate\Http\Request;

class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = clientes::all();
        return response()->json($clientes,200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $cliente = new clientes();

        $cliente->cedula = $request->cedula;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->celular = $request->celular;
        $cliente->correo = $request->correo;
        $cliente->password = $request->password;
        $cliente->departamento = $request->departamento;
        $cliente->municipio = $request->municipio;


        $cliente->save();

        return response()->json([
            'message' => "Cliente creado con exito",
            'success' => true
        ], 200);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = clientes::find($id);
        return response()->json($cliente,200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = clientes::find($id);

        $cliente->cedula = $request->cedula;
        $cliente->nombre = $request->nombre;
        $cliente->celular = $request->celular;
        $cliente->correo = $request->correo;
        $cliente->password = $request->password;
        $cliente->departamento = $request->departamento;
        $cliente->municipio = $request->municipio;

        $cliente->save();

        return response()->json([
            'message' => "Cliente Actualizado con exito",
            'success' => true
        ], 200);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = clientes::find($id);

        $cliente->delete();

        return response()->json([
            'message' => "Cliente Eliminado con exito",
            'success' => true
        ], 200);
    }
}
