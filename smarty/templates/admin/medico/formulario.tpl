<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" -->

{include file='admin/layouts/head2.tpl'}
{literal}
<link rel="stylesheet" type="text/css" media="all" href="/calendario/calendar-blue.css" title="blue" />
<script type="text/javascript" src="/calendario/calendar.js"></script>
<script type="text/javascript" src="/calendario/lang/calendar-en.js"></script>
<script type="text/javascript" src="/calendario/calendar-setup.js"></script>
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
	window.onload = function()
	{
		var editor = CKEDITOR.replace( 'contenido',
			{
		toolbar :
			[
            		['Font','FontSize','TextColor','RemoveFormat','-','Table','Image','Source','Templates' ],'/',

            		['Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link','Unlink'],['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],['Maximize', 'ShowBlocks']

        		]

    		}
		);
		CKFinder.setupCKEditor( editor, '../../ckfinder/' ) ;
	};
</script>

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

    <!-- InstanceEndEditable -->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            	<div class="row">
                                    <div class="col-lg-6 col-md-6">
                                    {if $mensaje neq ""}{$mensaje}{/if}
                                    <form action="" method="post" name="form1" id="form1" onsubmit="MM_validateForm('nombre','','R','f_date_c','','R');return document.MM_returnValue">
                                          <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input name="nombre" type="text" class="form-control"  placeholder="Nombre del Especialista" id="nombre" value="{$nombres}"/>
                                          </div>

                                          <div class="form-group">
                                          <label for="sede">Sede</label>
                                          <select name="sede" class="form-control"  id="sede">
                                            {section name=j  loop=$listado2}
                                            <option {if $sede eq $listado2[j].nombre_sede || $sede eq $listado2[j].id_sede} selected='selected'{/if} value="{$listado2[j].id_sede}">{$listado2[j].nombre_sede}</option>
                                            {/section}
                                          </select>
                                          </div>
																					
                                          <div class="form-group">
                                          <label for="especialidad">Especialidad</label>
                                          <select name="especialidad" class="form-control"  id="especialidad">
                                            {section name=i  loop=$listado1}
                                            <option {if $especialidad eq $listado1[i].nombre_fac || $especialidad eq $listado1[i].id_fac} selected='selected'{/if} value="{$listado1[i].id_fac}">{$listado1[i].nombre_fac}</option>
                                            {/section}
                                          </select>
                                          </div>
                                          
                                          <div class="form-group">
                                          <label for="contenido">Descripción</label>
                                          <textarea name="contenido" cols="70" rows="6" class="normalContenido" id="contenido"  wrap="physical">{$contenido}</textarea>
                                          </div>
                                          <!--
                                            
                                             <div class="form-group">
                                          <label for="fecha">Fecha</label>
                                          <div class='input-group date' id='datetimepicker'>
                                          <input name="fecha" type="text" class="form-control"  placeholder="xx/xx/xxxx" id="fecha" value="{$fecha}"/>

                                          <span class="input-group-addon" style="background-color:transparent; border:transparent; color:#fff;">
                                               <span class="glyphicon glyphicon-calendar"></span>
                                          </span>-->
                                          {literal}
                                            <!--    <script type="text/javascript">
                                                    $(function () {
                                                    $('#datetimepicker').datetimepicker({
                                                    format: 'DD/MM/YYYY'
                                                    });
                                                });
                                                </script>-->
                                         {/literal}

                                         <!--</div>-->
                                          

                                          <div class="form-group">
                                          <label for="orden">Orden</label>
                                          <input onkeypress="javascript: return validarletrasnum(event);" name="prioridad" type="text" class="form-control" class="normalContenido" id="prioridad" value="{$prioridad}"/>
                                          </div>

                                          <div class="form-group">
                                          <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>
                                          <input onclick="javascript: return confirmar('esta seguro que desea guardar?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                                          <input onclick="javascript: location.href='/admin/medico/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos obligatorios
                                          </div>
                                    </form>
                                    </div>
                            <div class="col-lg-6 col-md-6">
                            <div class="well">
                                <h4>Información adicional sobre la creación de Especialista</h4>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>                            </div>
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
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <script src="/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="/moment-develop/moment.js"></script>
    <script type="text/javascript" src="/datetimepicker/src/js/bootstrap-datetimepicker.js"></script>-->
    <!-- Custom Theme JavaScript -->
    <script src="/dist/js/sb-admin-2.js"></script>
	<!-- InstanceBeginEditable name="pie" --><!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
