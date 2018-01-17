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
                                        <th width="20%">T&iacute;tulo</th>
                                        <th width="25%">Descrici&oacute;n</th>
                                        <th width="15%">Fecha</th>
                                        <th width="10%">Imagen</th>
                                        <th width="5%"><span class="hidden-xs hidden-sm">Detalles</span></th>
                                        <th width="5%"><span class="hidden-xs hidden-sm">Editar</span></th>
                                        <th width="5%"><span class="hidden-xs hidden-sm">Eliminar</span></th>

                                    </tr>
                                </thead>
                                <tbody>
                                {section name=i loop=$listado}
                                    <tr class="odd gradeX">
                                        <td>{$listado[i].nombre_gal|truncate:60|escape:"htmlall"}</td>
                                        <td>{$listado[i].descripcion_gal|truncate:50}</td>
                                        <td>{$listado[i].fecha_gal|escape:"htmlall"}</td>
                                        <td>{$listado[i].fotos}</td>
                                        <td align="center" width="5%"><a title="Detalles" href="detalle.php?id={$listado[i].id_gal}"><i class="fa fa-eye fa-lg"></i></a></td>
                                        <td align="center" width="5%"><a title="Editar" href="editar.php?id={$listado[i].id_gal}"><i class="fa fa-edit fa-lg"></i></a></td>
                                        <td align="center" width="5%"><a title="Eliminar" onclick="javascript: return confirmar('Seguro que desea eliminar esta galeria')" href="eliminar.php?id={$listado[i].id_gal}"><i class="fa fa-trash-o fa-lg"></i></a></td>
                                    </tr>
                                {/section}

                                </tbody>
                                <tfoot>
                                    <tr><td colspan="7" align="left"><a href="insertar.php" class="btn btn-md btn-danger"><i class="fa fa-plus-square" aria-hidden="true"></i> Agregar Galeria</a></td></tr>
                                </tfoot>
                            </table>
                            </div>
                        </div>

                        <!-- /.table-responsive -->
                        <div class="well">
                            <h4>Informaci&oacute;n adicional acerca de m&oacute;dulo Galer&iacute;a</h4>
                            <p>El m&oacute;dulo Galer&iacute;a nos permite agregar, editar y eliminar las fotograf&iacute;as del &aacute;rea de Galer&iacute;a que tiene nuestro sitio web. Es aquí donde definimos el número de secciones informativas que llevarán nuestro sitio web. Es importante que los enlaces tienen una etiqueta descriptiva y tener una descripción y sus respectivas palabras clave son importantes para el posicionamiento en buscadores Web SEO. </p>
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

    <script src="/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/dist/js/sb-admin-2.js"></script>
	<!-- InstanceBeginEditable name="pie" --><!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
