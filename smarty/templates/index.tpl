{include file="layout/header.tpl"}

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
     <div class="row">

      {section name=i loop=$hotel}
        {if $smarty.section.i.index < '2'}
          <div class="col-md-6 efecto-hover">
            <a href="sedes.php?id={$hotel[i].id_sede}" title="Ver Detalles">
              <div class="img-sede">
                <img class="img-responsive" src="/imagenes/{$hotel[i].directorio_image}">
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
                <img class="img-responsive" src="/imagenes/{$hotel[i].directorio_image}">
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
                  <ol class="carousel-indicators" style="display:none;">
                      {assign var="cont" value=0}
                      {section name=i loop=$publicidad3}
                        <li data-target="#myCarousel" data-slide-to="{$cont}" {if $cont eq "0"}class="active"{/if}></li>
                          {assign var="cont" value=$cont+1}
                      {/section}
                  </ol>

                  <div class="carousel-inner" role="listbox">
                      {assign var="cont" value=0}
                      {section name=i loop=$publicidad3}
                        <div {if $cont eq "0"} class="item active" {else} class="item" {/if}>
                            <a href="{$publicidad3[i].url_dir}" target="_blank">
                            <img class="img-responsive" alt="{$publicidad3[i].etiqueta_ban}" src="/imagenes/publicidad/{$publicidad3[i].directorio_dir}">
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

  <div class="row">       <!-- Contenedor de Instagram-->

     <!--  {include file="layout/contacto.tpl"}  -->
    
  </div>      <!-- Contenedor de Instagram-->

  <div class="row conten">       <!-- Contenedor de Programas Especiales-->

     {$contenido[0].contenido_con}

  </div>      <!-- Contenedor de Programas Especiales-->

  <div class="row publicidad">  <!-- Contenedor de Banner Publicitario-->

     {include file="layout/publicidad.tpl"} 
    

  </div>        <!-- Fin del Contenedor de Banner Publicitario-->

  <div class="row contacto">  <!-- Contenedor de Contacto-->

     {include file="layout/contacto.tpl"}

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

{/literal}

<!--
  {literal}
  <script type="text/javascript">
    $(document).ready(function(){
      $('.pregunta').click(function(){
        clickeado = $(this).attr('id');
        if ($('a').attr('id') == clickeado) {
          $(this).addClass('activo');
        } else {
          $(this).removeClass('activo');
        }
        
      });
    });
  </script>
{/literal}

-->




  </body>
</html>
<!-- Fin Pie de Página
================================================== -->
