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
                                          <label for="categoria">Categor??a</label>
                                          <input name="categoria" type="text" class="form-control"  placeholder="Categor??a de la Noticia*" id="categoria" value="{$categoria}"/>
                                          </div>
                                          <div class="form-group">
                                          <label for="titulo">T??tulo</label>
                                          <input name="titulo" type="text" class="form-control"  placeholder="T??tulo de la Noticia*" id="titulo" value="{$titulo}"/>
                                          </div>
                                         <div class="form-group">
                                          <label for="subtitulo">Sub-t??tulo</label>
                                          <input name="subtitulo" type="text" class="form-control"  placeholder="Sub-t??tulo de la Noticia*" id="subtitulo" value="{$subtitulo}"/>
                                          </div>
                                         

                                          <div class="form-group">
                                          <label for="fecha">Fecha</label>
                                          <div class='input-group date'>
                                          <input name="fecha" type="text" class="form-control"  placeholder="xx/xx/xxxx" id="datetimepicker" value="{$fecha}"/>
                                          </div>
  
                                          </div>

    

                                          <div class="form-group">
                                          <label for="contenido">Contenido</label>
                                          <textarea name="contenido" cols="70" rows="6" class="normalContenido" id="contenido"  wrap="physical">{$contenido}</textarea>
                                          </div>

                                          <div class="form-group">
                                          <label for="autor">Autor</label>
                                          <input name="autor" type="text" class="form-control" class="form-control" id="autor" value="{$autor}"/>
                                          </div>

                                          <div class="form-group">
                                          <a href="index.php" class="btn btn-md btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ir atr&aacute;s</a>
                                          <input onclick="javascript: return confirmar('esta seguro que desea guardar?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                                          <input onclick="javascript: location.href='/admin/noticia/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos obligatorios
                                          </div>
                                    </form>
                                    </div>
                            <div class="col-lg-6 col-md-6">
                            <div class="well">
                                <h4>Informaci??n adicional sobre la creaci??n de la Noticia</h4>
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
    {literal}
    <script type="text/javascript">
        $(function () {
        $('#datetimepicker').datetimepicker({
        format: 'DD/MM/YYYY'
        });
    });
    </script>
    {/literal}
    <!-- Bootstrap Core JavaScript -->

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
