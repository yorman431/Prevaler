<?php
/* Smarty version 3.1.29, created on 2017-12-20 14:53:43
  from "/Applications/MAMP/htdocs/prevaler/smartylib/templates/layout/noticias.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a3a6b67e2dd20_33542803',
  'file_dependency' => 
  array (
    'bc91199c2b8af9a94fe5a8d441f56e9024cabb26' => 
    array (
      0 => '/Applications/MAMP/htdocs/prevaler/smartylib/templates/layout/noticias.tpl',
      1 => 1512417117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3a6b67e2dd20_33542803 ($_smarty_tpl) {
?>
  <div class="col-xs-12 titulo" align="center">
    <span class="fuente_morada">NOTICIAS</span>
  </div>

    <div class="col-xs-12">       <!-- Area de Productos-->
      <div class="row">

        <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
          <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['noticia']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['cont']->value == '4') {?></div><div class="row" <?php if ($_smarty_tpl->tpl_vars['cont']->value >= '4') {?> id="visible" style="display:none;"<?php }?>> <?php }?>
              <div class="col-xs-12 col-sm-6 col-md-3">
                <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                <div class="row">
                  <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1 no_padding1">
                    <div align="center" class="panel-heading no_padding">
                      <img class="img-responsive" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['noticia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['imagenes'][0]['directorio_image'];?>
" />
                    </div>

                    <div class="panel-body">
                      <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                      <span class="fuente_morada">
                        <?php echo $_smarty_tpl->tpl_vars['noticia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['titulo_not'];?>

                      </span>
                      <p><?php echo $_smarty_tpl->tpl_vars['noticia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['subtitulo_not'];?>
</p>
                    </div>
                    <div class="panel-footer no_padding" align="center">
                      <a href="noticia_detalle.php?cont=<?php echo $_smarty_tpl->tpl_vars['noticia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_not'];?>
">
                        <p class="blanco">VER MÁS</p>
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
        <?php if (count($_smarty_tpl->tpl_vars['noticia']->value) > 4) {?>
          <div class="row">
              <div class="col-xs-12" align="center">
                  <button href="#visible" id="mostre-todo" onclick="mostrar()" class="btn-info">
                      CARGAR M&Aacute;S
                  </button>
              </div>
          </div>
        <?php }?>
  </div>      <!-- Fin del Area de Noticias--><?php }
}
