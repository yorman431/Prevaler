<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" -->

{include file='admin/layouts/head2.tpl'}
{literal}
<link rel="stylesheet" href="/datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
<script type="text/javascript" src="/moment-develop/moment.js"></script>
<script type="text/javascript" src="/datetimepicker/src/js/bootstrap-datetimepicker.js"></script>
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
                                    <form action="" method="post" name="form1" id="form1" onsubmit="MM_validateForm('pregunta','','R','f_date_c','','R');return document.MM_returnValue">
                                          <div class="form-group">
                                          <label for="pregunta">Pregunta</label>
                                          <input name="pregunta" type="text" class="form-control"  placeholder="Pregunta" id="pregunta" value="{$pregunta}"/>
                                          </div>
                                          <div class="form-group">
                                          <label for="enlace">Prioridad</label>
                                          <input name="prioridad" type="text" class="form-control" id="prioridad" value="{$prioridad}" size="45" maxlength="20"/> 
                                          </div>
                                          <div class="form-group">
                                          <label for="subenlace">Pertenece</label>
                                          <select name="padre" id="padre" class="form-control">
                                             <option {if $padre eq "0"} selected='selected'{/if} value="0">&lt; Seleccione &gt;</option> 
                                            {section name=i loop=$listado}
                                            <option {if $padre eq $listado[i].pregunta_faq || $padre eq $listado[i].id_faq} selected='selected'{/if} value="{$listado[i].id_faq}">{$listado[i].pregunta_faq}</option> 
                                           {/section}
                                          </select> 
                                          </div>


                                          <div class="form-group">
                                          <label for="respuesta">Respuesta</label>
                                          <textarea name="respuesta" cols="70" rows="6" class="form-control" id="respuesta"  wrap="physical">{$respuesta}</textarea>
                                          </div>

                                          <div class="form-group">
                                          <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>
                                          <input onclick="javascript: return confirmar('esta seguro que desea guardar?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                                          <input onclick="javascript: location.href='/admin/faq/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos obligatorios
                                          </div>
                                    </form>
                                    </div>
                            <div class="col-lg-6 col-md-6">
                            <div class="well">
                                <h4>Información adicional sobre la creación de Preguntas</h4>
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
