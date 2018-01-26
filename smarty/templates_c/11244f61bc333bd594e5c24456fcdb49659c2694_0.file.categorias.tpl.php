<?php
/* Smarty version 3.1.29, created on 2017-10-11 20:33:03
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/layout/categorias.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59de63df7d5200_65565571',
  'file_dependency' => 
  array (
    '11244f61bc333bd594e5c24456fcdb49659c2694' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/layout/categorias.tpl',
      1 => 1507237550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59de63df7d5200_65565571 ($_smarty_tpl) {
?>
<div class="col-xs-10 col-xs-pull-1 col-xs-push-1" align="center">
      <h1 class="fuente_verde">LINEA GOURMET AMBROSÍA</h1>
      <hr class="color_verde">
    </div>

    <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['categoria']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
      <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) < '4') {?>
        <div class="col-xs-12 col-sm-6 col-lg-3">
          <div class="row">
            <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
              <div class="panel-heading">
                <a class="enlaceproducto" href="producto.php?cont=<?php echo $_smarty_tpl->tpl_vars['categoria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'];?>
" title="Ver Detalles">
                    <img class="img-responsive imgproducto bordes_verdes" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['categoria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
">
                  </a>
              </div>
              <div class="panel-body no_padding2">
                <h2 class="fuente_gris">
                  <i class="fa fa-circle" aria-hidden="true"></i> 
                  <?php echo $_smarty_tpl->tpl_vars['categoria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['etiqueta_cat'];?>

                </h2> 
              </div>
            </div>
          </div>
        </div>
      <?php } else { ?>
        <div class="col-xs-12 col-lg-6">
          <div class="row">
            <div class="panel-default col-xs-12">
              <div class="panel-heading">
                <a class="enlaceproducto" href="producto.php?cont=<?php echo $_smarty_tpl->tpl_vars['categoria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'];?>
" title="Ver Detalles">
                  <img class="img-responsive imgproducto bordes_verdes" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['categoria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
">
                </a>
              </div>
              <div class="panel-body no_padding2">
                <h2 class="fuente_gris">
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <?php echo $_smarty_tpl->tpl_vars['categoria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['etiqueta_cat'];?>
</h2>   
              </div>
            </div>
          </div>
        </div>  
      <?php }?>
        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
}
}
