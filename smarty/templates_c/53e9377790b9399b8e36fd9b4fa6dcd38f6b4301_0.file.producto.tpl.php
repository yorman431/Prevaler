<?php
/* Smarty version 3.1.29, created on 2017-11-02 18:14:12
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/producto.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59fb5264dd12b9_97419611',
  'file_dependency' => 
  array (
    '53e9377790b9399b8e36fd9b4fa6dcd38f6b4301' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/producto.tpl',
      1 => 1508532404,
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
function content_59fb5264dd12b9_97419611 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="container-fluid">
	 <!-- InstanceBeginEditable name="contenido" -->
    <div class="row productos">
    	<div class="col-xs-10 col-xs-pull-1 col-xs-push-1 col-sm-8 col-sm-pull-2 col-sm-push-2 col-md-4 col-md-pull-4 col-md-push-4" align="center">
        <span class="fuente_verde"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre_cat'];?>
</span>
        <hr class="color_verde">
      </div>

      <div class="col-xs-12">
        <div class="row">
          <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
          <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['producto']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>    
            <?php if ($_smarty_tpl->tpl_vars['cont']->value == '8') {?></div><div class="row" <?php if ($_smarty_tpl->tpl_vars['cont']->value >= '8') {?> id="visible" style="display:none;"<?php }?>><?php }?>  
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                <div class="row">
                  <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
                    <div class="panel-heading">
                      <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

                      <a class="enlaceproducto" href="producto_detalle.php?cont=<?php echo $_smarty_tpl->tpl_vars['producto']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_pro'];?>
" title="Ver Detalles">
                        <div class="nombreproducto3">
                          <?php echo $_smarty_tpl->tpl_vars['producto']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_pro'];?>

                        </div>
                        <img class="img-responsive imgproducto bordes_verdes" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['producto']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
">
                      </a>
                    </div>
                  </div>
                </div>
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
          <?php if (count($_smarty_tpl->tpl_vars['producto']->value) > 8) {?>
            <div class="row">
              <div class="col-xs-12" align="center" onclick="mostrar()">
                <button class="btn-info">
                  Ver Más
                </button>       
              </div>
            </div>
          <?php }?>
        </div>
      </div>       
    </div>
  </div>       
            <!-- InstanceEndEditable -->
      


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
