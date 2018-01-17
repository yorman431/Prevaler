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
                            <div class="col-lg-6 col-md-4">

                                  <div class="form-group">
                                  <strong>Nombre:</strong> {$nombres}
                                  </div>

                                  <div class="form-group">
                                  <strong>Etiqueta:</strong> {$etiqueta}
                                  </div>

                                  <div class="form-group">
                                  <strong>Descripci&oacute;n:</strong> {$descripcion}
                                  </div>

                                  <div class="form-group">
                                  <strong>Palabras Claves:</strong> {$claves}
                                  </div>

                                  <div class="form-group">
                                  <strong>Orden:</strong> {$prioridad}
                                  </div>
                                  <div class="form-group">
                                  <strong>Tipo:</strong> {$tipo}
                                  </div>

                                  <div class="form-group">
                                  <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a> <a href="sublink.php?id={$id}" class="btn btn-md btn-danger"><i class="fa fa-plus-square" aria-hidden="true"></i> A&ntilde;adir Subenlaces</a> <a href="editar.php?id={$id}" class="btn btn-md btn-danger"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                                  </div>

                            </div>
                            <div class="col-lg-6 col-md-4">

                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        A&ntilde;adir Subenlace
                                    </div>
                                    <div class="panel-body">
                                        {if $mensaje eq ""}
                                        {section name=i loop=$listado}
                                          {$listado[i].nombre_sub}
                                          <a class="btn btn-danger btn-xs" onclick="javascript: return confirmar('&iquest;Esta seguro que desea borrar?');" href="sublink_borrar.php?id={$listado[i].id_rel}&amp;back={$id}"><i class="fa fa-times"></i></a>&nbsp;&nbsp;&nbsp;
                                        {/section}
                                      {else}
                                        <div class="alert alert-danger" role="alert" align="center">{$mensaje}</div>
                                      {/if}

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4">

                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        A&ntilde;adir Imagen
                                    </div>
                                    <div class="panel-body">
                                        {if $mensaje2 eq ""}
                                        <div class="row">
                                        {section name=i loop=$imagenes}
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                          <a href="#" title="{$imagenes[i].nombre_image}" rel="lightbox[roadtrip]" >
                                          <img class="img-responsive" border="0" src="/imagenes/miniaturas/{$imagenes[i].directorio_image}"/></a><br />
          {$imagenes[i].nombre_image|escape:"htmlall"} <a  class="btn-danger btn-xs" onclick="javascript: return confirmar('&iquest;Esta seguro que desea borrar la imagen?');" href="imagen_borrar.php?id={$listado[i].id_image}&amp;back={$id}&amp;tabla=link"><i class="fa fa-times"></i></a>
                                        </div>
                                        {/section}
                                        </div>
                                      {else}
                                        <div class="alert alert-danger" role="alert" align="center">{$mensaje2}</div>
                                      {/if}

                                    </div>
                                    <div class="panel-footer">
                                    <a href="imagen.php?id={$id}"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Insertar Imagen</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                               <div class="well">
                                    <h4>Información sobre la asignación de sub-enlaces</h4>
                                    <p>En esta sección podemos ver los datos de un enlace específico. Además podemos emparejarlo con un sub-link haciendo clic en Agregar Sub-enlaces.</p>
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
