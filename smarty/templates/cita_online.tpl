{include file="layout/header.tpl"}

{include file="layout/botonera.tpl"}

{include file="layout/banner.tpl"}
    
<div class="container-fluid">

  <div class="formulario">
    <div class="col-xs-12" align="center">
      <span class="titulo">SOLICITUD DE CITA</span>
    </div>
    <div class="col-xs-10 col-xs-pull-1 col-xs-push-1 col-md-4 col-md-pull-4 col-md-push-4">

      <form class="form-horizontal" role="form" action="/cita_online.php" method="post" name="presupuesto" id="presupuesto">

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
          <input type="number" rows="3" name="cedula" id="cedula" placeholder="Cédula" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="text" id="fecha" name="fecha" placeholder="Fecha de Nacimiento" value="" required="required">
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
              <option value="{$sede[i].id_sede}">{$sede[i].nombre_sede}</option>
            {/section}
          </select>
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <select id="especialidad" name="especialidad" required="required" onchange="cargar_medico();">
          </select>
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <select id="medico" name="medico" required="required">
          </select>
        </div>

        </div>

        <div class="row">
          <div class="col-sm-6">
            <a href="#visible1" class="btn-info" onclick="mostrar1();">Cita con póliza</a>
          </div>
          <div class="col-sm-6">
            <a href="#visible2" class="btn-info" onclick="mostrar2();">Cita sin póliza</a>
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
          <input  type="text" name="nombre_pol" id="nombre_pol" placeholder="Titular de la Póliza" value="">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="number" rows="3" name="cedula_pol" id="cedula_pol" placeholder="Cédula del Titular de la Póliza" value="">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="text" id="empresa" name="empresa" placeholder="Empresa" value="">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <select id="seguro" name="seguro">
            <option value="Seguro">Seguro</option>
          </select>
        </div>
        </div>

        <div class="row" id="visible2" style="display: none;"></div>

        <div class="row">
          <div class="col-xs-6 col-xs-offset-6">
            <button class="btn-info" name="cotizar" type="submit" id="cotizar" value="cotizar">ENVIAR</button>
          </div>
        </div>


      </form> 
    </div>
  </div>

  <div class="row publicidad">  <!-- Contenedor de Banner Publicitario-->

    {include file="layout/publicidad.tpl"}
    
  </div>        <!-- Fin del Contenedor de Banner Publicitario-->

  <div class="row contacto">  <!-- Contenedor de Contacto-->

    {include file="layout/contacto.tpl"}

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

{/literal}


  </body>
</html>
<!-- Fin Pie de Página
================================================== -->

