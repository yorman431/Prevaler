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

        					       <form id="form1" name="form1" method="post" action="" class="form-inline">
                            	<div class="form-group" style="margin-top:-5px;">
                                <label for="tipo" class="hidden-xs"><h4>Filtro:</h4> </label>
                                <select class="form-control input-sm" name="tipo" id="tipo" onchange="javascripts: document.form1.submit();" >
                                  <option {if $tipo eq "normal"} selected='selected'{/if} value="normal">Enlaces tipo Normal</option>
                                  <option {if $tipo eq "centro"} selected='selected'{/if} value="centro">Enlaces tipo Centro</option>
                                  <option {if $tipo eq "arriba"} selected='selected'{/if} value="arriba">Enlaces tipo Arriba</option>
                                  <option {if $tipo eq "pie"} selected='selected'{/if} value="pie">Enlaces tipo pie</option>
                                </select>
                                </div>
                          </form>
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
                                        <th width="20%">Nombre</th>
                                        <th width="25%">Etiqueta</th>
                                        <th width="15%">Orden</th>
                                        <th width="10%">&Aacute;rea</th>
                                        <th width="5%"><span class="hidden-xs hidden-sm">Detalles</span></th>
                                        <th width="5%"><span class="hidden-xs hidden-sm">Editar</span></th>
                                        <th width="5%"><span class="hidden-xs hidden-sm">Eliminar</span></th>

                                    </tr>
                                </thead>
                                <tbody>
                                {section name=i loop=$listado}
                                    <tr class="odd gradeX">
                                        <td>{$listado[i].nombre_cat}</td>
                                        <td>{$listado[i].etiqueta_cat}</td>
                                        <td>{$listado[i].prioridad_cat}</td>
                                        <td>{$listado[i].tipo_cat}</td>
                                        <td align="center" width="5%"><a title="Detalles" href="detalle.php?id={$listado[i].id_cat}"><i class="fa fa-eye fa-lg"></i></a></td>
                                        <td align="center" width="5%"><a title="Editar" href="editar.php?id={$listado[i].id_cat}"><i class="fa fa-edit fa-lg"></i></a></td>
                                        <td align="center" width="5%"><a title="Eliminar" onclick="javascript: return confirmar('Sure you want to delete this item?')" href="eliminar.php?id={$listado[i].id_cat}"><i class="fa fa-trash-o fa-lg"></i></a></td>
                                    </tr>
                                {/section}

                                </tbody>
                                <tfoot>
                                    <tr><td colspan="7" align="left"><a href="insertar.php" class="btn btn-md btn-danger"><i class="fa fa-plus-square" aria-hidden="true"></i> Agregar Enlace</a> <a href="sublink_lista.php" class="btn btn-md btn-danger"><i class="fa fa-list-ul" aria-hidden="true"></i> Sub Enlace</a> </td></tr>
                                </tfoot>
                            </table>
                            </div>
                        </div>

                        <!-- /.table-responsive -->
                        <div class="well">
                            <h4>Informaci&oacute;n adicional acerca de m&oacute;dulo Enlaces</h4>
                            <p>El m&oacute;dulo enlaces nos permite agregar, editar y eliminar secciones que tiene nuestro sitio web. Es aquí donde definimos el número de secciones informativas que llevará nuestro sitio web. Es importante que los enlaces tengan una etiqueta descriptiva; adicional a esto, una descripci&oacute;n y sus respectivas palabras clave son importantes para el posicionamiento en buscadores Web SEO. </p>
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
				"targets": [3,4,5,6]
			} ],
			"order": [[ 0, 'asc' ]],
			 "responsive": true
		} );

	} );
    </script>
    {/literal}
	<!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
