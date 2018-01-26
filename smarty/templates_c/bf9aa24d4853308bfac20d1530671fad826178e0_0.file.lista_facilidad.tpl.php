<?php
/* Smarty version 3.1.29, created on 2018-01-12 18:01:54
  from "D:\Websites\Prevaler\smarty\templates\admin\facilidad\lista_facilidad.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a58f812b17887_38423619',
  'file_dependency' => 
  array (
    'bf9aa24d4853308bfac20d1530671fad826178e0' => 
    array (
      0 => 'D:\\Websites\\Prevaler\\smarty\\templates\\admin\\facilidad\\lista_facilidad.tpl',
      1 => 1513186766,
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
function content_5a58f812b17887_38423619 ($_smarty_tpl) {
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
                      <div class="dataTable_wrapper">
                        <div class="table-responsive">
                          <table class="table table-striped table-bordered table-hover" id="dataTables-admin">
                              <thead>
                                  <tr>
                                      <th>Nombre</th>
                                      <th>Etiqueta</th>
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
                                      <td><?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_fac'];?>
</td>
                                      <td><?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['etiqueta_fac'];?>
</td>
                                      <td align="center" width="5%"><a title="Detalles" href="detalle.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_fac'];?>
"><i class="fa fa-eye fa-lg"></i></a></td>
                                      <td align="center" width="5%"><a title="Editar" href="editar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_fac'];?>
"><i class="fa fa-edit fa-lg"></i></a></td>
                                      <td align="center" width="5%"><a title="Eliminar" onclick="javascript: return confirmar('¿Esta seguro que desea eliminar este registro?')" href="eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_fac'];?>
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
                                  <tr><td colspan="7" align="left"><a href="insertar.php" class="btn btn-md btn-danger">Insertar Especialidad</a></td></tr>
                          </table>
                          </div>
                      </div>

                      <!-- /.table-responsive -->
                      <div class="well">
                          <h4>Información sobre el Módulo de Especialidades</h4>
                          <p>En este módulo se insertan, modifican y eliminan las Especialidades de las Sedes. Para asignar una especialidad a una sede, primero debe crear la especialidad médica y luego crear o editar la sede a la que va a ser asignada; tambien es necesario que antes de asignar una especialidad a una sede se deba asignar una imagen, de lo contrario, la especialidad no podrá ser asignada. Se recomienda no eliminar una especialidad, basta con desmarcarla de las sedes en las que fueron asignadas en la sección editar del módulo de sede.</p>
                      </div>
                  </div>
                  <!-- /.panel-body -->
              </div>
              <!-- /.panel -->
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
