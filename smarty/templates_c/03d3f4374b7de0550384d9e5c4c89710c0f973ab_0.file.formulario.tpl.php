<?php
/* Smarty version 3.1.29, created on 2017-10-23 22:02:50
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/admin/producto/formulario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ee4aea222313_48273788',
  'file_dependency' => 
  array (
    '03d3f4374b7de0550384d9e5c4c89710c0f973ab' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/admin/producto/formulario.tpl',
      1 => 1508787545,
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
function content_59ee4aea222313_48273788 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layouts/head2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<link rel="stylesheet" href="/datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="/moment-develop/moment.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/datetimepicker/src/js/bootstrap-datetimepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/localstorage.js"><?php echo '</script'; ?>
>

<!-- InstanceEndEditable -->
</head>

<body <?php if ($_smarty_tpl->tpl_vars['ultimo']->value == true) {?> onload="javascript:cargar_ultimo();"<?php }?>">

    <div id="wrapper">
       <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layouts/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><?php echo $_smarty_tpl->tpl_vars['accion']->value;?>

                      <div class="pull-right">

                      </div>
                    </h3>

                </div>
                <!-- /.col-lg-12 -->
            </div>

      <!-- InstanceBeginEditable name="contenido" -->

    <!-- InstanceEndEditable -->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                              <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                    <?php if ($_smarty_tpl->tpl_vars['mensaje']->value != '') {
echo $_smarty_tpl->tpl_vars['mensaje']->value;
}?>
                                    <form action="" method="post" name="form1" id="form1" onsubmit="javascript:guardar_ultimo();">
                                          <div class="form-group">
                                          <label for="nombre">Código</label>
                                          <input name="codigo" type="text" class="form-control"  placeholder="Código del Producto" id="codigo" value="<?php echo $_smarty_tpl->tpl_vars['codigo']->value;?>
"/>
                                          </div>
                                          <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input name="nombre" type="text" class="form-control"  placeholder="Título del Producto" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>
"/>
                                          </div>
                                    
                                          <div class="form-group">
                                          <label for="enlace">Prioridad</label>
                                          <input name="prioridad" type="text" class="form-control" id="prioridad" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prioridad']->value, ENT_QUOTES, 'UTF-8', true);?>
" size="71" maxlength="4" />
                                          </div>

                                          <div class="form-group">
                                          <label for="contenido">Descripci&oacute;n</label>
                                          <textarea name="descripcion" cols="70" rows="6" class="form-control" id="descripcion"  wrap="physical"><?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
</textarea>
                                          </div>

                                          <div class="form-group">
                                          <a href="/admin/producto/index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>
                                          <input onclick="javascript: return confirmar('esta seguro que desea guardar?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                                          <input onclick="javascript: location.href='/admin/producto/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos obligatorios
                                          </div>
                                    </form>
                                    </div>
                            <div class="col-lg-6 col-md-6">
                            <div class="well">
                                <h4>Información adicional sobre la creación de Productos</h4>
                                <p>"Llene los campos con la información perteneciente al nuevo producto a ingresar. En el caso de editar, seleccione nuevamente la categoría, ya que se cambiará el valor insertado anteriormente por el perteneciente a la primera categoría que presenta el renglon de opciones."</p>                           
                            </div>
                            </div></div>
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
    
  <!-- InstanceBeginEditable name="pie" --><!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
<?php }
}
