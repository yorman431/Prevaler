<?php
/* Smarty version 3.1.29, created on 2017-08-21 21:11:50
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/banner/formulario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_599b3076bbfee7_94141731',
  'file_dependency' => 
  array (
    '4d94a8cee6ca9e51fdfe4ad6ede0234a9ed70aca' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/banner/formulario.tpl',
      1 => 1503342197,
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
function content_599b3076bbfee7_94141731 ($_smarty_tpl) {
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
                                    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="MM_validateForm('etiqueta','','R');return document.MM_returnValue">
                                          <div class="form-group">
                                          <label for="efecto">Efecto</label>
                                          <select class="form-control name="efecto" id="efecto">
                                                <option value="showBars" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "showBars") {?> selected='selected' <?php }?>>Show Bars</option>
                                                <option value="cube" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "cube") {?> selected='selected' <?php }?>>Cube</option>
                                                <option value="showBarsRandom" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "showBarsRandom") {?> selected='selected' <?php }?>>Show Bars Random</option>
                                                <option value="tube" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "tube") {?> selected='selected' <?php }?>>Tube</option>
                                                <option value="cubeStop" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "cubeStop") {?> selected='selected' <?php }?>>Cube Stop</option>
                                                <option value="cubeHide" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "cubeHide") {?> selected='selected' <?php }?>>Cube Hide</option>
                                                <option value="cubeSize" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "cubeSize") {?> selected='selected' <?php }?>>Cube Size</option>
                                                <option value="horizontal" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "horizontal") {?> selected='selected' <?php }?>>Horizontal</option>
                                                <option value="cubeRandom" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "cubeRandom") {?> selected='selected' <?php }?>>Cube Random</option>
                                                <option value="fade" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "fade") {?> selected='selected' <?php }?>>Fade</option>
                                                <option value="fadeFour" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "fadeFour") {?> selected='selected' <?php }?>>Fade Four</option>
                                                <option value="paralell" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "paralell") {?> selected='selected' <?php }?>>Paralell</option>
                                                <option value="blind" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "blind") {?> selected='selected' <?php }?>>Blind</option>
                                                <option value="blindHeight" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "blindHeight") {?> selected='selected' <?php }?>>Blind Height</option>
                                                <option value="directionLeft" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "directionLeft") {?> selected='selected' <?php }?>>Direction Left</option>
                                                <option value="directionTop" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "directionTop") {?> selected='selected' <?php }?>>Direction Top</option>
                                                <option value="directionBottom" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "directionBottom") {?> selected='selected' <?php }?>>Direction Bottom</option>
                                                <option value="directionRight" <?php if ($_smarty_tpl->tpl_vars['efecto']->value == "directionRight") {?> selected='selected' <?php }?>>Direction Right</option>
                                           </select>
                                          </div>
                                          <div class="form-group">
                                          <label for="vinculo">Etiqueta</label>
                                              <input class="form-control" name="etiqueta" type="text" id="etiqueta" value="<?php echo $_smarty_tpl->tpl_vars['etiqueta']->value;?>
" size="71" maxlength="100" />
                                          </div>
                                          <div class="form-group">
                                          <label for="vinculo">Vinculo</label>
                                              <input class="form-control" name="vinculo" type="text" id="vinculo" value="<?php echo $_smarty_tpl->tpl_vars['vinculo']->value;?>
" size="71" maxlength="100" />
                                          </div>
                                          <div class="form-group">
                                            <label for="imagen">Imagen</label>
                                             <input class="btn btn-default btn-file" type="file" name="documento" id="documento"/>

                                          </div>
                                          <div class="form-group">
                                              <span class="alert alert-info">(512 Kb m&aacute;x)</span>
                                          </div>
                                          <div class="form-group">
                                          <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>
                                          <input onclick="javascript: return confirmar('esta seguro que desea guardar?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                                          <input onclick="javascript: location.href='/admin/banner/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos obligatorios
                                          </div>
                                    </form>
                                    </div>
                            <div class="col-lg-6 col-md-6">
                            <div class="well">
                                <h4>Información adicional sobre la creación de Banner</h4>
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
