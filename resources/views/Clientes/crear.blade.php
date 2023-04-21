@extends('layouts/plantilla')

@section('title')
    Crear Cliente
@endsection

@section('content')
    <div class="card col-md-6 m-auto">
        <div class="card-header d-flex justify-content-center">
            <h4>Agregar Cliente</h4>
        </div>
        <div class="card-body">
            <form action="{{route('guardar.cliente')}}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="text"
                          class="form-control" name="dni" id="dni" placeholder="DNI" required>
                      </div>
      
                      <div class="col-md-9">
                        <label for="nombresapellidos" class="form-label">Nombres y apellidos</label>
                        <input type="text"
                          class="form-control" name="nombresapellidos" id="nombresapellidos"  placeholder="Nombres y Apellidos" required>
                      </div>

                      <div class="col-md-3">
                        <label for="" class="form-label">Celular</label>
                        <input type="number"
                          class="form-control" name="celular" id="celular" placeholder="Celular" required>
                      </div>

                      <div class="col-md-9">
                        <label for="" class="form-label">Email</label>
                        <input type="email"
                          class="form-control" name="email" id="email" placeholder="Email" required>
                      </div>

                      <div class="col-md-12 d-flex justify-content-between">
                        <button  class="btn btn-success">Agregar</button>
                        <a name="" id="" class="btn btn-danger" href="{{route('inicio.clientes')}}" role="button">Cancelar</a>
                      </div>
                </div>
            </form>
        </div>

    </div>
@endsection