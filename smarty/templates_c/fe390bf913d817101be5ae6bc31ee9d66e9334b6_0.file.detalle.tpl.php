<?php
/* Smarty version 3.1.29, created on 2017-10-06 20:04:53
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/publicidad/detalle.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59d7c5c54862e5_79445978',
  'file_dependency' => 
  array (
    'fe390bf913d817101be5ae6bc31ee9d66e9334b6' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/publicidad/detalle.tpl',
      1 => 1503427735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/layouts/head2.tpl' => 1,
    'file:admin/layouts/menu.tpl' => 1,
    'file:admin/layouts/footer.tpl' => 1,
  ),
),false)) {
function content_59d7c5c54862e5_79445978 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layouts/head2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="/js/prototype.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/scriptaculous.js?load=effects"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/lightbox.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="/css/lightbox.css" type="text/css" media="screen" />

<!-- InstanceEndEditable -->
</head>

<body>

    <div id="wrapper">

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layouts/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div id="page-wrapper">
        	<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><?php echo $_smarty_tpl->tpl_vars['accion']->value;?>

                    	<div class="pull-right">
                    	<!-- InstanceBeginEditable name="filtros" -->


        				<!-- InstanceEndEditable -->
                    	</div>
                    </h3>

                </div>
                <!-- /.col-lg-12 -->
            </div>

			<!-- InstanceBeginEditable name="contenido" -->
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
                                         <strong>Fecha de creaci&oacute;n:</strong>
                                         <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>

                                         </div>
                                          <div class="form-group">
                                          <strong>Descripci&oacute;n:</strong>
                                          <?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>

                                          </div>

                                         <div class="form-group">
                                        <a href="../publicidad" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>                                  </div>
                                       </div>
                                      <div class="col-lg-6 col-md-6">

                                      <div class="panel panel-info">
                                          <div class="panel-heading">
                                              A&ntilde;adir Imagen
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
                                              <div class="col-xs-6 col-sm-4 col-md-3">
                                                <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_dir'];?>
" rel="lightbox[roadtrip]" >
                                                <img class="img-responsive" border="0" src="/imagenes/miniaturas/publicidad/<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_dir'];?>
"/></a><br />
                                                    <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                <a  class="btn-danger btn-xs" onclick="javascript: return confirmar('&iquest;Esta seguro que desea borrar la imagen?');" href="imagen_borrar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_dir'];?>
&amp;back=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;tabla=publicidad"><i class="fa fa-times"></i></a>
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
                                              <div class="alert alert-danger" role="alert" align="center"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
                                            <?php }?>

                                          </div>
                                          <div class="panel-footer">
                                          <a href="imagen.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Insertar Imagen</a>
                                          </div>
                                      </div>
                                  </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
     <!-- InstanceEndEditable -->



            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Metis Menu Plugin JavaScript -->
    <?php echo '<script'; ?>
 src="/bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="/bower_components/datatables/media/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>
	<!-- InstanceBeginEditable name="pie" --><!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
<?php }
}
