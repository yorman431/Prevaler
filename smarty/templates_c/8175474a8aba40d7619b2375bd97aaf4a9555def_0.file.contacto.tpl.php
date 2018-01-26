<?php
/* Smarty version 3.1.29, created on 2017-10-20 23:00:56
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/contacto.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ea64081f7627_22160076',
  'file_dependency' => 
  array (
    '8175474a8aba40d7619b2375bd97aaf4a9555def' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/contacto.tpl',
      1 => 1508532435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/botonera.tpl' => 1,
    'file:layout/banner.tpl' => 1,
  ),
),false)) {
function content_59ea64081f7627_22160076 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="container-fluid contacto">
  <br />
  <div class="row">

    <div class="col-md-4">
     <form class="form-horizontal" role="form" action="/contacto.php#contact" method="post" name="contact" id="contact">
        <div class="panel panel-default panel-contacto">
          <div class="panel-heading preolca-contacto" align="center">
            <h2 class="fuente_verde">CONTACTO</h2>
            <hr class="color_verde">
          </div>
          <div class="panel-body">
            <div class="form-group">
              <input  type="text" name="nombre" id="nombre" placeholder="Nombre" value="" required="required">
            </div>
            <div class="form-group">
              <input  type="text" name="telefono" id="telefono" placeholder="Teléfono" value="" required="required">
            </div>
            <div class="form-group">
              <input  type="email" id="email" name="email" placeholder="Email" value="" required="required">
            </div>
            <div class="form-group">
              <input type="text" rows="3" name="comentario" id="comentario" placeholder="Mensaje" value="" required="required">
            </div>
          </div>
          <div class="panel-footer" align="right">
            <button onclick="javascript: return validarformulario();" name="enviar" type="submit" id="enviar" value="Enviar">
              <img class="img-responsive" src="/imagenes/enviar.png">
            </button>
          </div>
        </div>
        <div class="col-xs-12">
          <h4 class="fuente_verde"><?php echo $_smarty_tpl->tpl_vars['mensaje2']->value;?>
</h4>
        </div>
       </form>
    </div>

    <div class="col-md-4">
      <div class="panel panel-default panel-borde">
        <div class="panel-heading preolca-contacto" align="center">
          <h2 class="fuente_verde">FABRICA</h2>
          <hr class="color_verde">
        </div>
        <div class="panel-body">
          <p>
            <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
            Lun a Vie, de 8 am a 5 pm
          </p>
          <p>
            <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> 
            Calle Real de Conejeros, centro 
            Vicenzo, 2do Piso, Porlamar, Isla 
            de Margarita, Venezuela.
          </p>
          <p>
            <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
            +58 295 2741456 / 2742117
          </p>
          <p class="mini_padding">+58 426 5862783</p>
          <p>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            ventasuniformese@gmail.com
          </p>
          <br>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="panel panel-default panel-borde">
        <div class="panel-heading preolca-contacto" align="center">
         <h2 class="fuente_verde">TIENDA</h2>
         <hr class="color_verde">
        </div>
        <div class="panel-body">
          <p>
            <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
            Lun a Sab, de 9 am a 6 pm
          </p>
          <p>
            <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> 
            Centro Comercial Ecocenter, 
            nivel feria,  Av. Francisco Fajardo, 
            El Valle, Isla de Margarita, Venezuela.
          </p>
          <p>
            <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
            +58 295 2746633
          </p>
          <p>
            <i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i>
            +58 424 8877777
          </p>
          <p>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            perseoglobal@gmail.com
          </p>
          <br>
        </div>
      </div>
    </div>

    <div class="col-xs-12">
      <div class="row">
        <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 bordes_verdes no_padding1">
          <iframe src="https://www.google.com/maps/d/embed?mid=166udCRKnRjM02amiCioWN_2YT4I" width="100%" height="600"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Fin Contenido Principal
================================================== -->


<?php echo '<script'; ?>
 src="/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/docs.min.js"><?php echo '</script'; ?>
>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<?php echo '<script'; ?>
 src="/assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->



  <?php echo '<script'; ?>
 type="text/javascript">

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
<?php echo '</script'; ?>
>




  </body>
</html>
<!-- Fin Pie de Página
================================================== -->

<?php }
}
