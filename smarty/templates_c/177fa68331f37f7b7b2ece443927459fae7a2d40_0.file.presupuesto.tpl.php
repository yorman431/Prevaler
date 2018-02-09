<?php
/* Smarty version 3.1.29, created on 2018-01-26 20:06:56
  from "D:\Websites\Prevaler\smarty\templates\presupuesto.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a6b8a604d0bf2_52325267',
  'file_dependency' => 
  array (
    '177fa68331f37f7b7b2ece443927459fae7a2d40' => 
    array (
      0 => 'D:\\Websites\\Prevaler\\smarty\\templates\\presupuesto.tpl',
      1 => 1516996301,
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
function content_5a6b8a604d0bf2_52325267 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['seguro']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['seguro']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_seg'];?>
"><?php echo $_smarty_tpl->tpl_vars['seguro']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_seg'];?>
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
              <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sede']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['sede']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_sede'];?>
"><?php echo $_smarty_tpl->tpl_vars['sede']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_sede'];?>
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

        <div class="row"><div class="col-xs-12" id="form_resp"><h4><?php echo $_smarty_tpl->tpl_vars['mensaje3']->value;?>
</h4></div></div>

        <div class="row" align="center">
          <div class="col-xs-6 col-xs-offset-6 no_padding1">
            <button class="btn-info" name="cotizar" type="submit" id="cotizar" value="Enviar2" onclick="javascript: validar_presupuesto();" style="display: none;">ENVIAR</button>
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
                  <button onclick="javascript: return validarformulario();" name="enviar" type="submit" id="enviar" value="Enviar1" class="btn-info">Enviar</button>
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
 type="text/javascript">                             /// resalta las opcion seleccionada     
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
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">                             /// mientras el input con id fecha esté vacio
      $(document).ready(function(){                             /// muestra la cadena "Fecha de nacimiento:"
        $('input#fecha1').change(function(e){                            
          if (document.getElementById("fecha1").value == "") {
            document.getElementById("fecha1").placeholder = "Fecha de Nacimiento:";
          } else {
            document.getElementById("fecha1").placeholder = "";
          }
        })                                                      
      });
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">                             /// mientras el input con id fecha esté vacio
      $(document).ready(function(){                             /// muestra la cadena "Fecha de nacimiento:"
        $('input#fecha2').change(function(e){                            
          if (document.getElementById("fecha2").value == "") {
            document.getElementById("fecha2").placeholder = "Fecha de Nacimiento:";
          } else {
            document.getElementById("fecha2").placeholder = "";
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
