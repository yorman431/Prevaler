<?php
/* Smarty version 3.1.29, created on 2018-02-02 16:47:02
  from "D:\Websites\Prevaler\smarty\templates\layout\botonera.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a7496066f9362_35842365',
  'file_dependency' => 
  array (
    'df59370a68539434dd225e1c7a437ea6856f9bd2' => 
    array (
      0 => 'D:\\Websites\\Prevaler\\smarty\\templates\\layout\\botonera.tpl',
      1 => 1516997681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7496066f9362_35842365 ($_smarty_tpl) {
?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid top-background hidden-lg hidden-md">
      <div class="row">

        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs" align="center">
          
        </div>

        <div class="hidden-lg hidden-md col-sm-9 col-xs-9">
          <div class="navbar-left">
            <a href="index.php">
              <img class="img-responsive" src="/imagenes/logo.png">
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

    <div class="container-fluid">
      <div id="navbar" class="navbar-collapse collapse">
        <div class="navbar-header hidden-xs hidden-sm">
            <a href="index.php">
              <img class="img-responsive" src="/imagenes/logo.png">
            </a>
        </div>

        <ul class="nav navbar-nav botonera">
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
                <li <?php if ($_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'] == $_smarty_tpl->tpl_vars['activo']->value) {?>class="active"<?php }?>><a id="borde" class="<?php if ($_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'] != '2' && $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'] != '5' && $_smarty_tpl->tpl_vars['activo']->value == '1' || $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'] == '6') {?>transicion<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['etiqueta_cat'];?>
" href="<?php if ($_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'] == '1') {
if ($_smarty_tpl->tpl_vars['activo']->value == '1') {?> #inicio <?php } else { ?> index.php<?php }?> <?php } else {
if ($_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'] == '2') {?> nosotros.php <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'] == '3') {
if ($_smarty_tpl->tpl_vars['activo']->value == '1') {?> #sedes <?php } else { ?> index.php#sedes<?php }?> <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'] == '4') {?> <?php if ($_smarty_tpl->tpl_vars['activo']->value == '1') {?> #faq <?php } else { ?> index.php#faq <?php }?> <?php } else {
if ($_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'] == '5') {?>presupuesto.php <?php } else { ?> #contacto <?php }
}
}
}
}?>"">
                  <img class="seleccionado img-responsive" src="/imagenes/seleccion.png">
                  <?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_cat'];?>
</a></li>
              <?php }?>
            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
        </ul>

        <ul class="nav navbar-nav">
            <li class="hidden-md hidden-lg"><a title="Follow us on Instagram" href="https://www.instagram.com/prevaler_ve/" target="_blank">
              <i class="fa fa-instagram fuente_morada" aria-hidden="true"></i></a></li>
            <li class="hidden-md hidden-lg"><a title="Follow us on Twitter" href="https://twitter.com/Prevaler_VE" target="_blank">
              <i class="fa fa-twitter fuente_morada"></i></a>
            </li>
            <li class="hidden-md hidden-lg">
              <a href="cita_online.php">
                <img class="img-responsive img-cita" src="/imagenes/cita_online.png">
              </a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right visible-md visible-lg">
            <li>
              <a title="Follow us on Instagram" href="https://www.instagram.com/prevaler_ve/" target="_blank">
                <i class="fa fa-instagram fa-2x fuente_morada" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <h2></h2>
            </li>
            <li>
              <a title="Follow us on Twitter" href="https://twitter.com/Prevaler_VE" target="_blank"><i class="fa fa-twitter fa-2x fuente_morada"></i></a>
            </li>
            <li class="color_morado">
              <a href="cita_online.php">
               <img class="img-responsive" src="/imagenes/flecha.png">
               <h5>SOLICITUD DE CITA MÉDICA</h5>
              </a>
            </li>
        </ul>
                                                                                  
      </div>  
    </div>
</nav><?php }
}
