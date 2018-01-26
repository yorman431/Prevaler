<?php
/* Smarty version 3.1.29, created on 2017-12-20 17:49:23
  from "D:\Websites\Prevaler\smarty\templates\admin\link\formulario2.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a3aa2a343ba24_01233177',
  'file_dependency' => 
  array (
    '769071b3510a491a282a1f9d0ab4c93ecf48714a' => 
    array (
      0 => 'D:\\Websites\\Prevaler\\smarty\\templates\\admin\\link\\formulario2.tpl',
      1 => 1492205062,
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
function content_5a3aa2a343ba24_01233177 ($_smarty_tpl) {
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
                                    <div class="col-lg-6 col-md-6">
                                    <?php if ($_smarty_tpl->tpl_vars['mensaje']->value != '') {?><div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div><?php }?>
                                    <form action="" method="post" name="form1" class="normal" id="form1" onsubmit="MM_validateForm('nombre','','R');return document.MM_returnValue">
                                          <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input  onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de sub-enlace*" value="<?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>
">
                                          </div>
                                          <div class="form-group">
                                          <label for="etiqueta">Etiqueta</label>
                                          <input  onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="etiqueta" id="etiqueta" placeholder="Etiqueta de sub-enlace*" value="<?php echo $_smarty_tpl->tpl_vars['etiqueta']->value;?>
">
                                          </div>
                                          <div class="form-group">
                                          <label for="prioridad">Orden</label>
                                          <input onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="prioridad" id="prioridad" placeholder="Posición del sub-enlace*" value="<?php echo $_smarty_tpl->tpl_vars['prioridad']->value;?>
">
                                          </div>

                                          <div class="form-group">
                                          <input onclick="javascript: return confirmar('Esta seguro que desea guardar?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                                          <input onclick="javascript: location.href='/admin/link/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos requeridos
                                          </div>
                                    </form>
                                    </div>
                            <div class="col-lg-6 col-md-6">
                            <div class="well">
                                <h4>Información adicional sobre la creaci&oacute;n de subenlaces</h4>
                                <p>Para crear Subenlaces es importante tener en cuenta que "Nombre" es el nombre que se publicará en el enlace de la web, mientras que la sección "Etiqueta" aparecerá en el título de la página.

"Área" es la opción donde el botón y dependerá de la disposición del sitio web se desea. Fácilmente se puede identificar por su nombre en la entrada de selección.

Es muy importante que tome unos minutos para insertar la "Descripción" y las "Palabras clave", estos dos influencian fuertemente lo que se refiere a la indexación de SEO y Google.</p>
                            </div>
                            </div></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
    <!-- InstanceEndEditable -->

            <!-- InstanceBeginEditable name="insertar" -->&nbsp;<!-- InstanceEndEditable -->


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
