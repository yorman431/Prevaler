<?php
/* Smarty version 3.1.29, created on 2017-10-11 20:33:22
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/noticias.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59de63f20e2a11_59142655',
  'file_dependency' => 
  array (
    'e3b4a35dbc20fbdae0dcc2ac55980ed6dbcb7ac6' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/noticias.tpl',
      1 => 1507665271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/botonera.tpl' => 1,
    'file:layout/banner.tpl' => 1,
    'file:layout/noticias.tpl' => 1,
    'file:layout/formulario_contacto.tpl' => 1,
  ),
),false)) {
function content_59de63f20e2a11_59142655 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<!-- InstanceBeginEditable name="contenido" -->
    
<div class="container-fluid">
  <div class="row noticias">       
    
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/noticias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  </div>
</div>              
            <!-- InstanceEndEditable -->
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
            <form id="footer" name="footer" method="post" action="/noticias.php#footer">
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
        <h4 class="fuente_verde"><?php echo $_smarty_tpl->tpl_vars['mensaje3']->value;?>
</h4>
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
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/formulario_contacto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
            </div>
        </div>    

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
