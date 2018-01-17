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

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    {if $mensaje neq ""}{$mensaje}{/if}
                   <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="MM_validateForm('nombre','','R');return document.MM_returnValue">
                    <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" value="{$nombre2}" size="48" maxlength="100" />
                    </div>
                    <div class="form-group">
                    <label for="imagen">Imagen</label>
                   <input  type="file" name="archivo" multiple id="archivo" class="file-loading"/>
                    </div>
                    <div class="form-group">
                        <input name="envio" type="submit" class="btn btn-success" id="button" onclick="javascript: return confirmar('¿Está seguro que desea guardar?');" value="Enviar" />
                        <input name="button2" type="button" class="btn btn-default" id="button2" onclick="javascript: location.href='/admin/{$carpeta}/detalle.php?id={$id}'" value="Cancelar" />
                    </div>
                   </form>

                   <div class="col-lg-6 col-md-6">
                   </div>

               </div>
            </div>
        </div>
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
