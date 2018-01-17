{include file="layout/header.tpl"}

{include file="layout/botonera.tpl"}

{include file="layout/banner.tpl"}
  
  <!-- InstanceBeginEditable name="contenido" -->
    
<div class="container-fluid">
  <div class="row noticias">
    <div class="col-xs-12 titulo" align="center">
      <span class="fuente_morada">NOTICIAS</span>
    </div>  
    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1">
      <div class="col-xs-12 col-md-5" align="right">
        <img class="img-responsive" src="/imagenes/{$noticia.directorio_image}">
      </div>
      <div class="col-xs-12 col-md-6">
        <h2 class="fuente_verde">{$noticia.titulo_not}</h2>
        <p class="fuente_gris lead">{$noticia.contenido_not}</p>
      </div>
      <div class="col-xs-12" align="center">
        <a href="" onclick="history.back()" class="btn-info">VOLVER</a>
      </div>
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
