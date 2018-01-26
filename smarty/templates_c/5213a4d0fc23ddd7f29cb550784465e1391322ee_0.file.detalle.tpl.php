<?php
/* Smarty version 3.1.29, created on 2017-04-26 16:39:57
  from "/Applications/MAMP/htdocs/preolca/smartylib/templates/admin/contenido/detalle.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5900b13d6875a3_45561163',
  'file_dependency' => 
  array (
    '5213a4d0fc23ddd7f29cb550784465e1391322ee' => 
    array (
      0 => '/Applications/MAMP/htdocs/preolca/smartylib/templates/admin/contenido/detalle.tpl',
      1 => 1492689965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/layout/header.tpl' => 1,
    'file:admin/layout/navigation.tpl' => 1,
    'file:admin/layout/firma.tpl' => 1,
    'file:admin/layout/footer.tpl' => 1,
  ),
),false)) {
function content_5900b13d6875a3_45561163 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <div id="wrapper">

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layout/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Contenido Principal
================================================== -->

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><?php echo $_smarty_tpl->tpl_vars['accion']->value;?>

            <div class="pull-right">
            <!-- Filtros -->
            <!-- Fin Filtros -->
            </div>
          </h3>
        </div>
        <!-- /.col-lg-12 -->
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-6 col-md-6">

                  <div class="form-group">
                    <strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>

                  </div>
                  <div class="form-group">
                    <strong>Enlace:</strong> <?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>

                  </div>

                  <div class="form-group">
                    <strong>Subenlace:</strong> <?php echo $_smarty_tpl->tpl_vars['subcategoria']->value;?>

                  </div>

                  <div class="form-group">
                    <strong>Fecha:</strong> <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>

                  </div>
                </div>
                <div class="col-lg-6 col-md-6">

                  <div class="panel panel-info">
                    <div class="panel-heading">
                      Imágenes Asignadas
                    </div>
                    <div class="panel-body">
                      <?php if ($_smarty_tpl->tpl_vars['mensaje']->value == '') {?>
                      <div class="row">
                        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listado']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <div class="col-lg-6 col-md-6">
                          <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox" data-title="<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="multiimages" title="<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
">
                            <img src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" class="img-rounded img-responsive" /></a>

                          <h6><a class="btn btn-danger btn-xs" onclick="javascript: return confirmar('&iquest;Esta seguro que desea elminar la imagen?');" href="imagen_borrar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_image'];?>
&amp;back=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;tabla=contenido"><i class="fa fa-times"></i></a> <?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>

    </h6>
                        </div>
                        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                      </div>
                      <?php } else { ?>
                      <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
                      <?php }?>

                    </div>
                  </div>


                </div>

                <div class="col-xs-12">
                  <div class="form-group">
                    <strong>Contenido:</strong> <?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>

                  </div>
                  <div class="form-group">
                    <a href="index.php" class="btn btn-md btn-primary">Volver</a>
                    <a href="imagen.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-md btn-primary">Insertar imagen</a>
                  </div>
                </div>

              </div>

                <div class="well">
                  <h4>Información sobre asignación de imágenes</h4>
                  <p>Sed tincidunt, ante nec congue porta, sapien diam commodo urna, nec gravida diam elit at massa. Proin commodo consequat nulla quis commodo. Suspendisse potenti. Pellentesque at rutrum ex, vitae luctus lorem. Aliquam erat volutpat. Ut a ligula
                    ullamcorper diam pretium viverra nec ut mauris.</p>
                </div>

            </div>
            <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
        </div>
      </div>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layout/firma.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <!-- /#page-wrapper -->

<!-- Fin Contenido Principal
================================================== -->

  </div>
  <!-- /#wrapper -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
