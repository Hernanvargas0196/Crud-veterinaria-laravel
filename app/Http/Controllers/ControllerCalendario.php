<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita; // Importar modelo Cita

class ControllerCalendario extends Controller
{
    public function index()
    {
        // Obtener todas las citas de la base de datos
        $citas = Cita::with('mascotas')->get();
        
        // Convertir las citas en formato compatible con FullCalendar
        $eventos_calendar = array();
        
        foreach ($citas as $cita) {
            $evento_calendar = array();
            $evento_calendar['id'] = $cita->id;
            $evento_calendar['title'] = 'Mascota: '.$cita->mascotas[0]->nombres;
            $evento_calendar['start'] = $cita->fecha_cita . 'T' . $cita->hora_cita;
            $evento_calendar['end'] = $cita->fecha_cita . 'T' . $cita->hora_cita;
            $evento_calendar['allDay'] = false;

            // Agregar evento al arreglo de eventos
            array_push($eventos_calendar, $evento_calendar);
        }
        
        // Cargar la vista con los eventos del calendario
        return view('calendario', compact('eventos_calendar'));
    }
}
