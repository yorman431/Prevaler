<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" -->
{include file='admin/layouts/head2.tpl'}
{literal}
<link rel="stylesheet" href="/lightbox-master/dist/ekko-lightbox.css" media="screen">
<script src="/lightbox-master/dist/ekko-lightbox.js"></script>
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
                                  <strong>C&oacute;digo:</strong> {$codigo}
                                  </div>
                                  <div class="form-group">
                                  <strong>Nombre:</strong> {$nombres}
                                  </div>
                                    <div class="form-group">
                                    <strong>Prioridad Producto:</strong>
                                    {$prioridad}
                                    </div>
                                   <div class="form-group">
                                    <strong>Descripci&oacute;n:</strong>
                                    </br>
                                    {$descripcion}
                                   </div>
                                   
                                   <div class="form-group">
                                  <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>                                  </div>
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
                                          <a href="/imagenes/{$listado[i].directorio_image}" title="{$listado[i].nombre_image}" data-toggle="lightbox" data-footer="{$listado[i].nombre_image}" data-gallery="IMAGENES" >
                                          <img class="img-responsive" border="0" src="/imagenes/{$listado[i].directorio_image}"/></a><br />
          {$listado[i].nombre_image|escape:"htmlall"} <a  class="btn-danger btn-xs" onclick="javascript: return confirmar('&iquest;Esta seguro que desea borrar la imagen?');" href="imagen_borrar.php?id={$listado[i].id_image}&amp;back={$id}&amp;tabla=producto"><i class="fa fa-times"></i></a>
                                        </div>
                                        {/section}
                                        {literal}
                                            <script>
                                            $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event){
                                                event.preventDefault();
                                                $(this).ekkoLightbox();
                                                });
                                            </script>
                                         {/literal}
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

            <!-- InstanceBeginEditable name="insertar" --><!-- InstanceEndEditable -->


            {include file='admin/layouts/footer.tpl'}

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
  

    <!-- Bootstrap Core JavaScript -->
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <script src="/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
  <!-- InstanceBeginEditable name="pie" --><!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
