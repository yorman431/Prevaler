<?php
/* Smarty version 3.1.29, created on 2017-10-19 22:26:47
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/layout/noticias.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59e90a877a7a71_12033932',
  'file_dependency' => 
  array (
    'df8e6a0da1cc9e4b0a2a0f5ede2107f0ca9b0eea' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/layout/noticias.tpl',
      1 => 1507229155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e90a877a7a71_12033932 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/Applications/MAMP/htdocs/delle_cucine/smartylib/libs/plugins/modifier.truncate.php';
?>
<div class="col-xs-10 col-xs-pull-1 col-xs-push-1 col-sm-8 col-sm-pull-2 col-sm-push-2 col-md-4 col-md-pull-4 col-md-push-4" align="center">
    <span class="fuente_verde">NOTICIAS</span>
    <hr class="color_verde">
</div>

<div class="col-xs-12">				<!-- Area de Noticias-->
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
            <?php if ($_smarty_tpl->tpl_vars['cont']->value == '4') {?></div><div class="row" <?php if ($_smarty_tpl->tpl_vars['cont']->value >= '4') {?> id="visible" style="display:none;"<?php }?>><?php }?>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                    <div class="row">
						<div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
							<div class="panel-heading">
								<img class="img-responsive" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['noticia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['imagenes'][0]['directorio_image'];?>
">
							</div>
							<div class="panel-body">
								<h3 class="fuente_verde">
									<i class="fa fa-circle" aria-hidden="true"></i>
									<?php echo $_smarty_tpl->tpl_vars['noticia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['titulo_not'];?>

								</h3>
								<p class="fuente_gris lead">	
									<?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['noticia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['contenido_not'], $tmp) > 150) {?>
										<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['noticia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['contenido_not'],150,"...");?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['noticia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['contenido_not'];?>

									<?php }?>
								</p>
							</div>
							<div class="panel-footer">
								<a href="noticia_detalle.php?cont=<?php echo $_smarty_tpl->tpl_vars['noticia']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_not'];?>
">
									<img class="img-responsive" src="/imagenes/leer.png">
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
            	<div class="col-xs-12 cargar-mas"align="center">
                	<button href="#visible" id="mostre-todo" onclick="mostrar()" class="btn btn-info">
                   		Ver m&aacute;s Noticias
                	</button>
            	</div>
        	</div>
        <?php }?>
	</div>			<!-- Fin del Area de Noticias--><?php }
}
