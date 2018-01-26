<?php
/* Smarty version 3.1.29, created on 2017-10-11 20:33:34
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/galeria.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59de63fe903f91_00834486',
  'file_dependency' => 
  array (
    'd9a0eb38e6ff501f1beda3fc3005638f288cb76f' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/galeria.tpl',
      1 => 1507665115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/botonera.tpl' => 1,
    'file:layout/banner.tpl' => 1,
    'file:layout/formulario_contacto.tpl' => 1,
  ),
),false)) {
function content_59de63fe903f91_00834486 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid galeria">
    <div class="row">
      <div class="col-xs-10 col-xs-pull-1 col-xs-push-1 col-sm-8 col-sm-pull-2 col-sm-push-2 col-md-4 col-md-pull-4 col-md-push-4" align="center">
        <span class="fuente_verde">GALERÍA</span>
        <hr class="color_verde">
      </div>
    </div>

    <div class="row">
              <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
              <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['galeria']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  <?php if ($_smarty_tpl->tpl_vars['cont']->value == '8') {?></div><div class="row" <?php if ($_smarty_tpl->tpl_vars['cont']->value >= '8') {?> id="visible" style="display:none;"<?php }?>><?php }?>
                  <div class="col-xs-12 col-sm-6 col-md-3 efecto-hover" align="center">
                    <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                      <a 
                       href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox"  data-footer="<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="GALERIA">
                        <img  src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" class="img-responsive bordes_verdes">
                        <h4  class="nombre_galeria"><?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
</h4>
                      </a>
                  </div>
              <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
              
                <?php echo '<script'; ?>
>
                  $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event){
                      event.preventDefault();
                      $(this).ekkoLightbox();
                    });
                <?php echo '</script'; ?>
>
            
        </div>
        <?php if (count($_smarty_tpl->tpl_vars['galeria']->value) > 8) {?>
        <div class="row">
              <div class="col-xs-12 cargar-mas"align="center">
                 <button href="#visible" id="mostre-todo" onclick="mostrar()" class="btn btn-info">
                   Ver m&aacute;s
                 </button>
              </div>
        </div>
        <?php }?>
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
    $('#myModal').on('shown.bs.modal', function () {
      $('#myModal').focus()
    })
  <?php echo '</script'; ?>
>

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
