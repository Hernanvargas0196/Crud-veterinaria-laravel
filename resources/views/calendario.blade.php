@extends('layouts/plantilla')
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8' />
  <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
  <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.print.min.css' rel='stylesheet' media='print' />
  <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>
</head>

  @section('title')
      FullCallendar
  @endsection

  @section('content')
  <div id='calendar'></div>
  @endsection
  

<body>
  
  <script>
    $(document).ready(function() {
      // Inicializar calendario
      $('#calendar').fullCalendar({
        // Configuración del calendario
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: '2023-04-01',
        navLinks: true,
        editable: true,
        eventLimit: true, // habilita "más" en el popover
        events: 
          // Eventos
          {!! json_encode($eventos_calendar) !!},
        
          //click de cada evento
          eventClick: function(event) {
            var url = '{{ route("editar.cita", ":id") }}'.replace(':id', event.id);
            window.location.href = url;
          // Aquí puedes agregar el código para mostrar más información del evento, 
          // abrir una ventana modal, etc.
          },
        locale: 'es'
      });
  
    });
    
  </script>
</body>

</html>
