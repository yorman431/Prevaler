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
                                  <strong>Nombre:</strong> {$nombres}
                             </div>
                             <div class="form-group">
                                  <strong>Prioridad:</strong> {$prioridad}
                             </div>
                             <div class="form-group">
                                  <strong>Etiqueta:</strong> {$etiqueta}
                             </div>
                           </div>
                           <div class="col-lg-6 col-md-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        A&ntilde;adir Imagen
                                    </div>
                                    <div class="panel-body">
                                        {if $mensaje eq ""}
                                        <div class="row">
                                        {section name=i loop=$listado}
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                          <a href="../galeria/publica_imagen2.php?id={$listado[i].id_image}" title="{$listado[i].nombre_image}" rel="lightbox[roadtrip]" >
                                          <img class="img-responsive" border="0" src="../galeria/publica_imagen.php?id={$listado[i].id_image}&amp;anchura=100&amp;altura=75"/></a><br />
          {$listado[i].nombre_image|escape:"htmlall"} <a  class="btn-danger btn-xs" onclick="javascript: return confirmar('&iquest;Esta seguro que desea borrar la imagen?');" href="imagen_borrar.php?id={$listado[i].id_image}&amp;back={$id}&amp;tabla=galeria"><i class="fa fa-times"></i></a>
                                        </div>
                                        {/section}
                                        </div>
                                      {else}
                                        <div class="alert alert-danger" role="alert" align="center">{$mensaje}</div>
                                      {/if}

                                    </div>
                                    <div class="panel-footer">
                                    <a href="imagen.php?id={$id}"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Insertar Imagen</a>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- InstanceEndEditable -->

            <!-- InstanceBeginEditable name="insertar" --><a href="/admin/link/sublink_lista.php">&nbsp;Volver <img src="/imagenes/atras.png" width="25" height="25" border="0" align="absmiddle" /></a><!-- InstanceEndEditable -->


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
