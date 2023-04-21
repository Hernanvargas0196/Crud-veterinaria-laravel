$(document).ready(function () {
    $('#example').DataTable({
// opciones de configuración
"columnDefs": [
  { "orderable": false, "targets": 5 } // desactivar el ordenamiento en la segunda columna
],
"pageLength": 5,
"lengthMenu": [5, 10, 25, 50] // agrega el número 5 a la lista de opciones

    });
});
