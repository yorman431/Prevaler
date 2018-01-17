<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" -->

{include file='admin/layouts/head2.tpl'}
</head>

<body>

    <div id="wrapper">

      {include file='admin/layouts/menu.tpl'}
        <div id="page-wrapper">
        	<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">{$accion}
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
                                    {if $mensaje neq ""}{$mensaje}{/if}
                                   <form action="" method="post" name="form1" id="form1" onsubmit="MM_validateForm('nombre','','R','apellido','','R','correo','','RisEmail','login','','R','clave','','R','nivel','','RinRange1:4');return document.MM_returnValue">
                                    <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input name="nombre" type="text" class="form-control"  placeholder="Nombre del usuario" id="nombre" value="{$nombres}"/>
                                    </div>
                                     <div class="form-group">
                                          <label for="apellido">Apellido</label>
                                          <input name="apellido" type="text" class="form-control" placeholder="Apellido del usuario" id="apellido" onkeypress="javascripts: return validarletras(event);" value="{$apellidos}" size="55" maxlength="20" />
                                     </div>
                                     <div class="form-group">
                                          <label for="correo">Correo</label>
                                          <input name="correo" type="text" class="form-control" placeholder="xxxx@xxx.com" id="correo" value="{$correo}" size="55" maxlength="50" />
                                     </div>
                                     <div class="form-group">
                                         <label for="login">Login</label>
                                         <input name="login" type="text" class="form-control" placeholder="Nombre de acceso" id="login" onkeypress="javascripts: return validarletrasnum(event);" value="{$login}" size="55" maxlength="20" />
                                     </div>
                                     <div class="form-group">
                                          <label for="clave">Clave</label>
                                          <input name="clave" type="password" class="form-control" id="clave" size="55" maxlength="20" />
                                     </div>
                                     <div class="form-group">
                                     <label for="confirmar">Confirmar Clave</label>
                                     <input name="confirmar" type="password" class="form-control" id="confirmar" size="55" maxlength="20" />
                                     </div>
                                     <div class="form-group">
                                     <label for="confirmar">Nivel</label>
                                     <input name="nivel" type="text" class="form-control" id="nivel" onkeypress="javascripts: return validarnum(event);" value="{$nivel}" size="55" maxlength="1" />
                                     </div>
                                     <div class="form-group">
                                        <input name="envio" type="submit" class="btn btn-success" id="button3" onclick="javascript: return confirmar('&iquest;Est&aacute; seguro que desea guardar?');" value="Guardar" />
                                        <input name="button" type="button" class="btn btn-default" id="button4" onclick="javascript: location.href='/admin/usuario/'" value="Cancelar" />
                                     </div>
                                 </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- InstanceEndEditable -->

            <!-- InstanceBeginEditable name="insertar" -->&nbsp;<!-- InstanceEndEditable -->


            {include file='admin/layouts/footer.tpl'}

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <script src="/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/dist/js/sb-admin-2.js"></script>
	<!-- InstanceBeginEditable name="pie" --><!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
