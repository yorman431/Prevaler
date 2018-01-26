<?php
/* Smarty version 3.1.29, created on 2017-04-26 19:00:35
  from "/Applications/MAMP/htdocs/preolca/smartylib/templates/contacto.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5900d233c384d0_50701410',
  'file_dependency' => 
  array (
    'ab8400bb2c3c35780667d0ff36b7ac96096c4867' => 
    array (
      0 => '/Applications/MAMP/htdocs/preolca/smartylib/templates/contacto.tpl',
      1 => 1493225595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/banner.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_5900d233c384d0_50701410 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container top-background">
      <div class="row">

        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs" align="center">
          <a title="Prefabricados Obra Limpia" href="index.php"><img src="/imagenes/logotipo.png" alt="Prefabricados Obra Limpia" width="300"  border="0"></a>
        </div>

        <div class="hidden-lg hidden-md col-sm-9 col-xs-9">
          <a title="Prefabricados Obra Limpia" href="index.php"><img src="/imagenes/logotipo.png" alt="Prefabricados Obra Limpia" width="200"  border="0"></a>
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

    <div class="container">
      <div id="navbar" class="navbar-collapse collapse">

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
"><?php echo $_smarty_tpl->tpl_vars['enlaces_A']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_cat'];?>
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

          <ul class="nav navbar-nav navbar-right">
             <li><a title="Follow us on Twitter" href="https://twitter.com/preolca" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
             <li><a title="Follow us on Instagram" href="https://instagram.com/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
             <li><a title="Follow us on Facebook" href="https://www.facebook.com/Prefabricados-Obra-Limpia-CA-262962220399020/" target="_blank"><i class="fa fa-facebook-official fa-lg"></i></a></li>
          </ul>

        </div>
      </div>
    </div>
  </nav>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Contenido Principal
================================================== -->

<div class="container">
  <br />
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default panel-contacto">
        <div class="panel-heading preolca-contacto">
          Formulario de Contacto
        </div>
        <div class="panel-body">
          <?php echo $_smarty_tpl->tpl_vars['mensaje2']->value;?>

          <form class="form-horizontal" role="form" action="" method="post" name="form2" id="form2">
            <div class="form-group">
            <label class="sr-only" for="nombre">Nombre</label>
            <input  onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Completo" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
            </div>
            <div class="form-group">
            <label class="sr-only" for="telefono">Teléfono</label>
            <input  onkeypress="javascrip: return validarnum(event);" type="number" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" value="<?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>
">
            </div>
            <div class="form-group">
              <label class="sr-only" for="correo">Correo</label>
              <input  onkeypress="javascrip: return validarcorreo(event);" type="email" class="form-control" id="email" name="email" placeholder="tucorreo@servidor.com" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
            </div>
            <div class="form-group">
              <label class="sr-only" for="comentario">Mensaje</label>
              <textarea class="form-control" rows="3" name="comentario" id="comentario" placeholder="Mensaje"><?php echo $_smarty_tpl->tpl_vars['comentario']->value;?>
</textarea>
            </div>

            <div class="form-group">
            <input onclick="javascript: return validarformulario();" class="btn btn-md btn-primary btn-block" name="enviar" type="submit" id="enviar" value="Enviar" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default panel-contacto">
        <div class="panel-heading preolca-contacto">
          Información de Contacto
        </div>
        <div class="panel-body">
          <p><i class="fa fa-map-marker" aria-hidden="true"></i> Edo. Nueva Esparta, Isla de Margarita - Venezuela,
Sector Punta de Mangle, Calle El Colegio,
Municipio Tubores.</p><br />
          <p><i class="fa fa-envelope" aria-hidden="true"></i> gerencia@prefabricadosobralimpia.com.ve</p><br />
          <p><i class="fa fa-envelope" aria-hidden="true"></i> ventas@prefabricadosobralimpia.com.ve</p><br />
          <p><i class="fa fa-envelope" aria-hidden="true"></i> ingenieria@prefabricadosobralimpia.com.ve</p><br />
          <p><i class="fa fa-phone" aria-hidden="true"></i> 0295 8085266 / 0295 8085265</p><br />
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.1344635632036!2d-64.04480168536816!3d10.87737599225311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDUyJzM4LjUiTiA2NMKwMDInMzMuNCJX!5e0!3m2!1ses-419!2sve!4v1493224565053" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col=md-6" align="center">
            <img class="img-responsive" src="/imagenes/ahorra.jpg" alt="Prefabricados Obra Limpia"  border="0">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Fin Contenido Principal
================================================== -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
