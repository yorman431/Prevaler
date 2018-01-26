<?php
/* Smarty version 3.1.29, created on 2017-10-23 22:11:53
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/layout/categorias.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ee4d09d20479_11206820',
  'file_dependency' => 
  array (
    '05cc3a04eddff325ad0598745a70c317c3fc4ecc' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/layout/categorias.tpl',
      1 => 1508786525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ee4d09d20479_11206820 ($_smarty_tpl) {
?>
      <div class="col-xs-12">
        <div class="row">
          <div class="col-md-4 hidden-sm hidden-xs">
            <hr class="fondo_verde">
          </div>
          <div class="col-xs-12 col-md-4 no_padding1" align="center">
            <span>DIEMME CUCINE</span>
          </div>
          <div class="col-md-4 hidden-sm hidden-xs">
            <hr class="fondo_rojo">
          </div>
        </div>
      </div> 

    <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['categoria']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <div class="col-xs-12 col-sm-6 col-lg-3">
          <div class="row">
            <div class="col-xs-10 col-xs-push-1 col-xs-pull-1">
                <a class="enlaceproducto" href="producto.php?cont=<?php echo $_smarty_tpl->tpl_vars['categoria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'];?>
" title="Ver Detalles">
                    <img class="img-responsive imgproducto bordes_verdes" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['categoria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
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
}
}
