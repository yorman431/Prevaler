<!DOCTYPE html>
<html lang="es">

  {include file="layout/header.tpl"}

  <body id="inicio">
    
  {include file="layout/botonera.tpl"}

  {include file="layout/banner.tpl"}

  <div class="container-fluid">  <!-- Contenedor Principal-->

    <div class="row sedes" id="sedes">			<!-- Contenedor de Sedes-->

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

    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 no_padding1">
      <div class="row" id="mosaico_sede">

        {section name=i loop=$hotel}
          {if $smarty.section.i.index < '2'}
            <div class="col-md-6 efecto-hover">
              <a href="sedes.php?id={$hotel[i].id_sede}" title="Ver Detalles">
                <div class="img-sede">
                  <img class="img-responsive maximo" src="/imagenes/{$hotel[i].directorio_image}">
                </div>
                <div class="ver_sede" align="center">
                  <h3>{$hotel[i].nombre_sede}</h3>
                  <h4>(Edo. {$hotel[i].estado_sede})</h4>
                  <img  class="img-responsive" src="/imagenes/flecha_sede.png">
                </div>
              </a>
            </div>
          {else}
            <div class="col-md-4 efecto-hover">
              <a href="sedes.php?id={$hotel[i].id_sede}" title="Ver Detalles">
                <div class="img-sede">
                  <img class="img-responsive maximo" src="/imagenes/{$hotel[i].directorio_image}">
                </div>
                <div class="ver_sede" align="center">
                  <h3>{$hotel[i].nombre_sede}</h3>
                  <h4>({$hotel[i].estado_sede})</h4>
                  <img  class="img-responsive" src="/imagenes/flecha_sede.png">
                </div>
              </a>
            </div>
          {/if}
        {/section}

      </div>

    </div>
          
    </div>						<!-- Fin del Contenedor de Sedes-->

    <div class="row publicidad">  <!-- Contenedor de Banner Publicitario-->

            <div class="col-xs-12 no_padding1">
              <div id="publicidad3" class="carousel slide" data-ride="carousel">
    
                    <div class="carousel-inner" role="listbox">
                        {assign var="cont" value=0}
                        {section name=i loop=$publicidad3}
                          <div {if $cont eq "0"} class="item active" {else} class="item" {/if}>
                              <a href="{$publicidad3[i].url_dir}" target="_blank">
                              <img class="img-responsive maximo" alt="{$publicidad3[i].etiqueta_ban}" src="/imagenes/publicidad/{$publicidad3[i].directorio_dir}">
                              </a>
                          </div>
                            {assign var="cont" value=$cont+1}
                        {/section}
                    </div>

                    <a class="left carousel-control" href="#publicidad3" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#publicidad3" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                    
              </div>
            </div>
          
      <div class="col-md-6" align="center">
        <a href="+585007738253">
          <i class="fa fa-phone" aria-hidden="true"></i>
          En Maracay o Valencia llámenos al 0500 773.82.53
        </a>
      </div>
      <div class="col-md-6" align="center">
        <a href="+585007738633">
          <i class="fa fa-phone" aria-hidden="true"></i>
          En Caracas o Porlamar llámenos al 0500 773.86.33
        </a>
      </div>

    </div>        <!-- Fin del Contenedor de Banner Publicitario-->

    <div class="row faq" id="faq">     <!-- Contenedor de Preguntas Frecuentes-->

      {include file="layout/FAQ.tpl"} 

    </div>            <!-- Fin del Contenedor de Preguntas Frecuentes-->

    <div class="row noticias">       <!-- Contenedor de Noticias-->

      {include file="layout/noticias.tpl"} 
      
    </div>      <!-- Contenedor de Noticias-->

    <div class="row">
      <div class="col-xs-12 columna-instagram">
        <i class="fa fa-instagram fa-3x fuente_morada" aria-hidden="true"></i>
        <span class="fuente_morada">@prevaler</span>
        <hr class="color_morado">
      </div> 
    </div>
    <div class="row instagram">       <!-- Contenedor de Instagram-->

      <!-- LightWidget WIDGET -->
      <script src="//lightwidget.com/widgets/lightwidget.js"></script>
      <iframe src="//lightwidget.com/widgets/9b042ba75b1450f8883155c04ef6d5e6.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

      
    </div>      <!-- Contenedor de Instagram-->

    <div class="row conten">       <!-- Contenedor de Programas Especiales-->

      {$contenido[0].contenido_con}

    </div>      <!-- Contenedor de Programas Especiales-->

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
      <form class="form-horizontal" role="form" action="/index.php#contacto" method="post" name="contact" id="contact">
          <div class="panel panel-default panel-contacto">
            <div class="panel-heading">
              
            </div>
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
                <button onclick="javascript: return validarformulario();" name="enviar" type="submit" id="enviar" value="Enviar1" class="btn-info">
                Enviar
              </button>
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
    
    {include file="layout/footer.tpl"}

  </div><!--  Fin del Contenedor Principal-->


  <script src="/dist/js/bootstrap.min.js"></script>
  <script src="/assets/js/docs.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

  {literal}
    
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
          $('a.transicion').click(function(e){
            e.preventDefault();
            enlace = $(this).attr('href');
            $('html, body').animate({
              scrollTop: $(enlace).offset().top-100
            }, 1000);
          });
        });
  </script>

  <script type="text/javascript">       /// resalta las opcion seleccionada
        $(document).ready(function(){       /// de cita con o sin poliza
          $('.no-push').click(function(e){
            $('.no-push').removeClass('btn-push');
            $(this).addClass('btn-push');
          })
        });
  </script>

  {/literal}




  </body>
</html>
<!-- Fin Pie de Página
================================================== -->
