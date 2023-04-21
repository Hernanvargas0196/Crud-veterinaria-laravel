<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Mascota;
use Illuminate\Support\Facades\DB;

class ControllerCitas extends Controller
{
    //
    public function index(){
        $citas = Cita::with('mascotas')->get();
        return view('Citas/index', compact('citas'));
    }

    public function create(){
        $mascotas = (new Mascota)->getAllMascotas();
        return view('Citas/crear',compact('mascotas'));
    }

    public function store(Request $request){
        $idMascota = $request->input('idMascota');
        $fechaCita = $request->get('fechaCita');
        $horaCita = $request->input('horaCita');

         // Buscar si ya existe una cita programada a la misma hora y fecha
    //$citaExistente = Cita::where('fecha_cita', $fechaCita)->where('hora_cita', $horaCita)->first();

    //if ($citaExistente) {
        // Mostrar un mensaje de error si ya existe una cita a esa hora y fecha
      //  return redirect()->route('inicio.citas')->with('success', 'No se puede');
    //}
        
        $newCita = new Cita;
        $newCita->id_mascota = $idMascota;
        $newCita->fecha_cita = $fechaCita;
        $newCita->hora_cita = $horaCita;
        $newCita->save();

        return redirect()->route('inicio.citas')->with('success', 'Cita creada exitosamente');
    }

    public function existe(Request $request)
{
    $fechaCita = $request->input('fechaCita');
    $horaCita = $request->input('horaCita');

    // Buscar si ya existe una cita programada a la misma hora y fecha
    $citaExistente = Cita::where('fecha_cita', $fechaCita)->where('hora_cita', $horaCita)->first();

    if ($citaExistente) {
        return response()->json(['existe' => true]);
    } else {
        return response()->json(['existe' => false]);
    }

}

public function edit($id){
    $cita = new Cita;
    $datos = $cita->getCita($id);
    $mascotas = (new Mascota)->getAllMascotas();
    return view('Citas/editar', compact('datos', 'mascotas'));
}

public function update(Request $request, $id){
    $cita = new Cita;
    $datos = $cita->getCita($id);
    $datos->id_mascota = $request->input('idMascota');
    $datos->fecha_cita = $request->input('fechaCita');
    $datos->hora_cita = $request->input('horaCita');
    $datos->save();

    return redirect()->route('inicio.citas')->with('success', 'Cita modificada exitosamente');
}

public function delete(Request $request, $id){
    $cita = new Cita;
    $datos = $cita->getCita($id);
    $datos->delete();

    return redirect()->route('inicio.citas')->with('success', 'Cita eliminada exitosamente');

}

public function getCitas()
{
    $citas = DB::table('citas')
                ->select('id', 'id_mascota', 'hora_cita')
                ->get();

    $eventos = [];

    foreach ($citas as $cita) {
        $evento = [
            'id' => $cita->id,
            'id_mascota' => $cita->id_mascota,
            'hora_cita' => $cita->hora_cita
        ];

        array_push($eventos, $evento);
    }

    return response()->json($eventos);
}

}
