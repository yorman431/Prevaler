{include file="layout/header.tpl"}

{include file="layout/botonera.tpl"}

{include file="layout/banner.tpl"}

<!-- Contenido Principal
================================================== -->
<div class="container-fluid">
  <div class="row">

    <div class="col-xs-12 contenido">
      <div class="row">
        <div class="col-xs-12 col-md-6">    
          <div class="row">
            <div class="col-xs-10 col-xs-pull-1 col-xs-push-1">
              {if $contenido neq ""}
                {section name=i loop=$contenido}
                  {$contenido[i].contenido_con}
                {/section}
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="row">
            {section name=j loop=$galerias}
              <div class="col-xs-10 col-xs-pull-1 col-xs-push-1" align="center">
                <img class="img-responsive bordes_verdes" src="/imagenes/{$galerias[j].directorio_image}">
              </div>
            {/section}
          </div>
        </div>  
      </div>
      <div class="clearfix"></div>
      {else}
        <br />
        <div class="alert alert-danger" align="center">No existen contenidos en esta sección</div>
      {/if}
    </div>

  </div>  

</div>
<!-- Fin Contenido Principal
================================================== -->



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

