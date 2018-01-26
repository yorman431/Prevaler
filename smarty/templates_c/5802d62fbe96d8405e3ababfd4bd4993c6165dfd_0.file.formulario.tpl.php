<?php
/* Smarty version 3.1.29, created on 2017-12-19 17:46:16
  from "/Applications/MAMP/htdocs/prevaler/smartylib/templates/admin/hotel/formulario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a394258a77ae8_80978951',
  'file_dependency' => 
  array (
    '5802d62fbe96d8405e3ababfd4bd4993c6165dfd' => 
    array (
      0 => '/Applications/MAMP/htdocs/prevaler/smartylib/templates/admin/hotel/formulario.tpl',
      1 => 1513110444,
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
function content_5a394258a77ae8_80978951 ($_smarty_tpl) {
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

    var editor2 = CKEDITOR.replace( 'condiciones',
      {
    toolbar :
      [
                ['Font','FontSize','TextColor','RemoveFormat','-','Table','Image','Source','Templates' ],'/',

                ['Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link','Unlink'],['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],['Maximize', 'ShowBlocks']

            ]

        }
    );
    CKFinder.setupCKEditor( editor2, '../../ckfinder/' ) ;
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
                                          <label for="nombre">Estado</label>
                                          <input name="estado" type="text" class="form-control"  placeholder="Estado de la Sede" id="estado" value="<?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
" required="required" />
                                          </div>

                                          <div class="form-group">
                                          <label for="ciudad">Ciudad</label>
                                          <input name="ciudad" type="text" class="form-control"  placeholder="Ciudad de la Sede" id="ciudad" value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value;?>
" required="required"/>
                                          </div>

                                          <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input name="nombre" type="text" class="form-control"  placeholder="Nombre de la Sede" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>
" required="required"/>
                                          </div>

                                          <div class="form-group">
                                          <label for="telefono">Teléfono</label>
                                          <input name="telefono" type="text" class="form-control" placeholder="Teléfonos de Contacto" id="telefono" value="<?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>
" required="required"/>
                                          </div>


                                          <div class="form-group">
                                          <label for="orden">Prioridad</label>
                                          <input onkeypress="javascript: return validarletrasnum(event);" name="prioridad" type="number" class="form-control" class="normalContenido" id="prioridad" value="<?php echo $_smarty_tpl->tpl_vars['prioridad']->value;?>
" required="required"/>
                                          </div>

                                          <div class="form-group">
                                          <label for="latitud">Latitud</label>
                                          <input name="latitud" type="number" step="any" class="form-control" id="latitud" value="<?php echo $_smarty_tpl->tpl_vars['latitud']->value;?>
" required="required"/>
                                          </div>

                                          <div class="form-group">
                                          <label for="longitud">Longitud</label>
                                          <input name="longitud" type="number" step="any" class="form-control" id="longitud" value="<?php echo $_smarty_tpl->tpl_vars['longitud']->value;?>
" required="required"/>
                                          </div>

                                          <div class="form-group">
                                          <label for="ubicacion">Ubicación</label>
                                          <input name="ubicacion" type="text" class="form-control"  placeholder="Ubicación de la Sede" id="ubicacion" value="<?php echo $_smarty_tpl->tpl_vars['ubicacion']->value;?>
" required="required"/>
                                          </div>

                                          <div class="form-group">
                                          <label for="contenido">Descripción</label>
                                          <textarea name="contenido" cols="70" rows="6" class="normalContenido" id="contenido"  wrap="physical" required="required"><?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>
</textarea>
                                          </div>

                                          <div class="form-group">
                                          <label for="condiciones">Condiciones</label>
                                          <textarea name="condiciones" cols="70" rows="6" class="normalContenido" id="condiciones" wrap="physical" required="required"><?php echo $_smarty_tpl->tpl_vars['condiciones']->value;?>
</textarea>
                                          </div>

                                          <div class="form-group">
                                          <label for="claves">Claves</label>
                                          <input name="claves" type="text" class="form-control"  placeholder="Claves para el SEO" id="claves" value="<?php echo $_smarty_tpl->tpl_vars['claves']->value;?>
" required="required"/>
                                          </div>

                                          <div class="form-group">
                                          <label for="principal">Principal</label>
                                          <select name="principal" id="principal">
                                            <option <?php if ($_smarty_tpl->tpl_vars['principal']->value == "si") {?> selected='selected'<?php }?> value="si">S&iacute;</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['principal']->value == "no") {?> selected='selected'<?php }?> value="no">No</option>
                                          </select>
                                          </div>

                                          <div class="form-group">
                                          <label for="fecha">Fecha</label>
                                          <!--<div class='input-group date' id='datetimepicker'>-->
                                          <input name="fecha" type="text" class="form-control"  placeholder="xx/xx/xxxx" id="fecha" value="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
" required="required"/>

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

                                          <div class="form-group group-speciality">
                                            <label for="especialidad">Especialidades</label>
                                            <div>
                                              <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['especialidad']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                            <div class="especialidad_admin">
                                              <div class="nombre_especialidad">
                                                <input type="checkbox" name="especialidad<?php echo $_smarty_tpl->tpl_vars['especialidad']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_fac'];?>
" id="especialidad<?php echo $_smarty_tpl->tpl_vars['especialidad']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_fac'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['especialidad']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['etiqueta_fac'];?>
" <?php if ($_smarty_tpl->tpl_vars['especialidad']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['encendido'] == "on") {?> checked="checked" <?php }?> />
                                                <?php echo $_smarty_tpl->tpl_vars['especialidad']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_fac'];?>

                                              </div>
                                              <div class="fotos5"> 
                                                <i class="fa <?php echo $_smarty_tpl->tpl_vars['especialidad']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['etiqueta_fac'];?>
 color-fa"></i>
                                              </div>
                                            </div>    
                                          <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                            </div>
                                          </div>

  

                                          <div class="col-xs-12 form-group" style="margin-top: 20px;">
                                          <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>
                                          <input onclick="javascript: return confirmar('esta seguro que desea guardar?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                                          <input onclick="javascript: location.href='/admin/contenido/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos obligatorios
                                          </div>
                                    </form>
                                    </div>
                            <div class="col-lg-6 col-md-6">
                            <div class="well">
                                <h4>Información adicional sobre la creación de Sedes</h4>
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
