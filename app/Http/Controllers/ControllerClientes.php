<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ControllerClientes extends Controller
{
    public function index(){
        $clientes = Clientes::with('mascotas')->get();
        return view('Clientes/index', compact('clientes'));
    }

    public function create(){
        return view('Clientes/crear');
    }

    public function store(Request $request){
        $dni = $request->input('dni');
        $nombresapellidos = $request->input('nombresapellidos');
        $celular = $request->input('celular');
        $email = $request->input('email');

        $newCliente = new Clientes;
        $newCliente->dni = $dni;
        $newCliente->nombresapellidos = $nombresapellidos;
        $newCliente->celular = $celular;
        $newCliente->email = $email;
        $newCliente->save();

        return redirect()->route('inicio.clientes')->with('success', 'Cliente creado exitosamente');
    }

    public function edit($dni){
        $cliente = new Clientes;
        $datos = $cliente->getCliente($dni);
        return view('Clientes/editar', compact('datos'));
    }

    public function update(Request $request, $dni){
        $cliente = new Clientes;
        $datos = $cliente->getCliente($dni);
        $datos->dni = $request->input('dni');
        $datos->nombresapellidos = $request->input('nombresapellidos');
        $datos->celular = $request->input('celular');
        $datos->email = $request->input('email');
        $datos->save();

        return redirect()->route('inicio.clientes')->with('success', 'Cliente modificado exitosamente');
    }

    public function delete(Request $request, $dni){
        $cliente = new Clientes;
        $datos = $cliente->getCliente($dni);
        $datos->delete();

        return redirect()->route('inicio.clientes')->with('success', 'Cliente eliminado exitosamente');

    }
}
