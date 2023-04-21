@extends('layouts/plantilla')

@section('title')
    Citas
@endsection

@section('content')
@if ($mensaje = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{$mensaje}}
</div>
@endif

<div class="card">
    <div class="card-header d-flex gap-3 align-items-center">
        Citas
        <a name="crearCita" id="crearCita" class="btn btn-primary" href="{{route('crear.cita')}}" role="button">+</a>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre Mascota</th>
                    <th scope="col">Fecha Cita</th>
                    <th scope="col">Hora Cita</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($citas as $cita)
                <tr class="">
                    <td>{{$cita->id}}</td>
                    <td>
                    @foreach ($cita->mascotas as $mascota)
                        {{$mascota->nombres}}
                    @endforeach 
                    </td>
                    <td>{{$cita->fecha_cita}}</td>
                    <td>{{$cita->hora_cita}}</td>
                    <td class="d-flex justify-content-start gap-3">
                        <form action="{{ route("editar.cita", $cita->id) }}" method="GET">
                            @csrf
                            <button class="btn btn-warning">
                                Editar
                            </button>
                        </form>
                        <form action="{{ route("eliminar.cita", $cita->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                @endforeach
                </tr>
    
      
        </table>
    </div>

</div>

</div>

<script src="{{asset('scriptCitas.js')}}"></script>    
@endsection