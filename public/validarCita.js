
//Variables
const $btn = document.querySelector('#validarCita');

$btn.addEventListener('click', (e) => {
  e.preventDefault();
  // Obtener los valores de fecha y hora de los campos correspondientes
  const fechaCita = document.querySelector('#fechaCita').value;
  const horaCita = document.querySelector('#horaCita').value;

  // Enviar una petición AJAX para verificar si ya existe una cita programada a la misma hora y fecha
  const url = `/citas/existe?fechaCita=${fechaCita}&horaCita=${horaCita}`;
  fetch(url)
    .then(response => response.json())
    .then(data => {
      if (data.existe) {
        // Si ya existe una cita a la misma hora y fecha, mostrar un mensaje de error
        alert('Ya existe una cita programada a la misma hora y fecha.');
      } else {
        // Si no existe una cita a la misma hora y fecha, enviar el formulario para guardar la nueva cita
        const form = document.querySelector('#crearCitaForm');
        const formData = new FormData(form);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', form.action);
        xhr.send(formData);
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            document.querySelector('#crearCitaForm').submit();
          } else {
            // Error al enviar el formulario
            console.error(xhr.statusText);
          }
        };
      }
    })
    .catch(error => console.error(error));
})
