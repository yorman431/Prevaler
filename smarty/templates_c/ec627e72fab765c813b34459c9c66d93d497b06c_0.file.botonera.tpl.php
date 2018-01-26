<?php
/* Smarty version 3.1.29, created on 2017-10-11 20:33:46
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/layout/botonera.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59de640a1504d2_50803626',
  'file_dependency' => 
  array (
    'ec627e72fab765c813b34459c9c66d93d497b06c' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/layout/botonera.tpl',
      1 => 1507578898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59de640a1504d2_50803626 ($_smarty_tpl) {
?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid top-background">
      <div class="row">

        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs" align="center">
          
        </div>

        <div class="hidden-lg hidden-md col-sm-9 col-xs-9">
          <div class="navbar-left">
            <a href="index.php">
              <img class="img-responsive" src="/imagenes/logo_inicio.png">
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-3" align="right">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" id="boton-navegacion" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
        </div>

      </div>
    </div>

    <div class="container-fluid no_padding1">
      <div id="navbar" class="navbar-collapse collapse">
        <div class="navbar-header hidden-xs hidden-sm col-unica">
          <hr>
        </div>
        <div class="navbar-header hidden-xs hidden-sm no_padding1">
            <a href="index.php">
              <img class="img-responsive" src="/imagenes/logo_linea.png">
            </a>
        </div>

        <ul class="nav navbar-nav">
            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['enlaces_A']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
              <?php if ($_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['enlaces'] != '') {?>
                <li class="dropdown">
                  <a id="borde" title="<?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['etiqueta_cat'];?>
" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_cat'];?>
<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <?php
$__section_j_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__smarty_section_j'] : false;
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['enlaces']) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total != 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                      <?php if ($_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'] == "22") {?>
                        <li><a title="<?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_cat'];?>
" href="catalogo_opcion.php?cat=<?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['enlaces'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['enlaces'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['nombre_cat'];?>
</a></li>
                      <?php } else { ?>
                        <li><a title="<?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_cat'];?>
" href="contenido_sub.php?cont=<?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'];?>
&sub=<?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['enlaces'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id_sub'];?>
"><?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['enlaces'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['nombre_sub'];?>
</a></li>
                      <?php }?>
                    <?php
}
}
if ($__section_j_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_1_saved;
}
?>
                  </ul>
                </li>
              <?php } else { ?>
                <li <?php if ($_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'] == $_smarty_tpl->tpl_vars['activo']->value) {?>class="active"<?php }?>><a id="borde" title="<?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['etiqueta_cat'];?>
" href="/contenido.php?cont=<?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'];?>
">
                <i class="fa fa-circle" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_cat'];?>
</a></li>
              <?php }?>
            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
            <li class="visible-sm visible-xs"><a title="Follow us on Facebook" href="https://es-la.facebook.com/uniformese/" target="_blank"><i class="fa fa-facebook fuente_verde" aria-hidden="true"></i></a></li>
            <li class="visible-sm visible-xs"><a title="Follow us on Twitter" href="" target="_blank"><i class="fa fa-twitter fuente_verde"></i></a></li>
            <li class="visible-sm visible-xs"><a title="Follow us on Instagram" href="https://www.instagram.com/uniformesevenezuela/" target="_blank"><i class="fa fa-instagram fuente_verde" aria-hidden="true"></i></a></li>
        </ul>
        <hr class="linea_gris hidden-sm hidden-xs">
      </div>
        
        <div class="col-md-6 col-md-push-3 col-md-pull-3 col-lg-4 col-lg-push-4 col-lg-pull-4 visible-md visible-lg redes_sociales" align="center">
          <ul class="nav navbar-nav">
            <li><a title="Follow us on Facebook" href="https://es-la.facebook.com/uniformese/" target="_blank"><i class="fa fa-facebook fa-2x fuente_verde" aria-hidden="true"></i></a></li>
            <li><a title="Follow us on Twitter" href="" target="_blank"><i class="fa fa-twitter fa-2x fuente_verde"></i></a></li>
            <li><a title="Follow us on Instagram" href="https://www.instagram.com/uniformesevenezuela/" target="_blank"><i class="fa fa-instagram fa-2x fuente_verde" aria-hidden="true"></i></a></li>
            <li><i class="fa fa-search fa-2x fuente_verde" aria-hidden="true"></i>
            <li><input type="serch" name="" aria-controls="dataTables"></li></li>
          </ul>
        </div>    
      </div>
    </div>
  </nav><?php }
}
