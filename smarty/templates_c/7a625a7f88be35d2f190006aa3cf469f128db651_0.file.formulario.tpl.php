<?php
/* Smarty version 3.1.29, created on 2018-01-22 14:56:32
  from "D:\Websites\Prevaler\smarty\templates\admin\noticia\formulario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a65fba01046a8_06541777',
  'file_dependency' => 
  array (
    '7a625a7f88be35d2f190006aa3cf469f128db651' => 
    array (
      0 => 'D:\\Websites\\Prevaler\\smarty\\templates\\admin\\noticia\\formulario.tpl',
      1 => 1505325208,
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
function content_5a65fba01046a8_06541777 ($_smarty_tpl) {
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
                                          <label for="categoria">Categoría</label>
                                          <input name="categoria" type="text" class="form-control"  placeholder="Categoría de la Noticia*" id="categoria" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
"/>
                                          </div>
                                          <div class="form-group">
                                          <label for="titulo">Título</label>
                                          <input name="titulo" type="text" class="form-control"  placeholder="Título de la Noticia*" id="titulo" value="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
"/>
                                          </div>
                                         <div class="form-group">
                                          <label for="subtitulo">Sub-título</label>
                                          <input name="subtitulo" type="text" class="form-control"  placeholder="Sub-título de la Noticia*" id="subtitulo" value="<?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
"/>
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
                                          <label for="hora">Hora</label>
                                          <!--<div class='input-group date' id='datetimepicker'>-->
                                          <input name="hora" type="text" class="form-control"  placeholder="hh:mm:ss" id="hora" value="<?php echo $_smarty_tpl->tpl_vars['hora']->value;?>
"/></div>

                                          <div class="form-group">
                                          <label for="contenido">Contenido</label>
                                          <textarea name="contenido" cols="70" rows="6" class="normalContenido" id="contenido"  wrap="physical"><?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>
</textarea>
                                          </div>

                                          <div class="form-group">
                                          <label for="autor">Autor</label>
                                          <input name="autor" type="text" class="form-control" class="form-control" id="autor" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
"/>
                                          </div>

                                          <div class="form-group">
                                          <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>
                                          <input onclick="javascript: return confirmar('esta seguro que desea guardar?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                                          <input onclick="javascript: location.href='/admin/noticia/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos obligatorios
                                          </div>
                                    </form>
                                    </div>
                            <div class="col-lg-6 col-md-6">
                            <div class="well">
                                <h4>Información adicional sobre la creación de la Noticia</h4>
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
