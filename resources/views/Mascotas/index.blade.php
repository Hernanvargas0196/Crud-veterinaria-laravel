@extends('layouts/plantilla')

@section('title')
    Inicio Mascotas
@endsection

@section('content')
@if ($mensaje = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{$mensaje}}
</div>
@endif


<div class="card">
    <div class="card-header d-flex gap-3 align-items-center">
        Mascotas
        <a name="crearMascota" id="crearMascota" class="btn btn-primary" href="{{route('crear.mascota')}}" role="button">+</a>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Dueño</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mascotas as $mascota)
                <tr class="">
                    <td>{{$mascota->id}}</td>
                    <td>{{$mascota->nombres}}</td>
                    <td>{{$cliente = $mascota->cliente->nombresapellidos}}</td>
                    <td class="d-flex justify-content-start gap-3">
                        <form action="{{ route("editar.mascota", $mascota->id) }}" method="GET">
                            @csrf
                            <button class="btn btn-warning">
                                Editar
                            </button>
                        </form>
                        <form action="{{ route("eliminar.mascota", $mascota->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
    
                </tr>
    
                @endforeach         
        </table>
    </div>

</div>

</div>

<script src="{{asset('scriptMascotas.js')}}"></script>
@endsection