<?php
/* Smarty version 3.1.29, created on 2017-10-18 19:52:38
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/admin/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59e794e6462c08_42023539',
  'file_dependency' => 
  array (
    '00cbb1d243dbae13ee2a1475676d73d99b059791' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/admin/login.tpl',
      1 => 1508349051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/layouts/head.tpl' => 1,
  ),
),false)) {
function content_59e794e6462c08_42023539 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layouts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <div class="login-panel panel panel-default panel-login">
                    <div class="panel-heading" align="center"><img src="/imagenes/logo_admin.png" style="max-width:280px;" class="img-responsive">
                    </div>
                    <div class="panel-body">
                    	<h4 class="text-center blue-catamaranes" style="margin-top:0px;">Acceso de Usuario</h4>
                        <form action="" method="post" name="form1" id="form1" onSubmit="MM_validateForm('login','','R','password','','R');return document.MM_returnValue">
                            <div class="form-group">
                                <div class="input-group">
                                	<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input maxlength="20" class="form-control" placeholder="Usuario" name="login" id="login" type="text" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                	<span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input maxlength="20" class="form-control" placeholder="Clave" name="password" type="password" id="password" value="">
                                </div>
                            </div>

                             <div class="form-group">
                                <input class="btn btn-success btn-block" name="boton_login" type="submit" id="boton_login" value="Enter" />
                             </div>

                             <div class="form-group">
                                <a href="/admin/recuper_clave.php">¿Olvid&oacute; su clave?</a>
                                <a href="mailto:marabino20@gmail.com" class="pull-right">contacte al webmaster</a>
                             </div>



                        </form>
                    </div>
                    <div class="panel-footer">
                    	<div class="text-center copyright">Delle Cucine. | Copyright<i class="fa fa-copyright"></i> 2017</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
