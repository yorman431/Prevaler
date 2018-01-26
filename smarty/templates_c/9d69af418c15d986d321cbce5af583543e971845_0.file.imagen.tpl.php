<?php
/* Smarty version 3.1.29, created on 2017-12-20 18:42:59
  from "D:\Websites\Prevaler\smarty\templates\admin\contenido\imagen.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a3aaf33db8651_69407115',
  'file_dependency' => 
  array (
    '9d69af418c15d986d321cbce5af583543e971845' => 
    array (
      0 => 'D:\\Websites\\Prevaler\\smarty\\templates\\admin\\contenido\\imagen.tpl',
      1 => 1492183522,
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
function content_5a3aaf33db8651_69407115 ($_smarty_tpl) {
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

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    <?php if ($_smarty_tpl->tpl_vars['mensaje']->value != '') {
echo $_smarty_tpl->tpl_vars['mensaje']->value;
}?>
                   <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="MM_validateForm('nombre','','R');return document.MM_returnValue">
                    <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre2']->value;?>
" size="48" maxlength="100" />
                    </div>
                    <div class="form-group">
                    <label for="imagen">Imagen</label>
                   <input  type="file" name="archivo" multiple id="archivo" class="file-loading"/>
                    </div>
                    <div class="form-group">
                        <input name="envio" type="submit" class="btn btn-success" id="button" onclick="javascript: return confirmar('¿Está seguro que desea guardar?');" value="Enviar" />
                        <input name="button2" type="button" class="btn btn-default" id="button2" onclick="javascript: location.href='/admin/<?php echo $_smarty_tpl->tpl_vars['carpeta']->value;?>
/detalle.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'" value="Cancelar" />
                    </div>
                   </form>

                   <div class="col-lg-6 col-md-6">
                   </div>

               </div>
            </div>
        </div>
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

    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>
	<!-- InstanceBeginEditable name="pie" --><!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
<?php }
}
