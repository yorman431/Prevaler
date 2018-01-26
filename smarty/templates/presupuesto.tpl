{include file="layout/header.tpl"}

{include file="layout/botonera.tpl"}

{include file="layout/banner.tpl"}

<div class="container-fluid">
  
  <div class="formulario">
    <div class="col-xs-12" align="center">
      <span class="titulo">PRESUPUESTO</span>
    </div>
    <div class="col-xs-10 col-xs-pull-1 col-xs-push-1 col-md-4 col-md-pull-4 col-md-push-4">

      <form class="form-horizontal" role="form" action="/presupuesto.php#atencion" method="post" name="presupuesto" id="presupuesto">

        <div class="row">
          <div id="atencion" class="alert" align="center">
            <strong>ATENCIÓN:</strong> Antes de hacer una solicitud de presupuesto de quirófano y/o estudios debe tener el informe médico u orden médica.
          </div>
          <div class="form-group no_padding1">
          <i class="fa fa-circle color_naranja" aria-hidden="true"></i>
          <span>Datos del Paciente</span>
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="text" name="nombre1" id="nombre1" placeholder="Nombres" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="text" rows="3" name="apellido1" id="apellido1" placeholder="Apellidos" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="text" rows="3" name="cedula1" id="cedula1" placeholder="RIF/Cédula" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="date" id="fecha1" class="fecha_null" name="fecha1" placeholder="Fecha de Nacimiento:" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="email" id="email" name="email" placeholder="Email" value="" required="required">
        </div>
            
        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="text" name="telefono" id="telefono" placeholder="Teléfono" value="" required="required">
        </div>
           
        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="text" rows="3" name="direccion1" id="direccion1" placeholder="Domicilio" value="" required="required">
        </div>

        </div>

        <div class="row">
          <div class="col-sm-6" align="center">
            <a class="btn btn-info" onclick="mostrar1();" style="cursor: pointer;">Cotizar con póliza</a>
          </div>
          <div class="col-sm-6" align="center">
            <a class="btn btn-info" onclick="mostrar2();" style="cursor: pointer;">Cotizar sin póliza</a>
          </div>
        </div>

        

        <!--    SI PRESIONA COTIZAR CON PÓLIZA  -->

        <div class="row" id="visible1" style="display: none;">

          <div class="form-group no_padding1">
            <i class="fa fa-circle color_naranja" aria-hidden="true"></i>
            <span>Datos de la Póliza</span>
          </div>

          <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="text" name="nombre_pol" id="nombre_pol" placeholder="Titular de la Póliza" value="">
          </div>

          <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input rows="3" type="text" name="cedula_pol" id="cedula_pol" placeholder="Cédula del Titular de la Póliza" value="">
          </div>

          <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <select id="seguro" name="seguro">
            <option selected hidden value="">Seleccione la empresa Aseguradora</option>
            {section name=i  loop=$seguro}
              <option value="{$seguro[i].nombre_seg}">{$seguro[i].nombre_seg}</option>
            {/section}
          </select>
          </div>
        
        </div>

        
        <!--  SI PRESIONA COTIZAR POR MEDIOS PROPIOS -->

        <div class="row" id="visible2" style="display: none;">

          <div class="form-group no_padding1">
          <i class="fa fa-circle color_naranja" aria-hidden="true"></i>
          <span>Por Medios Propios</span>
          </div>

        </div>

         <!--  SIEMPRE SE MUESTRA -->

        <div class="row mostrar_resto" style="display: none;">
          <div class="form-group no_padding1">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <input  type="text" id="empresa" name="empresa" placeholder="Empresa" value="" required="required">
          </div>
            
          <div class="form-group no_padding1">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <select id="sede" name="sede" required="required">
              <option selected hidden value="">Seleccione la Sede</option>
              {section name=i  loop=$sede}
                <option value="{$sede[i].nombre_sede}">{$sede[i].nombre_sede}</option>
              {/section}
            </select>
          </div>

          <div class="form-group no_padding1" id="input_especialidad">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <input type="text" id="especialidad" name="especialidad" required="required" placeholder="Especialidad Médica">
          </div>

          <div class="form-group no_padding1" id="input_medico">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <input type="text" id="medico" name="medico" required="required" placeholder="Médico de Preferencia">
          </div>

          <div id="carga" align="center" style="display: none;"><img src="/imagenes/loading.gif"></div>
           
          <div class="form-group no_padding1">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <input type="text" rows="3" name="diagnostico" id="diagnostico" placeholder="Diagnóstico (IDX), Ejemplo: Cefalea, Arritmia, Hernia Umbilical, ..." value="" required="required">
          </div>

          <div class="form-group no_padding1">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <input type="text" rows="3" name="procedimiento" id="procedimiento" placeholder="Procedimiento o Estudio, Ejemplo: Ecografía, Rayos X, ..." value="" required="required">
          </div>
        </div>

        <div class="row" id="visible3" style="display: none;">

          <div class="form-group no_padding1">
          <i class="fa fa-circle color_naranja" aria-hidden="true"></i>
          <span>Datos de Facturación</span>
          </div>

          <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="text" name="nombre2" id="nombre2" placeholder="Nombres" value="" required="required">
          </div>

          <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="text" rows="3" name="apellido2" id="apellido2" placeholder="Apellidos" value="" required="required">
          </div>

          <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="text" rows="3" name="cedula2" id="cedula2" placeholder="RIF/Cédula" value="" required="required">
          </div>

          <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="date" id="fecha2" class="fecha_null" name="fecha2" placeholder="Fecha de Nacimiento:" value="" required="required">
          </div>
           
          <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="text" rows="3" name="direccion2" id="direccion2" placeholder="Dirección (Debe ser igual a la del RIF)" value="" required="required">
          </div>

        </div>

        <div id="seguro_desc"></div>

        <div class="row"><div class="col-xs-12" id="form_resp"><h4>{$mensaje3}</h4></div></div>

        <div class="row" align="center">
          <div class="col-xs-6 col-xs-offset-6 no_padding1">
            <button class="btn-info" name="cotizar" type="submit" id="cotizar" value="Enviar2" onclick="javascript: validar_presupuesto();" style="display: none;">ENVIAR</button>
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
          <form class="form-horizontal" role="form" action="/presupuesto.php#contacto" method="post" name="contact" id="contact">
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
                  <button onclick="javascript: return validarformulario();" name="enviar" type="submit" id="enviar" value="Enviar1" class="btn-info">Enviar</button>
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

  $(document).ready(function(){
    $('.fa-arrow-up').click(function(){
      $('body, html').animate({
        scrollTop: '0px'
      }, 300);
    });

    $(window).scroll(function(){
      if( $(this).scrollTop() > 0 ){
        $('.fa-arrow-up').slideDown(500);
        $('.redes_sociales').addClass('redes_invisibles');
      } else {
        $('.fa-arrow-up').slideUp(500);
        $('.redes_sociales').removeClass('redes_invisibles');
      }
    });
  });
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

    <script type="text/javascript">                             /// resalta las opcion seleccionada     
      $(document).ready(function(){                             /// de presupuesto con o sin poliza
        $('.btn').click(function(e){                            /// y asigna requerido a varios inputs si
          $('.btn').removeClass('btn-push');                    /// esta en presupuesto sin poliza
          $(this).addClass('btn-push');
          if (document.getElementById("visible1").style.display == "none") {
            document.getElementById("nombre2").required = "required";
            document.getElementById("apellido2").required = "required";
            document.getElementById("cedula2").required = "required";
            document.getElementById("fecha2").required = "required";
            document.getElementById("direccion2").required = "required";
            document.getElementById("visible3").style.display = "block";
          } else {
            document.getElementById("nombre2").required = "";
            document.getElementById("apellido2").required = "";
            document.getElementById("cedula2").required = "";
            document.getElementById("fecha2").required = "";
            document.getElementById("direccion2").required = "";
            document.getElementById("visible3").style.display = "none";
          }
          $('#cotizar').css('display','block');
          $('.mostrar_resto').css('display','block');           
        })                                                     
      });
    </script>

    <script type="text/javascript">                             /// mientras el input con id fecha esté vacio
      $(document).ready(function(){                             /// muestra la cadena "Fecha de nacimiento:"
        $('input#fecha1').change(function(e){                            
          if (document.getElementById("fecha1").value == "") {
            document.getElementById("fecha1").placeholder = "Fecha de Nacimiento:";
          } else {
            document.getElementById("fecha1").placeholder = "";
          }
        })                                                      
      });
    </script>

    <script type="text/javascript">                             /// mientras el input con id fecha esté vacio
      $(document).ready(function(){                             /// muestra la cadena "Fecha de nacimiento:"
        $('input#fecha2').change(function(e){                            
          if (document.getElementById("fecha2").value == "") {
            document.getElementById("fecha2").placeholder = "Fecha de Nacimiento:";
          } else {
            document.getElementById("fecha2").placeholder = "";
          }
        })                                                      
      });
    </script>

{/literal}


  </body>
</html>
<!-- Fin Pie de Página
================================================== -->

  