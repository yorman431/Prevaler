<?php
/* Smarty version 3.1.29, created on 2018-02-16 17:12:57
  from "D:\Websites\Prevaler\smarty\templates\cita_online.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a871119e89ea3_62227732',
  'file_dependency' => 
  array (
    '44b70a6b8c974fbf3e23996aeb8ff14e041a54e0' => 
    array (
      0 => 'D:\\Websites\\Prevaler\\smarty\\templates\\cita_online.tpl',
      1 => 1518719034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/botonera.tpl' => 1,
    'file:layout/banner.tpl' => 1,
    'file:layout/publicidad.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_5a871119e89ea3_62227732 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
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
            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sede']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['sede']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_sede'];?>
"><?php echo $_smarty_tpl->tpl_vars['sede']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_sede'];?>
</option>
            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
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

          <div id="atencion" class="alert" align="left">
            <strong>Recuerde el día de la cita, traer:</strong> 
            <br>
            <ul>
              <li>Copia de la cédula del titular.</li>
              <li>Copia de la cédula del paciente o partida de nacimiento del niño o niña.</li>
              <li>Carnet de trabajo, en caso de pertenecer a pólizas colectivas.</li>
            </ul>
          </div>

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
              <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['seguro']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['seguro']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_seg'];?>
"><?php echo $_smarty_tpl->tpl_vars['seguro']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_seg'];?>
</option>
              <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
            </select>
          </div>
          <div id="cargar" align="center" style="display: none;"><img src="/imagenes/loading.gif"></div>
          <div id="seguro_desc"></div>
        </div>

        <div class="row" id="visible2"><div class="col-xs-12" id="form_resp"><h4><?php echo $_smarty_tpl->tpl_vars['mensaje3']->value;?>
</h4></div></div>

        <div class="row">
          <div class="col-xs-6 col-xs-offset-6">
            <button class="btn-info" name="cotizar" type="submit" id="cotizar" value="Enviar2" onclick="javascript: validar_cita();" style="display: none;">ENVIAR</button>
          </div>
        </div>


      </form> 
    </div>
  </div>

  <div class="row publicidad">  <!-- Contenedor de Banner Publicitario-->

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
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
                    <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sede']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['sede']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_sede'];?>
"><?php echo $_smarty_tpl->tpl_vars['sede']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_sede'];?>
</option>
                    <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
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
              <h4 class="fuente_morada"><?php echo $_smarty_tpl->tpl_vars['mensaje2']->value;?>
</h4>
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
  
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</div>

<?php echo '<script'; ?>
 src="/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/docs.min.js"><?php echo '</script'; ?>
>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<?php echo '<script'; ?>
 src="/assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


  <?php echo '<script'; ?>
 type="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
      $('#myModal').focus()
    })
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/javascript">
      $(document).ready(function(){
        $('a.transicion').click(function(e){
          e.preventDefault();
          enlace = $(this).attr('href');
          $('html, body').animate({
            scrollTop: $(enlace).offset().top-100
          }, 1000);
        });
      });
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">       /// resalta las opcion seleccionada
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
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
      $(document).ready(function(){                             
        $('input#fecha').change(function(e){                            
          if (document.getElementById("fecha").value == "") {
            document.getElementById("fecha").placeholder = "Fecha de Nacimiento:";
          } else {
            document.getElementById("fecha").placeholder = "";
          }
        })                                                      
      });
    <?php echo '</script'; ?>
>





  </body>
</html>
<!-- Fin Pie de Página
================================================== -->

<?php }
}
