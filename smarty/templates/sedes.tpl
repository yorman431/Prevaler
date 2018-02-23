{include file="layout/header.tpl"}

{include file="layout/botonera.tpl"}

{include file="layout/banner.tpl"}
	
	<!-- InstanceBeginEditable name="contenido" -->
    
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
          <div id="banner_sede" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                      {assign var="cont" value=0}
                      {section name=i loop=$listado}
                        <li data-target="#banner_sede" data-slide-to="{$cont}" {if $cont eq "0"}class="active"{/if}></li>
                          {assign var="cont" value=$cont+1}
                      {/section}
                  </ol>

                  <div class="carousel-inner" role="listbox">
                      {assign var="cont" value=0}
                      {section name=i loop=$listado}
                        <div {if $cont eq "0"} class="item active" {else} class="item" {/if}>
                            <img class="img-responsive" alt="{$listado[i].nombre_image}" src="/imagenes/{$listado[i].directorio_image}">
                        </div>
                          {assign var="cont" value=$cont+1}
                      {/section}
                  </div>
                 
          </div>
          <h3>
            <i class="fa fa-circle " aria-hidden="true"></i>
            {$nombres}
          </h3>
          <P>{$descripcion}</P>
        </div>

        <div class="col-md-5">
          <div class="row" id="map"></div>
          <h3><i class="fa fa-circle " aria-hidden="true"></i>Ubicación y Contacto.</h3>
          <P><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> {$ubicacion}</P>
          <p><i class="fa fa-phone fa-lg" aria-hidden="true"></i> {$telefono}</p>
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
        <div class="col-xs-5 col-md-4" align="left">
          <div class="row especialidades">
                <div class="col-xs-12">
                  <ul class="nav" id="side-menu">
                    {assign var="cont" value=0}
                    {section i $especialidad}

                      {assign var="cont" value=$cont+1}
                      <li>
                        <a href="#medicos" id="{$especialidad[i].id_fac}" onclick="javascript: return faq3();" style="cursor:pointer;" {if $cont eq '1' } class="no-push btn-push transicion" {else} class="no-push transicion"{/if}>
                          {$especialidad[i].nombre_fac}
                          <i class="fa fa-chevron-right" aria-hidden="true"></i>
                          <ul class="hidden-md hidden-lg">
                            
                          </ul>
                        </a>
                      </li>
                    {/section}  
                  </ul>
                </div>
                <!-- /.sidebar-collapse -->
          </div>
        </div>

        <div class="col-xs-7 col-md-8 ver_medico" id = "medicos">
          <div id="default" class="row" style="display: block;">

              {assign var="cont" value=0}            
              {section i $medico}
                {assign var="cont" value=$cont+1}
                {if {$especialidad[0].id_fac} eq {$medico[i]['especialidad_med']}}
                  <div class="col-xs-11 default">
                    <img class="img-responsive img-circle" {if {$medico[i]['imagenes']} eq null || {$medico[i]['imagenes']} eq ''} src="/imagenes/mi_perfil.png"{else} src="/imagenes/{$medico[i]['imagenes']}"{/if}>
                    <ul>
                      <span class="fuente_morada">{$medico[i].nombre_med}</span>
                      <i class="fa fa-circle"></i>{$medico[i].descripcion_med}
                    </ul>
                  </div>
                {/if}
              {/section}

          </div>

          <div class="row">

            {assign var="cont" value=0}

            {section i $medico}

              {assign var="cont" value=$cont+1}
              <div class="col-xs-11 panel_{$medico[i]['especialidad_med']}" style="display: none;">
               
                <img class="img-responsive img-circle" {if {$medico[i]['imagenes']} eq null || {$medico[i]['imagenes']} eq ''} src="/imagenes/mi_perfil.png"{else} src="/imagenes/{$medico[i]['imagenes']}"{/if}>
                <ul>
                  <span class="fuente_morada">{$medico[i].nombre_med}</span>
                  <i class="fa fa-circle"></i>{$medico[i].descripcion_med}
                </ul>
              </div>
            {/section}
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12" style="margin-top: 50px;">
      <a href="cita_online.php" class="btn-info">SOLICITAR CITA</a>
    </div>
    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 titulo no_padding1">
      <hr class="color_morado">
      <span class="fuente_morada">NUESTROS SERVICIOS</span>
    </div>

    {foreach $servicios as $servicio}

    <div class="col-xs-12 col-md-6">
      <div class="row">
        <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
          <div class="panel-heading">
            <img class="img-responsive hidden-xs" src="imagenes/happy.png">
            <span>{$servicio.titulo}</span>
          </div>
          <div class="panel-body">
            <p>
              {$servicio.descripcion}
            </p>
          </div>
        </div>
      </div>
    </div>

    {/foreach}

    <div class="col-xs-12">
      <button href="" onclick="history.back()" class="btn-info">VOLVER</button>
    </div>
  </div>

  <div class="row publicidad">  <!-- Contenedor de Banner Publicitario-->

     {include file="layout/publicidad.tpl"} 
    

  </div>        <!-- Fin del Contenedor de Banner Publicitario-->

  <div class="row contacto">  <!-- Contenedor de Contacto-->

    <div class="col-xs-12" id="contacto">
      <div class="row">

        <hr class="color_morado">

        <div class="col-xs-12 titulo" align="center">
          <span class="fuente_morada">CONTACTO</span>
        </div>

        <div class="col-md-6">
          <form class="form-horizontal" role="form" action="/sedes.php#contacto" method="post" name="contact" id="contact">
            <div class="panel panel-default panel-contacto">
              <div class="panel-heading"></div>
              <div class="panel-body">
          
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <input  type="text" name="nombre" id="nombre" placeholder="Nombre / Empresa" value="" required="required">
                </div>
            
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <input  type="text" name="telefono" id="telefono" placeholder="Teléfono" value="" required="required">
                </div>
          
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <input  type="email" id="email" name="email" placeholder="Email" value="" required="required">
                </div>
           
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <select id="sede" name="sede" required="required">
                    <option selected hidden value="">Seleccione la Sede</option>
                    {section name=i  loop=$sede}
                      <option value="{$sede[i].nombre_sede}">{$sede[i].nombre_sede}</option>
                    {/section}
                  </select>
                </div>
           
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <input type="text" rows="3" name="comentario" id="comentario" placeholder="Mensaje" value="" required="required">
                </div>
  
              </div>

              <div class="panel-footer" align="right">
                <div  class="col-xs-11 no_padding1">
                  <button onclick="javascript: return validarformulario();" name="enviar" type="submit" id="enviar" value="Enviar1" class="btn-info">Enviar</button>
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <h4 class="fuente_morada">{$mensaje2}</h4>
            </div>
          </form>
        </div>

        <div class="col-md-6">
          <div class="row"  align="center">

            <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Caracas
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 773.86.33)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            caracas@prevaler.com
            </span>

            <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Maracay
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 773.82.53)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            maracay@prevaler.com
            </span>

            <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Porlamar
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0295 400.94.00)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            porlamar@prevaler.com
            </span>

            <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Valencia Norte
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 773.82.53)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            valencianorte@prevaler.com
            </span>

            <span>
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Valencia Sur
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 773.82.53)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            valenciasur@prevaler.com
            </span>

          </div>
        </div>
      </div>
    </div>
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

  <script type="text/javascript">       /// resalta las opcion seleccionada
      $(document).ready(function(){       /// de preguntas frecuentes
        $('.no-push').click(function(e){
          $('.no-push').removeClass('btn-push');
          $(this).addClass('btn-push');
        })
      });
  </script>

  <script type="text/javascript">
      $(document).ready(function(){
        $('a.transicion').click(function(e){
          e.preventDefault();
          enlace = $(this).attr('href');
          $('html, body').animate({
            scrollTop: $(enlace).offset().top-100
          }, 1000);
        });
      });
    </script>

{/literal}


  </body>
</html>
<!-- Fin Pie de Página
================================================== -->
