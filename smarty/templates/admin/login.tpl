<!DOCTYPE html>
<html lang="en">

{include file='admin/layouts/head.tpl'}
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
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/dist/js/sb-admin-2.js"></script>

</body>

</html>
