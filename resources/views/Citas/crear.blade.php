@extends('layouts/plantilla')

@section('title')
    Crear Cita
@endsection

@section('content')
<div class="card col-md-6 m-auto">
    <div class="card-header d-flex justify-content-center">
        <h4>Agregar Cita</h4>
    </div>
    <div class="card-body">
        <form id="crearCitaForm" action="{{route('guardar.cita')}}" method="POST">
            @csrf
            <div class="row g-3">
                  <div class="col-md-6">
                    <label for="idMascota" class="form-label">Mascota</label>
                    <select name="idMascota" id="idMascota" class="form-select" required>
                      @foreach ($mascotas as $mascota)
                        <option value="{{$mascota->id}}">{{$mascota->nombres}}</option>
                      @endforeach
                    </select>
                  </div>
                 

                  <div class="col-md-6">
                    <label for="" class="form-label">Fecha</label>
                    <input type="date"
                      class="form-control" name="fechaCita" id="fechaCita" required>
                  </div>

                  <div class="col-md-6">
                    <label for="" class="form-label">Hora</label>
                    <select name="horaCita" id="horaCita" class="form-select">
                      <option value="">Selecciona una hora</option>
                      <?php
                        for ($i = 8; $i <= 18; $i++) {
                          for ($j = 0; $j < 60; $j += 20) {
                            $hora = sprintf('%02d:%02d:00', $i, $j);
                            echo "<option value=\"$hora\">$i:" . sprintf('%02d', $j) . " " . (($i >= 12) ? 'PM' : 'AM') . "</option>";
                          }
                        }
                      ?>
                    </select>
                  </div>

                  <div class="col-md-12 d-flex justify-content-between">
                    <button  id="validarCita" class="btn btn-success">Agregar</button>
                    <a name="" id="" class="btn btn-danger" href="{{route('inicio.citas')}}" role="button">Cancelar</a>
                  </div>
            </div>
        </form>
    </div>
  </div> 

</div>
<script src="{{asset('validarCita.js')}}"></script>
@endsection