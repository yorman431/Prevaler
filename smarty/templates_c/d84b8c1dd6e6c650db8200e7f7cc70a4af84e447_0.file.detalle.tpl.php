<?php
/* Smarty version 3.1.29, created on 2017-12-13 18:54:50
  from "/Applications/MAMP/htdocs/prevaler/smartylib/templates/admin/hotel/detalle.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a31696a751649_02175534',
  'file_dependency' => 
  array (
    'd84b8c1dd6e6c650db8200e7f7cc70a4af84e447' => 
    array (
      0 => '/Applications/MAMP/htdocs/prevaler/smartylib/templates/admin/hotel/detalle.tpl',
      1 => 1513187356,
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
function content_5a31696a751649_02175534 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layouts/head2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="/js/prototype.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/scriptaculous.js?load=effects"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/lightbox.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="/css/lightbox.css" type="text/css" media="screen" />

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

                                  <div class="form-group">
                                  <strong>Estado:</strong> <?php echo $_smarty_tpl->tpl_vars['estado']->value;?>

                                  </div>
                                  <div class="form-group">
                                  <strong>Ciudad:</strong> <?php echo $_smarty_tpl->tpl_vars['ciudad']->value;?>

                                  </div>
                                  <div class="form-group">
                                  <strong>C??digo:</strong> <?php echo $_smarty_tpl->tpl_vars['codigo']->value;?>

                                  </div>
                                  <div class="form-group">
                                  <strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>

                                  </div>
                                  <div class="form-group">
                                  <strong>Tel??fono:</strong> <?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>

                                  </div>
                                  <div class="form-group">
                                  <strong>Prioridad:</strong> <?php echo $_smarty_tpl->tpl_vars['prioridad']->value;?>

                                  </div>
                                  <div class="form-group">
                                  <strong>Latitud:</strong>
                                  <?php echo $_smarty_tpl->tpl_vars['latitud']->value;?>

                                  </div>
                                  <div class="form-group">
                                  <strong>Longitud:</strong>
                                  <?php echo $_smarty_tpl->tpl_vars['longitud']->value;?>

                                  </div>
                                  <div class="form-group">
                                  <strong>Ubicaci??n:</strong> <?php echo $_smarty_tpl->tpl_vars['ubicacion']->value;?>

                                  </div>

                                  <div class="form-group">
                                  <strong>Contenido:</strong>
                                  </br>
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>

                                      </div>
                                    </div>
                                   </div>
                                   <div class="form-group">
                                  <strong>Condiciones:</strong>
                                  </br>
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <?php echo $_smarty_tpl->tpl_vars['condiciones']->value;?>

                                      </div>
                                    </div>
                                   </div>

                                  <div class="form-group">
                                  <strong>Claves:</strong>
                                  <?php echo $_smarty_tpl->tpl_vars['claves']->value;?>

                                  </div>

                                  <div class="form-group">
                                  <strong>Principal:</strong>
                                  <?php echo $_smarty_tpl->tpl_vars['principal']->value;?>

                                  </div>
                                  
                                  <div class="form-group">
                                  <strong>Fecha:</strong>
                                  <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>

                                  </div>

                                   <div class="form-group">
                                  <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>                                  </div>
                                 </div>
                                <div class="col-lg-6 col-md-6">

                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        A&ntilde;adir Imagen
                                    </div>
                                    <div class="panel-body">
                                        <?php if ($_smarty_tpl->tpl_vars['mensaje']->value == '') {?>
                                        <div class="row">
                                        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listado']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                          <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" rel="lightbox[roadtrip]" >
                                          <img class="img-responsive" border="0" src="/imagenes/miniaturas/<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
"/></a><br />
          <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <a  class="btn-danger btn-xs" onclick="javascript: return confirmar('&iquest;Esta seguro que desea borrar la imagen?');" href="imagen_borrar.php?id=<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_image'];?>
&amp;back=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;tabla=sede"><i class="fa fa-times"></i></a>
                                        </div>
                                        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                        </div>
                                      <?php } else { ?>
                                        <div class="alert alert-danger" role="alert" align="center"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
                                      <?php }?>

                                    </div>
                                    <div class="panel-footer">
                                    <a href="imagen.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Insertar Imagen</a>
                                    </div>
                                </div>

                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        Especialidades
                                    </div>
                                    <div class="panel-body">
                                        
                                        <div class="row">
                                        <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['facilidad']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                          <img class="img-responsive" border="0" src="/imagenes/miniaturas/<?php echo $_smarty_tpl->tpl_vars['facilidad']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['facilidad']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_fac'];?>
" />
                                        </div>
                                        <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
                                        </div>
                                

                                    </div>
                                    <div class="panel-footer"></div>
                                </div>

                            </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- InstanceEndEditable -->

            <!-- InstanceBeginEditable name="insertar" --><!-- InstanceEndEditable -->


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
