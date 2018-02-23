function faq() {
  var id = String(event.currentTarget.id);
  var FAQ = JSON.parse(localStorage.getItem('faq'));
  if ($.isEmptyObject(FAQ)) {
    localStorage.setItem('faq', JSON.stringify(id));
    $('#panel_' + id).css('display', 'block');
    $('#default').css('display', 'none');
  } else {
    $('#default').css('display', 'none');
    $('#panel_' + FAQ).css('display', 'none');
    $('#panel_' + id).css('display', 'block');
    localStorage.setItem('faq', JSON.stringify(id));
  }
}

function faq_2() {
  var id = String(event.currentTarget.id);
  var FAQ2 = JSON.parse(localStorage.getItem('faq2'));
  var respuesta = document.getElementById('panel_' + id);
  respuesta = respuesta.style.display;
  if (respuesta !== 'block') {
    if ($.isEmptyObject(FAQ2)) {
      localStorage.setItem('faq2', JSON.stringify(id));
      $('#panel_' + id).css('display', 'block');
      $('#default').css('display', 'none');
    } else {
      if (FAQ2 !== id) {
        $('#default').css('display', 'none');
        $('#panel_' + FAQ2).css('display', 'none');
        $('#panel_' + id).css('display', 'block');
        localStorage.setItem('faq2', JSON.stringify(id));
      }
    }
  } else {
    if (FAQ2 !== id) {
      $('#panel_' + id).css('display', 'none');
    }
  }
}

function faq3() {
  var id = String(event.currentTarget.id);
  var FAQ = JSON.parse(localStorage.getItem('faq'));
  if ($.isEmptyObject(FAQ)) {
    localStorage.setItem('faq', JSON.stringify(id));
    $('.panel_' + id).css('display', 'block');
    $('#default').css('display', 'none');
  } else {
    $('#default').css('display', 'none');
    $('.panel_' + FAQ).css('display', 'none');
    $('.panel_' + id).css('display', 'block');
    localStorage.setItem('faq', JSON.stringify(id));
  }
}

function destruir_faq() {
  localStorage.removeItem('faq');
}
