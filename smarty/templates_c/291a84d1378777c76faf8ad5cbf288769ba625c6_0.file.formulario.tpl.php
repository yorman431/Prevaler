<?php
/* Smarty version 3.1.29, created on 2017-08-22 20:56:52
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/usuario/formulario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_599c7e74533670_73088628',
  'file_dependency' => 
  array (
    '291a84d1378777c76faf8ad5cbf288769ba625c6' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/usuario/formulario.tpl',
      1 => 1503428207,
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
function content_599c7e74533670_73088628 ($_smarty_tpl) {
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
                                   <form action="" method="post" name="form1" id="form1" onsubmit="MM_validateForm('nombre','','R','apellido','','R','correo','','RisEmail','login','','R','clave','','R','nivel','','RinRange1:4');return document.MM_returnValue">
                                    <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input name="nombre" type="text" class="form-control"  placeholder="Nombre del usuario" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>
"/>
                                    </div>
                                     <div class="form-group">
                                          <label for="apellido">Apellido</label>
                                          <input name="apellido" type="text" class="form-control" placeholder="Apellido del usuario" id="apellido" onkeypress="javascripts: return validarletras(event);" value="<?php echo $_smarty_tpl->tpl_vars['apellidos']->value;?>
" size="55" maxlength="20" />
                                     </div>
                                     <div class="form-group">
                                          <label for="correo">Correo</label>
                                          <input name="correo" type="text" class="form-control" placeholder="xxxx@xxx.com" id="correo" value="<?php echo $_smarty_tpl->tpl_vars['correo']->value;?>
" size="55" maxlength="50" />
                                     </div>
                                     <div class="form-group">
                                         <label for="login">Login</label>
                                         <input name="login" type="text" class="form-control" placeholder="Nombre de acceso" id="login" onkeypress="javascripts: return validarletrasnum(event);" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
" size="55" maxlength="20" />
                                     </div>
                                     <div class="form-group">
                                          <label for="clave">Clave</label>
                                          <input name="clave" type="password" class="form-control" id="clave" size="55" maxlength="20" />
                                     </div>
                                     <div class="form-group">
                                     <label for="confirmar">Confirmar Clave</label>
                                     <input name="confirmar" type="password" class="form-control" id="confirmar" size="55" maxlength="20" />
                                     </div>
                                     <div class="form-group">
                                     <label for="confirmar">Nivel</label>
                                     <input name="nivel" type="text" class="form-control" id="nivel" onkeypress="javascripts: return validarnum(event);" value="<?php echo $_smarty_tpl->tpl_vars['nivel']->value;?>
" size="55" maxlength="1" />
                                     </div>
                                     <div class="form-group">
                                        <input name="envio" type="submit" class="btn btn-success" id="button3" onclick="javascript: return confirmar('&iquest;Est&aacute; seguro que desea guardar?');" value="Guardar" />
                                        <input name="button" type="button" class="btn btn-default" id="button4" onclick="javascript: location.href='/admin/usuario/'" value="Cancelar" />
                                     </div>
                                 </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
