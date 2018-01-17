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
                                    <div class="col-lg-6 col-md-6">
                                    {if $mensaje neq ""}{$mensaje}{/if}
                                    <form action="" method="post" name="form1" class="normal" id="form1" onsubmit="MM_validateForm('nombre','','R');return document.MM_returnValue">
                                          <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input  onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del enlace*" value="{$nombres}">
                                          </div>
                                          <div class="form-group">
                                          <label for="etiqueta">Etiqueta</label>
                                          <input  onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="etiqueta" id="etiqueta" placeholder="Etiqueta del enlace*" value="{$etiqueta}">
                                          </div>

                                          <div class="form-group">
                                          <label for="tipo">&Aacute;rea</label>
                                          <select class="form-control" name="tipo" id="tipo">
                                               <option {if $tipo eq "normal"} selected='selected'{/if} value="normal">Normal</option>
                                              <option {if $tipo eq "centro"} selected='selected'{/if} value="centro">Center</option>
                                              <option {if $tipo eq "arriba"} selected='selected'{/if} value="arriba">Top</option>
                                              <option {if $tipo eq "pie"} selected='selected'{/if} value="pie">Footer</option>

                                            </select>
                                          </div>

                                          <div class="form-group">
                                          <label for="descripcion">Descripci&oacute;n</label>
                                          <textarea  type="text" class="form-control" name="descripcion" id="descripcion" placeholder="descripción larga para el SEO">{$descripcion}</textarea>
                                          </div>

                                          <div class="form-group">
                                          <label for="claves">Palabras Claves</label>
                                          <input onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="claves" id="claves" placeholder="Palabras claves para SEO ej: glass, auto" value="{$claves}">
                                          </div>

                                          <div class="form-group">
                                          <label for="prioridad">Orden</label>
                                          <input onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="prioridad" id="prioridad" placeholder="Posición del enlace*" value="{$prioridad}">
                                          </div>

                                          <div class="form-group">
                                          <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>
                                          <input onclick="javascript: return confirmar('Are you sure you want to save?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                                          <input onclick="javascript: location.href='/admin/link/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos obligatorios
                                          </div>
                                    </form>
                                    </div>
                            <div class="col-lg-6 col-md-6">
                            <div class="well">
                                <h4>Información adicional sobre la creación de enlaces</h4>
                                <p>Para crear enlaces es importante tener en cuenta que "Nombre" es el nombre que se publicará en el enlace de la web, mientras que la sección "Etiqueta" aparecerá en el título de la página.

"Área" es la opción para determinar la ubicaci&oacute;n del enlace en las diferentes secciones del  sitio web. Fácilmente padr&aacute;  identificar el lugar dondo ser&aacute; impreso el enlace por su nombre en la entrada de selección.

Es muy importante que tome unos minutos para insertar la "Descripción" y las "Palabras clave", estos dos influencian fuertemente lo que se refiere a la indexación de SEO y Google.</p>
                            </div>
                            </div></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
          </div>
    <!-- InstanceEndEditable -->

            <!-- InstanceBeginEditable name="insertar" -->&nbsp;<!-- InstanceEndEditable -->


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
