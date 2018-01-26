<?php
/* Smarty version 3.1.29, created on 2017-08-21 17:13:36
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/link/lista_link.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_599af8a09fd5c2_50933309',
  'file_dependency' => 
  array (
    'cc80bac60789528e8aff94a3429c3be5022c2c63' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/link/lista_link.tpl',
      1 => 1492344806,
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
function content_599af8a09fd5c2_50933309 ($_smarty_tpl) {
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

        					       <form id="form1" name="form1" method="post" action="" class="form-inline">
                            	<div class="form-group" style="margin-top:-5px;">
                                <label for="tipo" class="hidden-xs"><h4>Filtro:</h4> </label>
                                <select class="form-control input-sm" name="tipo" id="tipo" onchange="javascripts: document.form1.submit();" >
                                  <option <?php if ($_smarty_tpl->tpl_vars['tipo']->value == "normal") {?> selected='selected'<?php }?> value="normal">Enlaces tipo Normal</option>
                                  <option <?php if ($_smarty_tpl->tpl_vars['tipo']->value == "centro") {?> selected='selected'<?php }?> value="centro">Enlaces tipo Centro</option>
                                  <option <?php if ($_smarty_tpl->tpl_vars['tipo']->value == "arriba") {?> selected='selected'<?php }?> value="arriba">Enlaces tipo Arriba</option>
                                  <option <?php if ($_smarty_tpl->tpl_vars['tipo']->value == "pie") {?> selected='selected'<?php }?> value="pie">Enlaces tipo pie</option>
                                </select>
                                </div>
                          </form>
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
                        <div class="dataTable_wrapper">
                        	<div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-admin">
                                <thead>
                                    <tr>
                                        <th width="20%">Nombre</th>
                                        <th width="25%">Etiqueta</th>
                                        <th width="15%">Orden</th>
                                        <th width="10%">&Aacute;rea</th>
                                        <th width="5%"><span class="hidden-xs hidden-sm">Detalles</span></th>
                                        <th width="5%"><span class="hidden-xs hidden-sm">Editar</span></th>
                                        <th width="5%"><span class="hidden-xs hidden-sm">Eliminar</span></th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listado']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_cat'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['etiqueta_cat'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['prioridad_cat'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tipo_cat'];?>
</td>
                                        <td align="center" width="5%"><a title="Detalles" href="detalle.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'];?>
"><i class="fa fa-eye fa-lg"></i></a></td>
                                        <td align="center" width="5%"><a title="Editar" href="editar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'];?>
"><i class="fa fa-edit fa-lg"></i></a></td>
                                        <td align="center" width="5%"><a title="Eliminar" onclick="javascript: return confirmar('Sure you want to delete this item?')" href="eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'];?>
"><i class="fa fa-trash-o fa-lg"></i></a></td>
                                    </tr>
                                <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>

                                </tbody>
                                <tfoot>
                                    <tr><td colspan="7" align="left"><a href="insertar.php" class="btn btn-md btn-danger"><i class="fa fa-plus-square" aria-hidden="true"></i> Agregar Enlace</a> <a href="sublink_lista.php" class="btn btn-md btn-danger"><i class="fa fa-list-ul" aria-hidden="true"></i> Sub Enlace</a> </td></tr>
                                </tfoot>
                            </table>
                            </div>
                        </div>

                        <!-- /.table-responsive -->
                        <div class="well">
                            <h4>Informaci&oacute;n adicional acerca de m&oacute;dulo Enlaces</h4>
                            <p>El m&oacute;dulo enlaces nos permite agregar, editar y eliminar secciones que tiene nuestro sitio web. Es aquí donde definimos el número de secciones informativas que llevará nuestro sitio web. Es importante que los enlaces tengan una etiqueta descriptiva; adicional a esto, una descripci&oacute;n y sus respectivas palabras clave son importantes para el posicionamiento en buscadores Web SEO. </p>
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
 src="/bower_components/datatables/media/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js"><?php echo '</script'; ?>
>

    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>
	<!-- InstanceBeginEditable name="pie" -->
	

    <?php echo '<script'; ?>
>
		$(document).ready(function() {
		var t = $('#dataTables-admin').DataTable( {
			"columnDefs": [ {
				"searchable": false,
				"orderable": false,
				"targets": [3,4,5,6]
			} ],
			"order": [[ 0, 'asc' ]],
			 "responsive": true
		} );

	} );
    <?php echo '</script'; ?>
>
    
	<!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
<?php }
}
