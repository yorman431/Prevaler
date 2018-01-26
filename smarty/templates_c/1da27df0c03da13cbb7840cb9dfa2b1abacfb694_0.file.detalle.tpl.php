<?php
/* Smarty version 3.1.29, created on 2017-08-21 23:38:25
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/link/detalle.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_599b52d1e72b85_64301765',
  'file_dependency' => 
  array (
    '1da27df0c03da13cbb7840cb9dfa2b1abacfb694' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/link/detalle.tpl',
      1 => 1492186030,
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
function content_599b52d1e72b85_64301765 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layouts/head2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                            <div class="col-lg-6 col-md-4">

                                  <div class="form-group">
                                  <strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>

                                  </div>

                                  <div class="form-group">
                                  <strong>Etiqueta:</strong> <?php echo $_smarty_tpl->tpl_vars['etiqueta']->value;?>

                                  </div>

                                  <div class="form-group">
                                  <strong>Descripci&oacute;n:</strong> <?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>

                                  </div>

                                  <div class="form-group">
                                  <strong>Palabras Claves:</strong> <?php echo $_smarty_tpl->tpl_vars['claves']->value;?>

                                  </div>

                                  <div class="form-group">
                                  <strong>Orden:</strong> <?php echo $_smarty_tpl->tpl_vars['prioridad']->value;?>

                                  </div>
                                  <div class="form-group">
                                  <strong>Tipo:</strong> <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>

                                  </div>

                                  <div class="form-group">
                                  <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a> <a href="sublink.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-md btn-danger"><i class="fa fa-plus-square" aria-hidden="true"></i> A&ntilde;adir Subenlaces</a> <a href="editar.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-md btn-danger"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                                  </div>

                            </div>
                            <div class="col-lg-6 col-md-4">

                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        A&ntilde;adir Subenlace
                                    </div>
                                    <div class="panel-body">
                                        <?php if ($_smarty_tpl->tpl_vars['mensaje']->value == '') {?>
                                        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listado']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                          <?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_sub'];?>

                                          <a class="btn btn-danger btn-xs" onclick="javascript: return confirmar('&iquest;Esta seguro que desea borrar?');" href="sublink_borrar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_rel'];?>
&amp;back=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="fa fa-times"></i></a>&nbsp;&nbsp;&nbsp;
                                        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                      <?php } else { ?>
                                        <div class="alert alert-danger" role="alert" align="center"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
                                      <?php }?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4">

                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        A&ntilde;adir Imagen
                                    </div>
                                    <div class="panel-body">
                                        <?php if ($_smarty_tpl->tpl_vars['mensaje2']->value == '') {?>
                                        <div class="row">
                                        <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['imagenes']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                          <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['imagenes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" rel="lightbox[roadtrip]" >
                                          <img class="img-responsive" border="0" src="/imagenes/miniaturas/<?php echo $_smarty_tpl->tpl_vars['imagenes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
"/></a><br />
          <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['imagenes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <a  class="btn-danger btn-xs" onclick="javascript: return confirmar('&iquest;Esta seguro que desea borrar la imagen?');" href="imagen_borrar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_image'];?>
&amp;back=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;tabla=link"><i class="fa fa-times"></i></a>
                                        </div>
                                        <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
                                        </div>
                                      <?php } else { ?>
                                        <div class="alert alert-danger" role="alert" align="center"><?php echo $_smarty_tpl->tpl_vars['mensaje2']->value;?>
</div>
                                      <?php }?>

                                    </div>
                                    <div class="panel-footer">
                                    <a href="imagen.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Insertar Imagen</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                               <div class="well">
                                    <h4>Información sobre la asignación de sub-enlaces</h4>
                                    <p>En esta sección podemos ver los datos de un enlace específico. Además podemos emparejarlo con un sub-link haciendo clic en Agregar Sub-enlaces.</p>
                                </div>
                            </div>

                        </div>


                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->

            </div>
  		</div>
<!-- InstanceEndEditable -->

            <!-- InstanceBeginEditable name="insertar" --><!-- InstanceEndEditable -->


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
