@extends('layouts/plantilla')

@section('title')
    Inicio CRUD Veterinaria    
@endsection

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">CRUD Veterinaria</h1>
          <div class="d-flex">
            <div class="border border-info rounded p-3 m-3">
              <p class="col-md-8"><h4>Tecnologias utilizadas: 
                <ul>
                  <li>Framework Laravel con Eloquent OMR</li>
                  <li>Manejo de POO y patrón de diseño MVC</li>
                  <li>Bootstrap - Datatables</li>
                  <li>JavaScript</li>
                  <li>Jquery AJAX</li>
                  <li>Plugin Full Calendar</li>
                </ul>
              </h4>
              </div>
              <div class=" d-flex align-items-center">
                <p>
                <h2>Desarrollado por: <br>
                  Hernan Dario Vargas Daza<br>
                  <br>
                  <a class="text-decoration-none" href="https://www.linkedin.com/in/hernan-vargas-1a998716a">Linkedin</a>
                  <a class="text-decoration-none" href="https://github.com/Hernanvargas0196">GitHub</a>
                </h2>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection