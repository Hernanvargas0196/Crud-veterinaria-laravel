@extends('layouts/plantilla')

@section('title')
    Clientes Inicio
@endsection

@section('content')
    @if ($mensaje = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{$mensaje}}
    </div>
    @endif
    <div class="card">
        <div class="card-header d-flex gap-3 align-items-center">
            Clientes
            <a name="crearCliente" id="crearCliente" class="btn btn-primary" href="{{route('crear.cliente')}}" role="button">+</a>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">DNI</th>
                        <th scope="col">Nombres y Apellidos</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mascotas</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                    <tr class="">
                        <td>{{$cliente->dni}}</td>
                        <td>{{$cliente->nombresapellidos}}</td>
                        <td>{{$cliente->celular}}</td>
                        <td>{{$cliente->email}}</td>
                        
                        <td>
                            <ul>
                                @foreach($cliente->mascotas as $mascota)
                                <li>{{$mascota->nombres}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start gap-3">
                                <form action="{{ route("editar.cliente", $cliente->dni) }}" method="GET">
                                    @csrf
                                    <button class="btn btn-warning">
                                        Editar
                                    </button>
                                </form>
                                <form action="{{ route("eliminar.cliente", $cliente->dni) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro?')">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
        
                    </tr>
        
                    @endforeach         
            </table>
        </div>

    </div>

</div>

    <script src="{{asset('scriptClientes.js')}}"></script>
    
@endsection