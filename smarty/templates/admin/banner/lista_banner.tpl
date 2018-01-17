<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" -->

{include file='admin/layouts/head2.tpl'}
{literal}
<script type="text/javascript" src="/js/prototype.js"></script>
<script type="text/javascript" src="/js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="/js/lightbox.js"></script>
<link rel="stylesheet" href="/css/lightbox.css" type="text/css" media="screen" />
{/literal}
<!-- InstanceEndEditable -->
</head>

<body>

    <div id="wrapper">
         {include file='admin/layouts/menu.tpl'}

        <div id="page-wrapper">
        	<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">{$accion}
                    	<div class="pull-right">

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
                                            <th>Imagen</th>
                                            <th>Etiqueta</th>
                                            <th>V&iacute;nculo</th>
                                            <th>Tipo</th>
                                            <th>Ubicación</th>
                                            <th width="5%"><span class="hidden-xs hidden-sm">Detalles</span></th>
                                            <th width="5%"><span class="hidden-xs hidden-sm">Editar</span></th>
                                            <th width="5%"><span class="hidden-xs hidden-sm">Eliminar</span></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    {section name=i loop=$listado}
                                        <tr class="odd gradeX">
                                            <td><a href="/imagenes/banner/{$listado[i].url_ban}" title="{$listado[i].etiqueta_ban}" rel="lightbox[roadtrip]">
                                            <img src="/imagenes/banner/{$listado[i].url_ban}" width="200" border="0" class="fotos opacidad" /></a></td>
                                            <td>{$listado[i].etiqueta_ban}</td>
                                            <td>{$listado[i].vinculo_ban}</td>
                                            <td>{$listado[i].tipo_ban}</td>
                                            <td>{$listado[i].ubicacion_ban}</td>
                                            <td align="center" width="5%"><a href="detalle.php?id={$listado[i].id_ban}" title="Detalles"><i class="fa fa-eye fa-lg"></i></a></td>
                                        <td align="center" width="5%"><a href="editar.php?id={$listado[i].id_ban}" title="Editar"><i class="fa fa-edit fa-lg"></i></a></td>
                                        <td align="center" width="5%"><a onclick="javascript: return confirmar('&iquest;Seguro desea eliminar este registro?')" href="eliminar.php?id={$listado[i].id_ban}" title="Eliminar"><i class="fa fa-trash-o fa-lg"></i></a></td>
                                        </tr>
                                    {/section}

                                    </tbody>
                                        <tr><td colspan="7" align="left"><a href="insertar.php" class="btn btn-md btn-danger">Insertar Banner</a></td></tr>
                                </table>
                                </div>
                            </div>

                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Información sobre el Módulo de Banner</h4>
                                <p>En esta sección se pueden agregar, modificar y eliminar los banners ubicados debajo de la botonera de enlaces del sitio web. El campo "Ubicación" debe seleccionar si el banner a insertar es el de la izquierda (Tamaño de la imagen: ) o el de la derecha (Tamaño de la imagen: ).</p>
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
