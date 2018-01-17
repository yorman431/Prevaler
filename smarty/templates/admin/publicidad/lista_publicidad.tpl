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
                                      <th>Descripci&oacute;n</th>
                                      <th>Fecha de creaci&oacute;n</th>
                                      <th>Imagen</th>
                                      <th width="5%"><span class="hidden-xs hidden-sm">Detalle</span></th>
                                      <th width="5%"><span class="hidden-xs hidden-sm">Editar</span></th>
                                      <th width="5%"><span class="hidden-xs hidden-sm">Eliminar</span></th>

                                  </tr>
                              </thead>
                              <tbody>
                              {section name=i loop=$listado}
                                  <tr class="odd gradeX">
                                      <td>{$listado[i].nombre_pub|truncate:60}</td>
                                      <td>{$listado[i].descripcion_pub|truncate:80}</td>
                                      <td>{$listado[i].fecha_pub}</td>
                                      <td>{$listado[i].fotos}</td>
                                      <td align="center" width="5%"><a title="Detalles" href="detalle.php?id={$listado[i].id_pub}"><i class="fa fa-eye fa-lg"></i></a></td>
                                      <td align="center" width="5%"><a title="Editar" href="editar.php?id={$listado[i].id_pub}"><i class="fa fa-edit fa-lg"></i></a></td>
                                      <td align="center" width="5%"><a title="Eliminar" onclick="javascript: return confirmar('¿Esta seguro que desea eliminar este registro?')" href="eliminar.php?id={$listado[i].id_pub}"><i class="fa fa-trash-o fa-lg"></i></a></td>
                                  </tr>
                              {/section}

                              </tbody>
                                  <tr><td colspan="7" align="left"><a href="insertar.php" class="btn btn-md btn-danger">Insertar Publicidad</a></td></tr>
                          </table>
                          </div>
                      </div>

                      <!-- /.table-responsive -->
                      <div class="well">
                          <h4>Información sobre el Módulo de Publicidad</h4>
                          <p>Sed tincidunt, ante nec congue porta, sapien diam commodo urna, nec gravida diam elit at massa. Proin commodo consequat nulla quis commodo. Suspendisse potenti. Pellentesque at rutrum ex, vitae luctus lorem. Aliquam erat volutpat. Ut a ligula ullamcorper diam pretium viverra nec ut mauris.</p>
                      </div>
                  </div>
                  <!-- /.panel-body -->
              </div>
              <!-- /.panel -->
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
