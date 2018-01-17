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
                        <div class="dataTable_wrapper">
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-admin">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Etiqueta</th>
                                        <th>Orden</th>
                                        <th>Editar</th>
                                        <th>Borrar</th>

                                    </tr>
                                </thead>
                                <tbody>
                                {section name=i loop=$listado}
                                    <tr class="odd gradeX">
                                        <td>{$listado[i].nombre_sub}</td>
                                        <td>{$listado[i].etiqueta_sub}</td>
                                        <td>{$listado[i].prioridad_sub}</td>
                                        <td align="center" width="5%"><a title="Edit" href="sublink_editar.php?id={$listado[i].id_sub}"><i class="fa fa-edit fa-lg"></i></a></td>
                                        <td align="center" width="5%"><a title="Delete" onclick="javascript: return confirmar('Sure you want to delete this item?')" href="sublink_eliminar.php?id={$listado[i].id_sub}"><i class="fa fa-trash-o fa-lg"></i></a></td>
                                    </tr>
                                {/section}

                                </tbody>
                                <tfoot>
                                    <tr>
                                    	<td colspan="5" align="left"><a href="sublink_insertar.php"  class="btn btn-md btn-danger"><i class="fa fa-plus-square" aria-hidden="true"></i>Insertar Subenlaces</a> <a href="index.php"class="btn btn-md btn-danger"><i class="fa fa-list-ul" aria-hidden="true"></i> Enlaces</a></td>
                                    </tr>
                                </tfoot>
                            </table>
                            </div>
                        </div>

                        <!-- /.table-responsive -->
                        <div class="well">
                            <h4>Información sobre el Módulo de Subenlaces</h4>
                            <p>Sed tincidunt, ante nec congue porta, sapien diam commodo urna, nec gravida diam elit at massa. Proin commodo consequat nulla quis commodo. Suspendisse potenti. Pellentesque at rutrum ex, vitae luctus lorem. Aliquam erat volutpat. Ut a ligula ullamcorper diam pretium viverra nec ut mauris.</p>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
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

    <script src="/bower_components/datatables/media/js/jquery.dataTables.js"></script>
    <script src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/dist/js/sb-admin-2.js"></script>
	<!-- InstanceBeginEditable name="pie" -->
	{literal}
    <script>
	$(document).ready(function() {
    var t = $('#dataTables-admin').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": [3, 4]
        } ],
        "order": [[ 0, 'asc' ]],
		 responsive: true

    } );

} );


    </script>
    {/literal}
	<!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
