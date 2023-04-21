@extends('layouts/plantilla')

@section('title')
    Editar Cliente
@endsection

@section('content')
<div class="card col-md-6 m-auto">
    <div class="card-header d-flex justify-content-center">
        <h4>Editar Cliente</h4>
    </div>
    <div class="card-body">
        <form action="{{route('update.cliente', $datos->dni)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input type="text"
                      class="form-control" name="dni" id="dni" placeholder="DNI" required value="{{$datos->dni}}">
                  </div>
  
                  <div class="col-md-9">
                    <label for="nombresapellidos" class="form-label">Nombres y apellidos</label>
                    <input type="text"
                      class="form-control" name="nombresapellidos" id="nombresapellidos"  placeholder="Nombres y Apellidos" required value="{{$datos->nombresapellidos}}">
                  </div>

                  <div class="col-md-3">
                    <label for="" class="form-label">Celular</label>
                    <input type="number"
                      class="form-control" name="celular" id="celular" placeholder="Celular" required value="{{$datos->celular}}">
                  </div>

                  <div class="col-md-9">
                    <label for="" class="form-label">Email</label>
                    <input type="email"
                      class="form-control" name="email" id="email" placeholder="Email" required value="{{$datos->email}}">
                  </div>

                  <div class="col-md-12 d-flex justify-content-between">
                    <button  class="btn btn-success">Guardar</button>
                    <a name="" id="" class="btn btn-danger" href="{{route('inicio.clientes')}}" role="button">Cancelar</a>
                  </div>
            </div>
        </form>
    </div>

</div>
@endsection