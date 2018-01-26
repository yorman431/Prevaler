<?php
/* Smarty version 3.1.29, created on 2017-10-19 21:54:08
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/admin/link/formulario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59e902e0338140_46727918',
  'file_dependency' => 
  array (
    '24410e881f7a04c39c5ca162000c01cdb162f3a2' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/admin/link/formulario.tpl',
      1 => 1492185950,
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
function content_59e902e0338140_46727918 ($_smarty_tpl) {
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
                                    <?php if ($_smarty_tpl->tpl_vars['mensaje']->value != '') {
echo $_smarty_tpl->tpl_vars['mensaje']->value;
}?>
                                    <form action="" method="post" name="form1" class="normal" id="form1" onsubmit="MM_validateForm('nombre','','R');return document.MM_returnValue">
                                          <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input  onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del enlace*" value="<?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>
">
                                          </div>
                                          <div class="form-group">
                                          <label for="etiqueta">Etiqueta</label>
                                          <input  onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="etiqueta" id="etiqueta" placeholder="Etiqueta del enlace*" value="<?php echo $_smarty_tpl->tpl_vars['etiqueta']->value;?>
">
                                          </div>

                                          <div class="form-group">
                                          <label for="tipo">&Aacute;rea</label>
                                          <select class="form-control" name="tipo" id="tipo">
                                               <option <?php if ($_smarty_tpl->tpl_vars['tipo']->value == "normal") {?> selected='selected'<?php }?> value="normal">Normal</option>
                                              <option <?php if ($_smarty_tpl->tpl_vars['tipo']->value == "centro") {?> selected='selected'<?php }?> value="centro">Center</option>
                                              <option <?php if ($_smarty_tpl->tpl_vars['tipo']->value == "arriba") {?> selected='selected'<?php }?> value="arriba">Top</option>
                                              <option <?php if ($_smarty_tpl->tpl_vars['tipo']->value == "pie") {?> selected='selected'<?php }?> value="pie">Footer</option>

                                            </select>
                                          </div>

                                          <div class="form-group">
                                          <label for="descripcion">Descripci&oacute;n</label>
                                          <textarea  type="text" class="form-control" name="descripcion" id="descripcion" placeholder="descripción larga para el SEO"><?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
</textarea>
                                          </div>

                                          <div class="form-group">
                                          <label for="claves">Palabras Claves</label>
                                          <input onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="claves" id="claves" placeholder="Palabras claves para SEO ej: glass, auto" value="<?php echo $_smarty_tpl->tpl_vars['claves']->value;?>
">
                                          </div>

                                          <div class="form-group">
                                          <label for="prioridad">Orden</label>
                                          <input onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="prioridad" id="prioridad" placeholder="Posición del enlace*" value="<?php echo $_smarty_tpl->tpl_vars['prioridad']->value;?>
">
                                          </div>

                                          <div class="form-group">
                                          <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>
                                          <input onclick="javascript: return confirmar('Are you sure you want to save?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                                          <input onclick="javascript: location.href='/admin/link/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos obligatorios
                                          </div>
                                    </form>
                                    </div>
                            <div class="col-lg-6 col-md-6">
                            <div class="well">
                                <h4>Información adicional sobre la creación de enlaces</h4>
                                <p>Para crear enlaces es importante tener en cuenta que "Nombre" es el nombre que se publicará en el enlace de la web, mientras que la sección "Etiqueta" aparecerá en el título de la página.

"Área" es la opción para determinar la ubicaci&oacute;n del enlace en las diferentes secciones del  sitio web. Fácilmente padr&aacute;  identificar el lugar dondo ser&aacute; impreso el enlace por su nombre en la entrada de selección.

Es muy importante que tome unos minutos para insertar la "Descripción" y las "Palabras clave", estos dos influencian fuertemente lo que se refiere a la indexación de SEO y Google.</p>
                            </div>
                            </div></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
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
