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
                                {if $mensaje neq ""}<div class="alert alert-success" role="alert">{$mensaje}</div>{/if}
                                <form id="form1" name="form1" method="post" action="">
                                      <div class="form-group">
                                      <label for="id_sublink">Subenlaces:</label>
                                      <select class="form-control" name="id_sublink" id="id_sublink">
                                              {section name=i loop=$listado}
                                      <option value="{$listado[i].id_sub}">{$listado[i].nombre_sub}</option>
                                              {/section}
                                    </select>

                                      </div>

                                      <div class="form-group">
                                      <input onclick="javascript: return confirmar('Esta seguro que desea guardar?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />

                                      <input class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Agregar Nuevo" />

                                      <input name="id_link" type="hidden" id="id_link" value="{$id}" />

                                      </div>
                                </form>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="well">
                                        <h4>Información acerca de los subenlaces</h4>
                                        <p>To add Sublinks to a link just select from the list and then click on "Save". If there is no Sublink you want on the list you can add it by clicking "Add new".</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
        <!-- InstanceEndEditable -->

            <!-- InstanceBeginEditable name="insertar" --><!-- InstanceEndEditable -->

            {include file='admin/layouts/footer.tpl'}

        <!-- /#page-wrapper -->
      </div>
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
