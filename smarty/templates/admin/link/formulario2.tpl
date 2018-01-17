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
                                    {if $mensaje neq ""}<div class="alert alert-danger" role="alert">{$mensaje}</div>{/if}
                                    <form action="" method="post" name="form1" class="normal" id="form1" onsubmit="MM_validateForm('nombre','','R');return document.MM_returnValue">
                                          <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input  onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de sub-enlace*" value="{$nombres}">
                                          </div>
                                          <div class="form-group">
                                          <label for="etiqueta">Etiqueta</label>
                                          <input  onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="etiqueta" id="etiqueta" placeholder="Etiqueta de sub-enlace*" value="{$etiqueta}">
                                          </div>
                                          <div class="form-group">
                                          <label for="prioridad">Orden</label>
                                          <input onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="prioridad" id="prioridad" placeholder="Posición del sub-enlace*" value="{$prioridad}">
                                          </div>

                                          <div class="form-group">
                                          <input onclick="javascript: return confirmar('Esta seguro que desea guardar?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                                          <input onclick="javascript: location.href='/admin/link/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos requeridos
                                          </div>
                                    </form>
                                    </div>
                            <div class="col-lg-6 col-md-6">
                            <div class="well">
                                <h4>Información adicional sobre la creaci&oacute;n de subenlaces</h4>
                                <p>Para crear Subenlaces es importante tener en cuenta que "Nombre" es el nombre que se publicará en el enlace de la web, mientras que la sección "Etiqueta" aparecerá en el título de la página.

"Área" es la opción donde el botón y dependerá de la disposición del sitio web se desea. Fácilmente se puede identificar por su nombre en la entrada de selección.

Es muy importante que tome unos minutos para insertar la "Descripción" y las "Palabras clave", estos dos influencian fuertemente lo que se refiere a la indexación de SEO y Google.</p>
                            </div>
                            </div></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
