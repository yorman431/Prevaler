<?php
/* Smarty version 3.1.29, created on 2017-11-07 17:49:34
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/admin/contenido/formulario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a01e41eb088e2_40042569',
  'file_dependency' => 
  array (
    '407ff10144bb08d688db251f08e3ff52ef8cb8b9' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/admin/contenido/formulario.tpl',
      1 => 1503945736,
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
function content_5a01e41eb088e2_40042569 ($_smarty_tpl) {
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
		var editor = CKEDITOR.replace( 'contenido',
			{
		toolbar :
			[
            		['Font','FontSize','TextColor','RemoveFormat','-','Table','Image','Source','Templates' ],'/',

            		['Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link','Unlink'],['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],['Maximize', 'ShowBlocks']

        		]

    		}
		);
		CKFinder.setupCKEditor( editor, '../../ckfinder/' ) ;
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
                                    <form action="" method="post" name="form1" id="form1" onsubmit="MM_validateForm('nombre','','R','f_date_c','','R');return document.MM_returnValue">
                                          <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input name="nombre" type="text" class="form-control"  placeholder="T??tulo del contenido" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>
"/>
                                          </div>
																					<div class="form-group">
                                          <label for="tipo">Tipo</label>
																					<select name="tipo" class="form-control"  id="tipo">
																						  <option  <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'inicio') {?>selected='selected'<?php }?> value="inicio">Inicio</option>
																						  <option  <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'nosotros') {?>selected='selected'<?php }?>  value="nosotros">Nosotros</option>
																							<option  <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'productos') {?>selected='selected'<?php }?>  value="productos">Productos</option>
																							<option  <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'noticias') {?>selected='selected'<?php }?>  value="noticias">Noticias</option>
																							<option  <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'galeria') {?>selected='selected'<?php }?>  value="galeria">Galeria</option>
                                              <option  <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'contacto') {?>selected='selected'<?php }?>  value="contacto">Contacto</option>
                                          </select>
                                          </div>
                                          <div class="form-group">
                                          <label for="enlace">Enlace</label>
                                          <select name="enlace" class="form-control"  id="enlace" onchange="javascripts: document.form1.submit();">
                                            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listado']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                            <option <?php if ($_smarty_tpl->tpl_vars['enlace']->value == $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_cat'] || $_smarty_tpl->tpl_vars['enlace']->value == $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat']) {?> selected='selected'<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_cat'];?>
</option>
                                            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                          </select>
                                          </div>
                                          <div class="form-group">
                                          <label for="subenlace">Sub-enlace</label>
                                          <select name="subenlace" class="form-control" id="subenlace">
                                            <option value="1">None (Principal)</option>
                                            <?php
$__section_j_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__smarty_section_j'] : false;
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listado2']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total != 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['subenlace']->value == $_smarty_tpl->tpl_vars['listado2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['nombre_sub']) {?>selected='selected'<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['listado2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id_sub'];?>
"><?php echo $_smarty_tpl->tpl_vars['listado2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['nombre_sub'];?>
</option>
                                            <?php
}
}
if ($__section_j_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_1_saved;
}
?>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                          <label for="fecha">Fecha</label>
                                          <!--<div class='input-group date' id='datetimepicker'>-->
                                          <input name="fecha" type="text" class="form-control"  placeholder="xx/xx/xxxx" id="fecha" value="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
"/>
                                          <!--</div>-->
                                          <!--<span class="input-group-addon" style="background-color:transparent; border:transparent; color:#fff;">
                                               <span class="glyphicon glyphicon-calendar"></span>
                                          </span>-->
                                          
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
                                          <label for="orden">Orden</label>
                                          <input onkeypress="javascript: return validarletrasnum(event);" name="prioridad" type="text" class="form-control" class="normalContenido" id="prioridad" value="<?php echo $_smarty_tpl->tpl_vars['prioridad']->value;?>
"/>
                                          </div>

                                          <div class="form-group">
                                          <label for="contenido">Contenido</label>
                                          <textarea name="contenido" cols="70" rows="6" class="normalContenido" id="contenido"  wrap="physical"><?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>
</textarea>
                                          </div>

                                          <div class="form-group">
                                          <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>
                                          <input onclick="javascript: return confirmar('esta seguro que desea guardar?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                                          <input onclick="javascript: location.href='/admin/contenido/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos obligatorios
                                          </div>
                                    </form>
                                    </div>
                            <div class="col-lg-6 col-md-6">
                            <div class="well">
                                <h4>Informaci??n adicional sobre la creaci??n de Contenido</h4>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>                            </div>
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
    <!--<?php echo '<script'; ?>
 type="text/javascript" src="/moment-develop/moment.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/datetimepicker/src/js/bootstrap-datetimepicker.js"><?php echo '</script'; ?>
>-->
    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>
	<!-- InstanceBeginEditable name="pie" --><!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
<?php }
}
