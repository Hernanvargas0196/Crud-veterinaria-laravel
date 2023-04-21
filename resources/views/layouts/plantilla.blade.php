<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" rel="stylesheet" />
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<!-- Full Calendar-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>


<body>
  <header>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('inicio')}}" aria-current="page">CRUD Veterinaria<span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('inicio.clientes')}}">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('inicio.mascotas')}}">Mascotas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('inicio.citas')}}">Citas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('inicio.calendario')}}">FullCalendar</a>
            </li>
        </ul>
    </nav>
  </header>
  <main>
        @yield('content')
  </main>
  <footer class="bg-dark text-center text-white mt-3">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">

        <!-- Linkedin -->
        <a
            class="btn text-white btn-floating m-1"
            style="background-color: #0082ca;"
            href="https://www.linkedin.com/in/hernan-vargas-1a998716a"
            role="button"
            target="blank_"
            ><i class="fab fa-linkedin-in"></i
        ></a>
        <!-- Github -->
        <a  
            class="btn text-white btn-floating m-1"
            style="background-color: #333333;"
            href="https://github.com/Hernanvargas0196"
            role="button"
            target="blank_"
            ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Hernan Vargas  ||  hdvargasd25@gmail.com
      <!--<a class="text-white" href="https://mdbootstrap.com/">Mi portafolio.com</a>-->
    </div>
    <!-- Copyright -->
  </footer>
  
  
</body>

</html>