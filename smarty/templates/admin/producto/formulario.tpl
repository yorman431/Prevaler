<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" -->

{include file='admin/layouts/head2.tpl'}
{literal}
<link rel="stylesheet" href="/datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
<script type="text/javascript" src="/moment-develop/moment.js"></script>
<script type="text/javascript" src="/datetimepicker/src/js/bootstrap-datetimepicker.js"></script>
<script src="/js/jquery.js"></script>
<script src="/js/localstorage.js"></script>
{/literal}
<!-- InstanceEndEditable -->
</head>

<body {if $ultimo eq true} onload="javascript:cargar_ultimo();"{/if}">

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

    <!-- InstanceEndEditable -->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                              <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                    {if $mensaje neq ""}{$mensaje}{/if}
                                    <form action="" method="post" name="form1" id="form1" onsubmit="javascript:guardar_ultimo();">
                                          <div class="form-group">
                                          <label for="nombre">Código</label>
                                          <input name="codigo" type="text" class="form-control"  placeholder="Código del Producto" id="codigo" value="{$codigo}"/>
                                          </div>
                                          <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input name="nombre" type="text" class="form-control"  placeholder="Título del Producto" id="nombre" value="{$nombres}"/>
                                          </div>
                                    
                                          <div class="form-group">
                                          <label for="enlace">Prioridad</label>
                                          <input name="prioridad" type="text" class="form-control" id="prioridad" value="{$prioridad|escape:'html'}" size="71" maxlength="4" />
                                          </div>

                                          <div class="form-group">
                                          <label for="contenido">Descripci&oacute;n</label>
                                          <textarea name="descripcion" cols="70" rows="6" class="form-control" id="descripcion"  wrap="physical">{$descripcion}</textarea>
                                          </div>

                                          <div class="form-group">
                                          <a href="/admin/producto/index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>
                                          <input onclick="javascript: return confirmar('esta seguro que desea guardar?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                                          <input onclick="javascript: location.href='/admin/producto/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos obligatorios
                                          </div>
                                    </form>
                                    </div>
                            <div class="col-lg-6 col-md-6">
                            <div class="well">
                                <h4>Información adicional sobre la creación de Productos</h4>
                                <p>"Llene los campos con la información perteneciente al nuevo producto a ingresar. En el caso de editar, seleccione nuevamente la categoría, ya que se cambiará el valor insertado anteriormente por el perteneciente a la primera categoría que presenta el renglon de opciones."</p>                           
                            </div>
                            </div></div>
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
