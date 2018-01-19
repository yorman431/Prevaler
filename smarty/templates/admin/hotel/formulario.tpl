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

      var editor2 = CKEDITOR.replace( 'condiciones',
          {
            toolbar :
                [
                  ['Font','FontSize','TextColor','RemoveFormat','-','Table','Image','Source','Templates' ],'/',

                  ['Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link','Unlink'],['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],['Maximize', 'ShowBlocks']

                ]

          }
      );
      CKFinder.setupCKEditor( editor2, '../../ckfinder/' ) ;
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
                    <label for="nombre">Estado</label>
                    <input name="estado" type="text" class="form-control"  placeholder="Estado de la Sede" id="estado" value="{$estado}" required="required" />
                  </div>

                  <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input name="ciudad" type="text" class="form-control"  placeholder="Ciudad de la Sede" id="ciudad" value="{$ciudad}" required="required"/>
                  </div>

                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input name="nombre" type="text" class="form-control"  placeholder="Nombre de la Sede" id="nombre" value="{$nombres}" required="required"/>
                  </div>

                  <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input name="telefono" type="text" class="form-control" placeholder="Teléfonos de Contacto" id="telefono" value="{$telefono}" required="required"/>
                  </div>


                  <div class="form-group">
                    <label for="prioridad">Prioridad</label>
                    <input onkeypress="return validarletrasnum(event);" name="prioridad" type="number" class="form-control normalContenido" id="prioridad" value="{$prioridad}" required="required"/>
                  </div>

                  <div class="form-group">
                    <label for="latitud">Latitud</label>
                    <input name="latitud" type="number" step="any" class="form-control" id="latitud" value="{$latitud}" required="required"/>
                  </div>

                  <div class="form-group">
                    <label for="longitud">Longitud</label>
                    <input name="longitud" type="number" step="any" class="form-control" id="longitud" value="{$longitud}" required="required"/>
                  </div>

                  <div class="form-group">
                    <label for="ubicacion">Ubicación</label>
                    <input name="ubicacion" type="text" class="form-control"  placeholder="Ubicación de la Sede" id="ubicacion" value="{$ubicacion}" required="required"/>
                  </div>

                  <div class="form-group">
                    <label for="contenido">Descripción</label>
                    <textarea name="contenido" cols="70" rows="6" class="normalContenido" id="contenido"  wrap="physical" required="required">{$descripcion}</textarea>
                  </div>

                  {if isset($id)}
                    <div id="servicios">
                      <label for="servTitulo">Servicios</label>
                      {if $servicios != ''}
                        {foreach $servicios as $servicio}
                          <div id="servicio{$servicio.id}" class="form-group">
                            <h5><strong>{$servicio.titulo|upper} &nbsp;<i class="fa fa-pencil" onclick="mostrarServicio({$servicio.id})"></i>&nbsp;&nbsp;<i class="fa fa-trash" onclick="eliminarServicio({$servicio.id})"></i></strong></h5>
                          </div>
                        {/foreach}
                      {/if}
                    </div>

                    <div class="form-group">
                      <input class="form-control" name="serv_Titulo" id="servTitulo" placeholder="Titulo" value="">
                      <textarea class="form-control" name="serv_Descripcion" id="servDescripcion" rows="3" placeholder="Descripción"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="" class="sr-only"></label>
                      <div id="serviceButton">
                        <button type="button" class="btn btn-success" onclick="agregarServicio({$id})"><i class="fa fa-plus"></i>&nbsp;&nbsp;Guardar</button>
                      </div>
                    </div>
                  {/if}

                  <div class="form-group">
                    <label for="claves">Claves</label>
                    <input name="claves" type="text" class="form-control"  placeholder="Claves para el SEO" id="claves" value="{$claves}" required="required"/>
                  </div>

                  <div class="form-group">
                    <label for="principal">Principal</label>
                    <select name="principal" id="principal">
                      <option {if $principal eq "si"} selected='selected'{/if} value="si">S&iacute;</option>
                      <option {if $principal eq "no"} selected='selected'{/if} value="no">No</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <!--<div class='input-group date' id='datetimepicker'>-->
                    <input name="fecha" type="text" class="form-control"  placeholder="xx/xx/xxxx" id="fecha" value="{$fecha}" required="required"/>

                    <!--</div>-->
                    <!--<span class="input-group-addon" style="background-color:transparent; border:transparent; color:#fff;">
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

                  </div>

                  <div class="form-group group-speciality">
                    <label for="especialidad">Especialidades</label>
                    <div>
                      {section name=i loop=$especialidad}
                        <div class="especialidad_admin">
                          <div class="nombre_especialidad">
                            <input type="checkbox" name="especialidad{$especialidad[i].id_fac}" id="especialidad{$especialidad[i].id_fac}" title="{$especialidad[i].etiqueta_fac}" {if $especialidad[i].encendido eq "on"} checked="checked" {/if} />
                            {$especialidad[i].nombre_fac}
                          </div>
                          <div class="fotos5">
                            <i class="fa {$especialidad[i].etiqueta_fac} color-fa"></i>
                          </div>
                        </div>
                      {/section}
                    </div>
                  </div>



                  <div class="col-xs-12 form-group" style="margin-top: 20px;">
                    <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>
                    <input onclick="javascript: return confirmar('esta seguro que desea guardar?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                    <input onclick="javascript: location.href='/admin/contenido/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos obligatorios
                  </div>
                </form>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="well">
                  <h4>Información adicional sobre la creación de Sedes</h4>
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
<script src = "/js/adminsede.js"></script>
</body>

</html>
