<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use App\Models\Clientes;

class ControllerMascotas extends Controller
{
    //
    public function index(){
        $mascotas = (new Mascota())->getAllMascotas(); 
        return view('Mascotas/index', compact('mascotas'));
    }

    public function create(){
        $clientes = (new Clientes)->getAllClientes();
        return view('Mascotas/crear', compact('clientes'));
    }

    public function store(Request $request){
        $id = $request->input('id');
        $nombres = $request->input('nombres');
        $cliente_dni = $request->input('cliente_dni');

        $newMascota = new Mascota;
        $newMascota->id = $id;
        $newMascota->nombres = $nombres;
        $newMascota->cliente_dni = $cliente_dni;
        $newMascota->save();

        return redirect()->route('inicio.mascotas')->with('success', 'Mascota creada exitosamente');
    }

    public function edit($id){
        $mascota = new Mascota;
        $datos = $mascota->getMascota($id);
        $clientes = (new Clientes)->getAllClientes();
        return view('Mascotas/editar', compact('datos', 'clientes'));
    }

    public function update(Request $request, $id){
        $mascota = new Mascota;
        $datos = $mascota->getMascota($id);
        $datos->id = $request->input('id');
        $datos->nombres = $request->input('nombres');
        $datos->cliente_dni = $request->input('cliente_dni');
        $datos->save();

        return redirect()->route('inicio.mascotas')->with('success', 'Mascota modificada exitosamente');
    }

    public function delete(Request $request, $id){
        $mascota = new Mascota;
        $datos = $mascota->getMascota($id);
        $datos->delete();

        return redirect()->route('inicio.mascotas')->with('success', 'Mascota eliminada exitosamente');

    }
}
