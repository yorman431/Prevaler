{include file="layout/header.tpl"}

{include file="layout/botonera.tpl"}

{include file="layout/banner.tpl"}



<div class="container-fluid">  <!-- Contenedor Principal-->

	<div class="row nosotros" align="center">
		<hr class="color_morado">
    	<div class="col-xs-10 col-xs-push-1 col-xs-pull-1 titulo no_padding1">
      		<span class="fuente_morada">NOSOTROS</span>
    	</div>

    	<div class="col-xs-12 conten" align="left">
    		{$contenido[0].contenido_con}
    	</div>

    	<div class="col-xs-11 col-xs-offset-1"><hr class="color_morado"></div>

    	<div class="col-xs-12 col-md-6" align="center">
    		<div class="row">
    			<div class="col-xs-10 col-xs-push-1 col-xs-pull-1">
    				<span class="fuente_morada">PRINCIPIOS</span>
    			</div>
    		</div>
    	</div>

    	<div class="col-xs-12">
    		{$contenido[1].contenido_con}
    	</div>

    	<div class="col-xs-11 col-xs-offset-1"><hr class="color_morado"></div>

    	<div class="col-xs-12 col-md-6" align="center">
    		<div class="row">
    			<div class="col-xs-10 col-xs-push-1 col-xs-pull-1">
    				<span class="fuente_morada">OBJETIVOS ESTRATEGICOS</span>
    			</div>
    		</div>
    	</div>

    	<div class="col-xs-12 conten" align="left">
    		{$contenido[2].contenido_con}
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
            <form class="form-horizontal" role="form" action="/nosotros.php#contacto" method="post" name="contact" id="contact">
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
