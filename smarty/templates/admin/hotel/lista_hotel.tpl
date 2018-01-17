<!DOCTYPE html>
<html lang="en">
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
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Estado</th>
                                            <th>Prioridad</th>
                                            <th width="5%"><span class="hidden-xs hidden-sm">Detalle</span></th>
                                            <th width="5%"><span class="hidden-xs hidden-sm">Editar</span></th>
                                            <th width="5%"><span class="hidden-xs hidden-sm">Eliminar</span></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    {section name=i loop=$listado}
                                        <tr class="odd gradeX">
                                            <td>{$listado[i].codigo_sede}</td>
                                            <td>{$listado[i].nombre_sede}</td>
                                            <td>{$listado[i].estado_sede}</td>
                                            <td>{$listado[i].prioridad_sede}</td>
                                            <td align="center" width="5%"><a title="Details" href="detalle.php?id={$listado[i].id_sede}"><i class="fa fa-eye fa-lg"></i></a></td>
                                            <td align="center" width="5%"><a title="Edit" href="editar.php?id={$listado[i].id_sede}"><i class="fa fa-edit fa-lg"></i></a></td>
                                            <td align="center" width="5%"><a title="Delete" onclick="javascript: return confirmar('Sure you want to delete this item?')" href="eliminar.php?id={$listado[i].id_sede}"><i class="fa fa-trash-o fa-lg"></i></a></td>
                                        </tr>
                                    {/section}

                                    </tbody>
                                        <tr><td colspan="7" align="left"><a href="insertar.php" class="btn btn-md btn-danger">Insertar Sede</a></td></tr>
                                </table>
                                </div>
                            </div>

                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Información sobre el Módulo de Sedes</h4>
                                <p>En este módulo se insertan, modifican y eliminan las sedes de Prevaler a nivel Nacional. Las imagen a insertar en la sección de detalle se visualizará en el enlace principal y el de Sede del sitio web y debe tener un tamaño de 300 x 172 pixeles para evitar iregularidades en el diseño.</p>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
        "targets": [4,5]
      } ],
      "order": [[ 0, 'asc' ]],
       responsive: true,


    } );

  } );


    </script>
    {/literal}
  <!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
