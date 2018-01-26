<?php
/* Smarty version 3.1.29, created on 2017-11-10 21:35:00
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/layout/productos.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a060d74915b05_24832486',
  'file_dependency' => 
  array (
    'd5f3d7f21be25e66641c088017bb6e2386d9fbd3' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/layout/productos.tpl',
      1 => 1510075022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a060d74915b05_24832486 ($_smarty_tpl) {
?>
      <div class="col-xs-12 productos" id="productos">
        <div class="row">
          <div class="col-md-4 hidden-sm hidden-xs linea-md">
            <hr class="fondo_verde">
          </div>
          <div class="col-xs-12 col-md-4 no_padding1" align="center">
            <span>DIEMME CUCINE</span>
          </div>
          <div class="col-md-4 hidden-sm hidden-xs linea-md">
            <hr class="fondo_rojo">
          </div>
        </div>
      </div> 

    <div class="col-xs-12">       <!-- Area de Productos-->
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
            <?php if ($_smarty_tpl->tpl_vars['cont']->value == '4') {?></div><div class="row" <?php if ($_smarty_tpl->tpl_vars['cont']->value >= '4') {?> id="visible" style="display:none;"<?php }?>> <?php }?>
                <div class="col-xs-12 col-md-6 productos" align="center">
                  <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?> 
                  <div class="row">
                    <div class="col-xs-12">
                      <a class="enlaceproducto" href="producto_detalle.php?cont=<?php echo $_smarty_tpl->tpl_vars['producto']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_pro'];?>
" title="Ver Detalles">
                        <div class="nombreproducto" align="center">
                          <?php echo $_smarty_tpl->tpl_vars['producto']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_pro'];?>

                          <img class="img-responsive" src="/imagenes/marca_producto.png">
                        </div>
                        <img class="img-responsive imgproducto bordes_verdes" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['producto']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
">
                      </a>
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
        <?php if (count($_smarty_tpl->tpl_vars['producto']->value) > 4) {?>
          <div class="row">
              <div class="col-xs-12 cargar-mas productos"align="center">
                  <button href="#visible" id="mostre-todo" onclick="mostrar()" class="btn-info">
                      CARGAR M&Aacute;S
                  </button>
              </div>
          </div>
        <?php }?>
  </div>      <!-- Fin del Area de Noticias--><?php }
}
