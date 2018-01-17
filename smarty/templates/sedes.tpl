<html lang="es">
<head>
  {include file="layout/header.tpl"}
</head>

<body id="inicio">
{include file="layout/botonera.tpl"}

{include file="layout/banner.tpl"}


<div class="container-fluid">

  <div class="row sedes">

    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1">
      <div class="row">
        <div class="col-md-3 no_padding1" align="center">
          <span class="fuente_morada">SEDES PREVALER</span>
        </div>
        <div class="col-md-9 no_padding1" align="center">
          <span>Conoce nuestras especialidades y servicios, horarios, cobertura de seguros en cada una de nuestras sedes.</span>
        </div>
      </div>
    </div>

  </div>

  <div class="row ubicacion">
    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1">
      <div class="row">
        <div class="col-md-7">
          <img class="img-responsive" src="/imagenes/{$listado[0]['directorio_image']}">
          <h3>
            <i class="fa fa-circle " aria-hidden="true"></i>
            SEDE {$nombres}
          </h3>
          <P>{$descripcion}</P>
        </div>

        <div class="col-md-5">
          <div class="row">
            <div class="col-xs-12" id="map" style="height: 450px">

            </div>
            <div class="col-xs-12">
              <h3><i class="fa fa-circle " aria-hidden="true"></i> Ubicación y Contacto.</h3>
              <P><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> {$ubicacion}</P>
              <p><i class="fa fa-phone fa-lg" aria-hidden="true"></i> {$telefono}</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="row sedes" align="center">
    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 titulo no_padding1">
      <hr class="color_morado">
      <span class="fuente_morada">ESPECIALIDADES MÉDICAS</span>
    </div>

    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 no_padding1">
      <div class="row">
        <div class="col-xs-6 col-md-4 col-lg-3" align="left">
          <div class="row especialistas">
            <div class="col-xs-12">
              <ul class="nav" id="side-menu">
                {section i $especialidad}
                  <li>
                    <a id="{$especialidad[i].id_fac}" onclick="return faq3();" style="cursor:pointer;">
                      {$especialidad[i].nombre_fac}
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  </li>
                {/section}
              </ul>
            </div>
            <!-- /.sidebar-collapse -->
          </div>
        </div>

        <div class="col-xs-6 col-md-8 col-lg-9 ver_medico">
          <div class="row">
            {section i $medico}
              <div class="col-xs-11 panel_{$medico[i]['especialidad_med']}" id="" style="display: none;">
                <img class="img-responsive img-circle" src="/imagenes/{$medico[i]['directorio_image']}">
                <ul>
                  <span>Dr. {$medico[i].nombre_med}</span>
                  <span><i class="fa fa-circle"></i>{$medico[i].descripcion_med}</span>
                </ul>
              </div>
            {/section}
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12" style="margin-top: 50px;">
      <a href="/cita_online.php" class="btn-info">SOLICITAR CITA</a>
    </div>
    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 titulo no_padding1">
      <hr class="color_morado">
      <span class="fuente_morada">NUESTROS SERVICIOS</span>
    </div>


    <div class="col-xs-12 col-md-6">
      <div class="row">
        <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
          <div class="panel-heading">
            <img class="img-responsive hidden-xs" src="/imagenes/happy.png">
            <span>Asistencia Médica Integral</span>
          </div>
          <div class="panel-body">
            <p>
              Contamos con médicos calificados de familia e internistas, soportados por
              nuestro equipo de médicos especialistas y sub-especialistas, todos de
              amplia experiencia.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-md-6">
      <div class="row">
        <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
          <div class="panel-heading">
            <img class="img-responsive hidden-xs" src="/imagenes/happy.png">
            <span>Atención Médica Ambulatoria</span>
          </div>
          <div class="panel-body">
            <p>
              En nuestros centros usted podrá realizarse procedimientos de rutina
              ambulatorios con la atención de calificadas enfermeras, tales como:
              mediciones de tensión y temperatura, nebulizaciones, colocación de
              inyecciones, tratamientos intravenosos e hidratación entre otras.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-md-6">
      <div class="row">
        <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
          <div class="panel-heading">
            <img class="img-responsive hidden-xs" src="/imagenes/happy.png">
            <span>Medicina Ocupacional</span>
          </div>
          <div class="panel-body">
            <p>
              Este servicio está orientado para aquellas empresas que requieran realizar
              estudios para sus empleados así como a los aspirantes a cargos.
              Para ello contamos con especialistas que realizan evaluaciones de
              pre-empleo, post-empleo, pre-vacacional, post- vacacional y
              exámenes periódicos de salud o tutoriales.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-md-6">
      <div class="row">
        <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
          <div class="panel-heading">
            <img class="img-responsive hidden-xs" src="/imagenes/happy.png">
            <span>Servicio de Laboratorio General y Especializado</span>
          </div>
          <div class="panel-body">
            <p>
              Nos preocupamos en ofrecer al médico y al paciente pruebas de alta
              confiabilidad, gracias a la constante modernización de los equipos t
              ecnológicos y a sus profesionales altamente calificados. Realizamos los
              diferentes exámenes de rutina y pruebas especiales.
              Contamos con unidades tanto en nuestras sedes de Valencia de la
              Urb. Camoruco y en Maracay.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-md-6">
      <div class="row">
        <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
          <div class="panel-heading">
            <img class="img-responsive hidden-xs" src="/imagenes/happy.png">
            <span>Servicio de Radiología General</span>
          </div>
          <div class="panel-body">
            <p>
              Realizamos las diferentes imágenes de radiología como apoyo al
              diagnóstico de nuestros médicos. Contamos con equipos de última
              generación. Nuestro equipo médico está conformado por profesionales
              altamente capacitados en el área de imagenología.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-md-6">
      <div class="row">
        <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
          <div class="panel-heading">
            <img class="img-responsive hidden-xs" src="/imagenes/happy.png">
            <span>Servicio de Ecografía</span>
          </div>
          <div class="panel-body">
            <p>
              Realizamos estudios convencionales en general, como: ecosonogramas
              abdominales, pélvicos y renales y estudios especiales tales como: doppler
              renales, hepáticos, músculo esqueléticos, mamarios, tiroideo, prostático,
              testicular y partes blandas.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="col-xs-12">
      <button href="" onclick="history.back()" class="btn-info">VOLVER</button>
    </div>
  </div>

  <div class="row publicidad">  <!-- Contenedor de Banner Publicitario-->

    {include file="layout/publicidad.tpl"}


  </div>        <!-- Fin del Contenedor de Banner Publicitario-->

  <div class="row contacto">  <!-- Contenedor de Contacto-->

    {include file="layout/contacto.tpl"}

  </div>        <!-- Fin del Contenedor de Contacto-->

  <!-- Pie de Página
================================================== -->

  {include file="layout/footer.tpl"}
</div>

<script src="/dist/js/bootstrap.min.js"></script>
<script src="/assets/js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

{literal}

<script type='text/javascript'>
  var map;
  var infowindow;

  function initMap() {
    var pyrmont = new google.maps.LatLng({/literal}{$latitud}, {$longitud}{literal});

    map = new google.maps.Map(document.getElementById('map'), {
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: pyrmont,
      zoom: 16
    });

    var image = '/imagenes/logo.png';
    var myLatLng = new google.maps.LatLng({/literal}{$latitud}, {$longitud}{literal});
    var beachMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
    });

    var request = {
      location: pyrmont,
      radius: 2,
      types: ['store']
    };
    infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);
    service.search(request, callback);
  }

  function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
        createMarker(results[i]);
      }
    }
  }

  function createMarker(place) {
    var placeLoc = place.geometry.location;
    var marker = new google.maps.Marker({
      map: map,
      position: place.geometry.location
    });

    google.maps.event.addListener(marker, 'click', function() {
      infowindow.setContent(place.name);
      infowindow.open(map, this);
    });
  }

  google.maps.event.addDomListener(window, 'load', initMap);
</script>

<script type="text/javascript">

  $(document).ready(function(){
    $('.fa-arrow-up').click(function(){
      $('body, html').animate({
        scrollTop: '0px'
      }, 300);
    });

    $(window).scroll(function(){
      if( $(this).scrollTop() > 0 ){
        $('.fa-arrow-up').slideDown(500);
        $('.redes_sociales').addClass('redes_invisibles');
      } else {
        $('.fa-arrow-up').slideUp(500);
        $('.redes_sociales').removeClass('redes_invisibles');
      }
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('[id=especialidad-]').click(function(){
      var id_selector = $(this).attr("id");
      var id = id_selector.substr(id_selector.length -1);
      $('[id=medico-'+id+']').css('display', 'block');
      $('[id^=medico-]').css('display', 'none');
    });
  });
</script>

{/literal}


</body>
</html>
<!-- Fin Pie de Página
================================================== -->
