@extends('layouts/plantilla')

@section('title')
    Editar Mascota
@endsection

@section('content')

<div class="card col-md-6 m-auto">
    <div class="card-header d-flex justify-content-center">
        <h4>Editar Mascota</h4>
    </div>
    <div class="card-body">
        <form action="{{route('update.mascota', $datos->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="dni" class="form-label">ID</label>
                    <input type="text"
                      class="form-control" name="id" id="id" placeholder="ID" required value="{{$datos->id}}">
                  </div>
  
                  <div class="col-md-9">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text"
                      class="form-control" name="nombres" id="nombres"  placeholder="Nombres" required value="{{$datos->nombres}}">
                  </div>

                  <div class="col-md-12">
                    <label for="" class="form-label">Dueño</label>
                    <select name="cliente_dni" id="cliente_dni" class="form-select ">
                        
                        <option value="{{$datos->cliente->dni}}">{{$datos->cliente->nombresapellidos}}</option>
                        @foreach($clientes as $cliente)
                        <option value="{{$cliente->dni}}">{{$cliente->nombresapellidos}}</option>
                        @endforeach
                    </select>
                  </div>


                  <div class="col-md-12 d-flex justify-content-between">
                    <button  class="btn btn-success">Guardar</button>
                    <a name="" id="" class="btn btn-danger" href="{{route('inicio.mascotas')}}" role="button">Cancelar</a>
                  </div>
            </div>
        </form>
    </div>

</div>
@endsection