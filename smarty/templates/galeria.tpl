{include file='layout/header.tpl'}
{include file='layout/botonera.tpl'}
{include file='layout/banner.tpl'}

<div class="container-fluid galeria">
    <div class="row">
      <div class="col-xs-10 col-xs-pull-1 col-xs-push-1 col-sm-8 col-sm-pull-2 col-sm-push-2 col-md-4 col-md-pull-4 col-md-push-4" align="center">
        <span class="fuente_verde">GALERÍA</span>
        <hr class="color_verde">
      </div>
    </div>

    <div class="row">
              {assign var="cont" value=0}
              {section i $galeria}
                  {if $cont eq '8'}</div><div class="row" {if $cont ge '8'} id="visible" style="display:none;"{/if}>{/if}
                  <div class="col-xs-12 col-sm-6 col-md-3 efecto-hover" align="center">
                    {assign var="cont" value=$cont+1}
                      <a 
                       href="/imagenes/{$galeria[i].directorio_image}" data-toggle="lightbox"  data-footer="{$galeria[i].nombre_image}" data-gallery="GALERIA">
                        <img  src="/imagenes/{$galeria[i].directorio_image}" alt="{$galeria[i].nombre_image}" class="img-responsive bordes_verdes">
                        <h4  class="nombre_galeria">{$galeria[i].nombre_image}</h4>
                      </a>
                  </div>
              {/section}
              {literal}
                <script>
                  $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event){
                      event.preventDefault();
                      $(this).ekkoLightbox();
                    });
                </script>
            {/literal}
        </div>
        {if $galeria|@count gt 8}
        <div class="row">
              <div class="col-xs-12 cargar-mas"align="center">
                 <button href="#visible" id="mostre-todo" onclick="mostrar()" class="btn btn-info">
                   Ver m&aacute;s
                 </button>
              </div>
        </div>
        {/if}
</div>
<!-- Pie de Página
================================================== -->

<footer>
  <div class="container-fluid">
    <div class="row">                 <!-- Contenedor de suscripcion-->
      <div class="col-xs-10 col-xs-pull-1 col-xs-push-1" align="center">
        <div class="row bordes_verdes">
          <div class="col-xs-12 col-md-2 color_verde">
               <h4>SUSCRIBETE</h4>
          </div>
          <div class="col-xs-12 col-md-7 col-lg-7">
            <p class="alineamiento1">Recibe notificaciones sobre nuevos productos y ofertas especiales para ti.</p>
          </div>
          <div class="col-xs-12 col-md-3 alineamiento2">
            <form id="footer" name="footer" method="post" action="/galeria.php#footer">
              <div class="col-xs-9 no_padding1">
                <input type="text" name="correoSusc" id="correoSusc" class="maximo" placeholder="Coloca tú email" value="" onkeypress="javascrip: return validar_correo(event);">
              </div>
              <div class="col-xs-3 no_padding1">
                <button class="maximo" name="go" type="submit" id="go" value="Go">
                  <i class="fa fa-chevron-right fa-lg" aria-hidden="true"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-xs-10 col-xs-pull-1 col-xs-push-1" align="right">
        <h4 class="fuente_verde">{$mensaje3}</h4>
      </div>
    </div>                <!-- Fin del Contenedor de suscripcion-->

    <div align="center"><hr></div>         <!-- linea de separacion-->

    <div class="row">                             
      <div class="col-xs-12">
        <div class="row">
          <div class="col-md-4 visible-lg visible-md " align="left">
            <a href="http://diazcreativos.net" target="_blank">
              <div class="row">
                <div class="col-xs-3 no_padding1" align="right">
                  <img src="/imagenes/logo-firma.png" alt="Desarrollado por Díaz Creativos" border="0">
                </div>
                <div class="col-xs-9">
                  <p class="fuente_gris">Díaz Creativos</p>
                </div>
              </div>
            </a> 
          </div>

          <div class="col-xs-12 col-md-4" align="center">
            <p>©2017 Derechos Reservados. Uniformese.</p>
          </div>

          <div class="col-xs-12 visible-xs visible-sm no_padding1" align="center">
            <p>
              <a href="http://diazcreativos.net" target="_blank">
              <div class="row">
                <div class="col-xs-2 no_padding1" align="right">
                  <img src="/imagenes/logo-firma.png" alt="Desarrollado por Díaz Creativos" border="0">
                </div>
                <div class="col-xs-10" align="left">
                  <p class="fuente_gris">Díaz Creativos</p>
                </div>
              </div>
            </a> 
            </p>
          </div>

          <div class="col-xs-12 col-md-4" align="right">
            <div class="row">
              <div class="col-xs-10 no_padding1">
                <p>Volver Arriba</p>
              </div>
              <div class="col-xs-2" align="left">
                <a href="#inicio">
                  <i class="fa fa-arrow-up fa-2x fuente_verde" aria-hidden="true"></i>
                </a> 
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div> 
</footer>

<!-- formulario de solicitud-->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {include file="layout/formulario_contacto.tpl"}
                </div>
            </div>
        </div>    

<script src="/dist/js/bootstrap.min.js"></script>
<script src="/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

{literal}
  <script type="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
      $('#myModal').focus()
    })
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

{/literal}


  </body>
</html>
<!-- Fin Pie de Página
================================================== -->
