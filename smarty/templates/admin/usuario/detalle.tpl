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

                                  <div class="form-group">
                                  <strong>Nombre:</strong> {$nombres|escape:&quot;htmlall&quot;}
                                  </div>
                                  <div class="form-group">
                                  <strong>Apellido:</strong> {$apellidos|escape:&quot;htmlall&quot;}
                                  </div>
                                  <div class="form-group">
                                  <strong>Correo:</strong> {$correo|escape:&quot;htmlall&quot;}
                                  </div>
                                  <div class="form-group">
                                  <strong>Usuario:</strong> {$login|escape:&quot;htmlall&quot;}
                                  </div>
                                  <div class="form-group">
                                  <strong>Nivel:</strong> {$nivel|escape:&quot;htmlall&quot;}
                                  </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
<!-- InstanceEndEditable -->




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
