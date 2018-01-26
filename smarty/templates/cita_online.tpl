{include file="layout/header.tpl"}

{include file="layout/botonera.tpl"}

{include file="layout/banner.tpl"}
    
<div class="container-fluid">

  <div class="formulario">
    <div class="col-xs-12" align="center">
      <span class="titulo">SOLICITUD DE CITA</span>
    </div>
    <div class="col-xs-10 col-xs-pull-1 col-xs-push-1 col-md-4 col-md-pull-4 col-md-push-4">

      <form class="form-horizontal" role="form" action="/cita_online.php#cita" method="post" name="cita" id="cita">

        <div class="row">

          <div class="form-group no_padding1">
          <i class="fa fa-circle color_naranja" aria-hidden="true"></i>
          <span>Datos del Paciente</span>
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="text" name="nombre" id="nombre" placeholder="Nombres y Apellidos" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="text" rows="3" name="cedula" id="cedula" placeholder="Cédula" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="date" id="fecha" name="fecha" placeholder="Fecha de Nacimiento:" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="email" id="email" name="email" placeholder="Email" value="" required="required">
        </div>
            
        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="tel" name="telefono" id="telefono" placeholder="Teléfono" value="" required="required">
        </div>
           
        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="text" rows="3" name="direccion" id="direccion" placeholder="Domicilio" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="text" rows="3" name="motivo" id="motivo" placeholder="Motivo de la Consulta (Indicar Síntomas)" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <select id="sede" name="sede" required="required" onchange="cargar_especialidad();">
            <option selected hidden value="">Seleccione la Sede</option>
            {section name=i  loop=$sede}
              <option value="{$sede[i].nombre_sede}">{$sede[i].nombre_sede}</option>
            {/section}
          </select>
        </div>

        <div class="form-group no_padding1" id="input_especialidad" style="display: none;">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <select id="especialidad" name="especialidad" required="required" onchange="cargar_medico();">
          </select>
        </div>

        <div class="form-group no_padding1" id="input_medico" style="display: none;">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <select id="medico" name="medico" required="required">
          </select>
        </div>

        <div id="carga" align="center" style="display: none;"><img src="/imagenes/loading.gif"></div>

        </div>

        <div class="row">
          <div class="col-sm-6">
            <a class="btn btn-info" onclick="mostrar1();" style="cursor: pointer;">Cita con póliza</a>
          </div>
          <div class="col-sm-6">
            <a class="btn btn-info" onclick="mostrar2();" style="cursor: pointer;">Cita sin póliza</a>
          </div>
        </div>

        <!--  SI PRESIONA CITA CON POLIZA  -->

        <div class="row" id="visible1" style="display: none;">
          <div class="form-group no_padding1">
            <i class="fa fa-circle color_naranja" aria-hidden="true"></i>
            <span>Datos de la Póliza</span>
          </div>

          <div class="form-group no_padding1">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <input type="text" name="nombre_pol" id="nombre_pol" placeholder="Titular de la Póliza" value="">
          </div>

          <div class="form-group no_padding1">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <input type="text" name="cedula_pol" id="cedula_pol" placeholder="Cédula del Titular de la Póliza" value="">
          </div>

          <div class="form-group no_padding1">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <input  type="text" id="empresa" name="empresa" placeholder="Empresa" value="">
          </div>

          <div class="form-group no_padding1">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <select id="seguro" name="seguro" onchange="mostrar_descripcion();">
              <option selected hidden value="">Seleccione la empresa Aseguradora</option>
              {section name=i  loop=$seguro}
                <option value="{$seguro[i].nombre_seg}">{$seguro[i].nombre_seg}</option>
              {/section}
            </select>
          </div>
          <div id="cargar" align="center" style="display: none;"><img src="/imagenes/loading.gif"></div>
          <div id="seguro_desc"></div>
        </div>

        <div class="row" id="visible2"><div class="col-xs-12" id="form_resp"><h4>{$mensaje3}</h4></div></div>

        <div class="row">
          <div class="col-xs-6 col-xs-offset-6">
            <button class="btn-info" name="cotizar" type="submit" id="cotizar" value="Enviar2" onclick="javascript: validar_cita();" style="display: none;">ENVIAR</button>
          </div>
        </div>


      </form> 
    </div>
  </div>

  <div class="row publicidad">  <!-- Contenedor de Banner Publicitario-->

    {include file="layout/publicidad.tpl"}
    
  </div>        <!-- Fin del Contenedor de Banner Publicitario-->

  <div class="row contacto">  <!-- Contenedor de Contacto-->

    <div class="col-xs-12" id="contacto">
      <div class="row">

        <hr class="color_morado">

        <div class="col-xs-12 titulo" align="center">
          <span class="fuente_morada">CONTACTO</span>
        </div>

        <div class="col-md-6">
          <form class="form-horizontal" role="form" action="/cita_online.php#contacto" method="post" name="contact" id="contact">
            <div class="panel panel-default panel-contacto">
              <div class="panel-heading"></div>
              <div class="panel-body">
          
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <input  type="text" name="nombre" id="nombre" placeholder="Nombre / Empresa" value="" required="required">
                </div>
            
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <input  type="text" name="telefono" id="telefono" placeholder="Teléfono" value="" required="required">
                </div>
          
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <input  type="email" id="email" name="email" placeholder="Email" value="" required="required">
                </div>
           
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <select id="sede" name="sede" required="required">
                    <option selected hidden value="">Seleccione la Sede</option>
                    {section name=i  loop=$sede}
                      <option value="{$sede[i].nombre_sede}">{$sede[i].nombre_sede}</option>
                    {/section}
                  </select>
                </div>
           
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <input type="text" rows="3" name="comentario" id="comentario" placeholder="Mensaje" value="" required="required">
                </div>
  
              </div>

              <div class="panel-footer" align="right">
                <div  class="col-xs-11 no_padding1">
                  <button onclick="javascript: return validarformulario();" name="enviar" type="submit" id="enviar" value="Enviar1" class="btn-info">
                    Enviar
                  </button>
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <h4 class="fuente_morada">{$mensaje2}</h4>
            </div>

          </form>
        </div>

    

        <div class="col-md-6">
          <div class="row"  align="center">

            <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Caracas
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 773.86.33)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            caracas@prevaler.com
            </span>

            <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Maracay
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 773.82.53)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            maracay@prevaler.com
            </span>

            <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Porlamar
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0295 400.94.00)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            porlamar@prevaler.com 
            </span>

            <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Valencia Norte
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 773.82.53)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            valencianorte@prevaler.com
            </span>

            <span>
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Valencia Sur
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 773.82.53)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            valenciasur@prevaler.com
            </span>
          
          </div>
        </div>
      </div>
    </div>

  </div>        <!-- Fin del Contenedor de Contacto-->
  
  {include file="layout/footer.tpl"}

</div>

<script src="/dist/js/bootstrap.min.js"></script>
<script src="/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

{literal}
  <script type="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
      $('#myModal').focus()
    })
  </script>

  <script type="text/javascript">
      $(document).ready(function(){
        $('a.transicion').click(function(e){
          e.preventDefault();
          enlace = $(this).attr('href');
          $('html, body').animate({
            scrollTop: $(enlace).offset().top-100
          }, 1000);
        });
      });
    </script>

    <script type="text/javascript">       /// resalta las opcion seleccionada
      $(document).ready(function(){       /// de cita con o sin poliza
        $('.btn').click(function(e){
          $('.btn').removeClass('btn-push');
          $(this).addClass('btn-push');
          if (document.getElementById("visible1").style.display == "none") {
            document.getElementById("empresa").required = "";
          } else {
            document.getElementById("empresa").required = "required";
          }
          $('#cotizar').css('display','block');
        })
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){                             
        $('input#fecha').change(function(e){                            
          if (document.getElementById("fecha").value == "") {
            document.getElementById("fecha").placeholder = "Fecha de Nacimiento:";
          } else {
            document.getElementById("fecha").placeholder = "";
          }
        })                                                      
      });
    </script>


{/literal}


  </body>
</html>
<!-- Fin Pie de Página
================================================== -->

