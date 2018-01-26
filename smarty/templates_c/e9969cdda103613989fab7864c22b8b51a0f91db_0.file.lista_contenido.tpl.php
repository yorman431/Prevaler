<?php
/* Smarty version 3.1.29, created on 2017-10-06 20:30:47
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/contenido/lista_contenido.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59d7cbd71d3bc2_83594163',
  'file_dependency' => 
  array (
    'e9969cdda103613989fab7864c22b8b51a0f91db' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/contenido/lista_contenido.tpl',
      1 => 1492344632,
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
function content_59d7cbd71d3bc2_83594163 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/Applications/MAMP/htdocs/uniformese/smartylib/libs/plugins/modifier.truncate.php';
?>
<!DOCTYPE html>
<html lang="en">
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
                             <select class="form-control input-sm" name="tipo" id="tipo">
                               <option <?php if ($_smarty_tpl->tpl_vars['tipo']->value == "inicio") {?> selected='selected'<?php }?> value="inicio">Inicio</option>
                               <option <?php if ($_smarty_tpl->tpl_vars['tipo']->value == "habitaciones") {?> selected='selected'<?php }?> value="habitaciones">Habitaciones</option>
                               <option <?php if ($_smarty_tpl->tpl_vars['tipo']->value == "servicios") {?> selected='selected'<?php }?> value="servicios">Servicios</option>
                               <option <?php if ($_smarty_tpl->tpl_vars['tipo']->value == "promociones") {?> selected='selected'<?php }?> value="promociones">Promociones</option>
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
                                            <th>Enlace</th>
                                            <th>Subenlace</th>
                                            <th>Nombre</th>
                                            <th>Fecha</th>
                                            <th width="5%"><span class="hidden-xs hidden-sm">Detalle</span></th>
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
                                            <td><?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['enlace_con'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['subenlace_con'];?>
</td>
                                            <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_con'],50);?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fecha_con'];?>
</td>
                                            <td align="center" width="5%"><a title="Details" href="detalle.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_con'];?>
"><i class="fa fa-eye fa-lg"></i></a></td>
                                            <td align="center" width="5%"><a title="Edit" href="editar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_con'];?>
"><i class="fa fa-edit fa-lg"></i></a></td>
                                            <td align="center" width="5%"><a title="Delete" onclick="javascript: return confirmar('Sure you want to delete this item?')" href="eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_con'];?>
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
                                        <tr><td colspan="7" align="left"><a href="insertar.php" class="btn btn-md btn-danger">Insertar Contenido</a></td></tr>
                                </table>
                                </div>
                            </div>

                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Información sobre el Módulo de Contenidos</h4>
                                <p>Sed tincidunt, ante nec congue porta, sapien diam commodo urna, nec gravida diam elit at massa. Proin commodo consequat nulla quis commodo. Suspendisse potenti. Pellentesque at rutrum ex, vitae luctus lorem. Aliquam erat volutpat. Ut a ligula ullamcorper diam pretium viverra nec ut mauris.</p>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
				"targets": [4,5,6]
			} ],
			"order": [[ 0, 'asc' ]],
			 responsive: true,


		} );

	} );


    <?php echo '</script'; ?>
>
    
	<!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
<?php }
}
