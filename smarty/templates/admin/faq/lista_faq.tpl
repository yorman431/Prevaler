<!DOCTYPE html>
<html lang="en">
   {include file='admin/layouts/head2.tpl'}
   <script src="/js/descuentos.js" type="text/javascript"></script>
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
                                            <th>ID</th>
                                            <th>Pregunta</th>
                                            <th>Padre</th>
                                            <th>Respuesta</th>
                                            <th>Prioridad</th>
                                            <th width="5%"><span class="hidden-xs hidden-sm">Editar</span></th>
                                            <th width="5%"><span class="hidden-xs hidden-sm">Eliminar</span></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    {section name=i loop=$listado}
                                        <tr class="odd gradeX">
                                            <td>{$listado[i].id_faq}</td>
                                            <td>{$listado[i].pregunta_faq}</td>
                                            <td>{$listado[i].padre_faq}</td>
                                            <td>{$listado[i].respuesta_faq}</td>
                                            <td>{$listado[i].prioridad_faq}</td>
                                            <td align="center" width="5%"><a title="Edit" href="editar.php?id={$listado[i].id_faq}"><i class="fa fa-edit fa-lg"></i></a></td>
                                            <td align="center" width="5%"><a title="Delete" onclick="javascript: return confirmar('Sure you want to delete this item?')" href="eliminar.php?id={$listado[i].id_faq}"><i class="fa fa-trash-o fa-lg"></i></a></td>
                                        </tr>
                                    {/section}

                                    </tbody>
                                        <tr><td colspan="7" align="left"><a href="insertar.php" class="btn btn-md btn-danger">Insertar Pregunta</a></td></tr>
                                </table>
                                </div>
                            </div>

                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Informaci&oacute;n sobre el M&oacute;dulo de FAQ</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed dictum tortor. Nam ut malesuada tellus, vel posuere neque. Proin ultricies, nisl sed fringilla viverra, mauris neque pharetra felis, et condimentum leo augue quis odio. Mauris bibendum, sapien id mattis accumsan, mi lacus fringilla dolor, at imperdiet diam erat in quam. Aenean porttitor dui at tristique ullamcorper. Duis id fermentum arcu. Maecenas eu lectus molestie, imperdiet quam quis, vulputate nulla. Fusce malesuada blandit magna sit amet mattis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas tincidunt sollicitudin est, vitae semper purus vulputate a. Curabitur lacinia ante at augue fermentum hendrerit. Maecenas efficitur ligula vel nisl volutpat, sit amet vulputate justo suscipit. Sed non faucibus enim.</p>
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
        "targets": [4,5,6]
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
