$(document).ready(function () {
  $('a.visible').click(function(e) {
    e.preventDefault();
    var enlace = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(enlace).offset().top
    }, 1000);
  });
});


function mostrar() {

  if (document.getElementById('visible').style != null) {
    var elemento = document.getElementById('visible');
    var ocultar = elemento.style.display;

    if (ocultar === 'block') {
      document.getElementById('visible').style.display = 'none';
      document.getElementById('mostre-todo').style.display = 'block';
    } else {
      document.getElementById('visible').style.display = 'block';
      document.getElementById('mostre-todo').style.display = 'none';
    }
  }
}

function mostrar1() {
  if (document.getElementById('visible1').style != null) {
    var elemento = document.getElementById('visible1');
    var ocultar = elemento.style.display;

    if (ocultar === 'none') {
      document.getElementById('visible1').style.display = 'block';
      document.getElementById('visible2').style.display = 'none';

      document.getElementById('nombre_pol').required = 'required';
      document.getElementById('cedula_pol').required = 'required';
      document.getElementById('seguro').required = 'required';
    }
  }
}

function mostrar2() {
  document.getElementById('seguro').value = '';
  document.getElementById('seguro_desc').innerHTML = '';

  if (document.getElementById('visible2').style != null) {
    var elemento = document.getElementById('visible2');
    var ocultar = elemento.style.display;

    if (ocultar === 'none') {
      document.getElementById('visible2').style.display = 'block';
      document.getElementById('visible1').style.display = 'none';

      document.getElementById('nombre_pol').required = '';
      document.getElementById('cedula_pol').required = '';
      document.getElementById('seguro').required = '';
    }
  }
}
