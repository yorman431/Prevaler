<?php
/* Smarty version 3.1.29, created on 2017-11-07 19:42:10
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/admin/galeria/lista_galeria.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a01fe82a299f7_60760277',
  'file_dependency' => 
  array (
    'aa97e75f524a58a3cf3dbae89de264fc961bcd79' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/admin/galeria/lista_galeria.tpl',
      1 => 1492185758,
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
function content_5a01fe82a299f7_60760277 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/Applications/MAMP/htdocs/delle_cucine/smartylib/libs/plugins/modifier.truncate.php';
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
                                        <th width="20%">T&iacute;tulo</th>
                                        <th width="25%">Descrici&oacute;n</th>
                                        <th width="15%">Fecha</th>
                                        <th width="10%">Imagen</th>
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
                                        <td><?php echo mb_convert_encoding(htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_gal'],60), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                                        <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descripcion_gal'],50);?>
</td>
                                        <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fecha_gal'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fotos'];?>
</td>
                                        <td align="center" width="5%"><a title="Detalles" href="detalle.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_gal'];?>
"><i class="fa fa-eye fa-lg"></i></a></td>
                                        <td align="center" width="5%"><a title="Editar" href="editar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_gal'];?>
"><i class="fa fa-edit fa-lg"></i></a></td>
                                        <td align="center" width="5%"><a title="Eliminar" onclick="javascript: return confirmar('Seguro que desea eliminar esta galeria')" href="eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_gal'];?>
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
                                    <tr><td colspan="7" align="left"><a href="insertar.php" class="btn btn-md btn-danger"><i class="fa fa-plus-square" aria-hidden="true"></i> Agregar Galeria</a></td></tr>
                                </tfoot>
                            </table>
                            </div>
                        </div>

                        <!-- /.table-responsive -->
                        <div class="well">
                            <h4>Informaci&oacute;n adicional acerca de m&oacute;dulo Galer&iacute;a</h4>
                            <p>El m&oacute;dulo Galer&iacute;a nos permite agregar, editar y eliminar las fotograf&iacute;as del &aacute;rea de Galer&iacute;a que tiene nuestro sitio web. Es aquí donde definimos el número de secciones informativas que llevarán nuestro sitio web. Es importante que los enlaces tienen una etiqueta descriptiva y tener una descripción y sus respectivas palabras clave son importantes para el posicionamiento en buscadores Web SEO. </p>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->

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
