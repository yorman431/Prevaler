<?php
/* Smarty version 3.1.29, created on 2017-08-22 20:42:48
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/publicidad/formulario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_599c7b281edcd8_33138365',
  'file_dependency' => 
  array (
    '46f855eea041297e3f7592a4e2b0304ca7e0089c' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/publicidad/formulario.tpl',
      1 => 1492196688,
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
function content_599c7b281edcd8_33138365 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layouts/head2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<link rel="stylesheet" type="text/css" media="all" href="/calendario/calendar-blue.css" title="blue" />
<?php echo '<script'; ?>
 type="text/javascript" src="/calendario/calendar.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/calendario/lang/calendar-en.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/calendario/calendar-setup.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/ckfinder/ckfinder.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	window.onload = function()
	{
		CKEDITOR.replace( 'contenido',
			{
		toolbar :
			[
            		['Font','FontSize','TextColor','RemoveFormat','-','Table','Image','Source','Templates' ],'/',

            		['Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link','Unlink'],['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],['Maximize', 'ShowBlocks']

        		]

    		}
		);
	};
<?php echo '</script'; ?>
>


<!-- InstanceEndEditable -->
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
																	<form action="" method="post" name="form1" id="form1" onsubmit="MM_validateForm('nombre','','R','f_date_c','','R');return document.MM_returnValue">
																				<div class="form-group">
																				<label for="nombre">Nombre</label>
																				<input onkeypress="javascripts: return validarletrasnum(event);" name="nombre" type="text" class="form-control" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>
"  maxlength="100" />
																				</div>
																				<div class="form-group">
																				<label for="fecha">Fecha</label>
																				<!--<div class='input-group date' id='datetimepicker'>-->
																				<input name="fecha" type="text" class="form-control"  placeholder="xx/xx/xxxx" id="fecha" value="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
"/>
																				<!--</div>-->
																				
																				
																					<!--    <?php echo '<script'; ?>
 type="text/javascript">
																									$(function () {
																									$('#datetimepicker').datetimepicker({
																									format: 'DD/MM/YYYY'
																									});
																							});
																							<?php echo '</script'; ?>
>-->
																			 

																				</div>
																				<div class="form-group">
																				<label for="subenlace">Descripci&oacute;n</label>
																				<textarea name="descripcion" cols="70" rows="6" class="form-control" id="contenido"  wrap="physical"><?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
</textarea>
																				</div>
																				<div class="form-group">
																				<a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>
																				<input name="envio" class="btn btn-md btn-success" type="submit" class="componentes" id="button2" onclick="javascript: return validargaleria('¿Esta seguro que desea guardar?');" value="Guardar" />
																				<input onclick="javascript: location.href='/admin/publicidad/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" />
																				</div>
																	</form>
																	</div>
													<div class="col-lg-6 col-md-6">
													<div class="well">
															<h4>Información adicional sobre la creación de Publicidad</h4>
															<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>                            </div>
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
