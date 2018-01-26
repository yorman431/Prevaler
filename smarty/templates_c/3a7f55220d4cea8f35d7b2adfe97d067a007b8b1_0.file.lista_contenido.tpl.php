<?php
/* Smarty version 3.1.29, created on 2017-04-26 18:18:46
  from "/Applications/MAMP/htdocs/preolca/smartylib/templates/admin/contenido/lista_contenido.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5900c866318852_54116511',
  'file_dependency' => 
  array (
    '3a7f55220d4cea8f35d7b2adfe97d067a007b8b1' => 
    array (
      0 => '/Applications/MAMP/htdocs/preolca/smartylib/templates/admin/contenido/lista_contenido.tpl',
      1 => 1492683495,
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
function content_5900c866318852_54116511 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/Applications/MAMP/htdocs/preolca/smartylib/libs/plugins/modifier.truncate.php';
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
            <!-- Filtros  -->
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
            <div class="dataTable_wrapper">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-admin">
                  <thead>
                    <tr>
                      <th>Enlace</th>
                      <th>Subenlace</th>
                      <th>Nombre</th>
                      <th>Fecha</th>
                      <th>Ver</th>
                      <th>Editar</th>
                      <th>Borrar</th>

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
                      <td align="center" width="5%"><a title="Ver" href="detalle.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_con'];?>
"><i class="fa fa-eye fa-lg"></i></a></td>
                      <td align="center" width="5%"><a title="Editar" href="editar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_con'];?>
"><i class="fa fa-edit fa-lg"></i></a></td>
                      <td align="center" width="5%"><a title="Eliminar" onclick="javascript: return confirmar('&iquest;Seguro desea eliminar este registro?')" href="eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_con'];?>
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
                  <tr>
                    <td colspan="7" align="left"><a href="insertar.php" class="btn btn-md btn-primary">Insertar Contenido</a></td>
                  </tr>
                </table>
              </div>
            </div>

            <!-- /.table-responsive -->
            <div class="well">
              <h4>Información sobre el Módulo de Contenidos</h4>
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


<?php echo '<script'; ?>
>
  $(document).ready(function() {
    var t = $('#dataTables-admin').DataTable({
      "columnDefs": [{
        "searchable": false,
        "orderable": false,
        "targets": [4, 5, 6]
      }],
      "order": [
        [0, 'asc']
      ],
      responsive: true,
      "language": {
        "url": "/bower_components/Spanish.json",
        "search": "buscar: "
      },
    });
  });
<?php echo '</script'; ?>
>

<?php }
}
