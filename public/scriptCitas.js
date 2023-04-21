$(document).ready(function () {
  $('#example').DataTable({
    // opciones de configuración
    "language": {
      "search": "Buscar por fecha:",
    },
    "columnDefs": [
      { "orderable": false, "targets": 4 } // desactivar el ordenamiento en la tercera columna
    ],
    "pageLength": 5,
    "lengthMenu": [5, 10, 25, 50], // agrega el número 5 a la lista de opciones
  
  });
  //Cambiamos el tipo del search para buscar por fecha
  $('input[type="search"]').attr('type', 'date')
});
