<?php
/* Smarty version 3.1.29, created on 2018-01-12 14:01:15
  from "D:\Websites\Prevaler\smarty\templates\admin\banner\detalle.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a58bfab81dee6_78812025',
  'file_dependency' => 
  array (
    'c65050fd7b6b89dc2fdda21710fcb88bd8ba7726' => 
    array (
      0 => 'D:\\Websites\\Prevaler\\smarty\\templates\\admin\\banner\\detalle.tpl',
      1 => 1513946752,
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
function content_5a58bfab81dee6_78812025 ($_smarty_tpl) {
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
                                  <strong>Etiqueta:</strong> <?php echo $_smarty_tpl->tpl_vars['etiqueta']->value;?>

                                  </div>

                                  <div class="form-group">
                                  <strong>Url:</strong> <?php echo $_smarty_tpl->tpl_vars['url']->value;?>

                                  </div>

                                  <div class="form-group">
                                  <strong>Tipo:</strong> <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>

                                  </div>

                                  <div class="form-group">
                                  <strong>Ubicación:</strong> <?php echo $_smarty_tpl->tpl_vars['ubicacion']->value;?>

                                  </div>

                                  <div class="form-group">
                                  <strong>Vinculo:</strong> <?php echo $_smarty_tpl->tpl_vars['vinculo']->value;?>

                                  </div>

                                  <div class="form-group">
                                  <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>  <a href="editar.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-md btn-danger"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                                  </div>

                            </div>

                        </div>


                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->

            </div>
  		</div>

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
