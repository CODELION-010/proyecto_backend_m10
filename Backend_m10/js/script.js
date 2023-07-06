window.addEventListener('DOMContentLoaded', function() {
  var textoSalida = document.getElementById('texto-salida');
  var textoPredefinido = 
'¡Hola! Prófesor Jheshua Danand, Bienvenido a mi Proyecto Backend.\n'
  + 'Encontrarás una interfaz que espero sea interesante,\n'
  +'encontrando cada mini proyecto en un menú.\n'
  +'Saludos de {OSCAR LEON}';

  var index = 0;

  function escribirTexto() {
    if (index < textoPredefinido.length) {
      textoSalida.textContent += textoPredefinido.charAt(index);
      index++;
    } else {
      textoSalida.textContent = '';
      index = 0;
    }
  }

  setInterval(escribirTexto, 220); // Intervalo de tiempo en milisegundos
});
