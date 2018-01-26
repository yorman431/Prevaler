<?php
/* Smarty version 3.1.29, created on 2017-12-19 18:14:07
  from "/Applications/MAMP/htdocs/prevaler/smartylib/templates/presupuesto.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a3948df8b0e99_05692112',
  'file_dependency' => 
  array (
    '35ba92f9a81f29200c99b9ccf2fdbb44e44730f3' => 
    array (
      0 => '/Applications/MAMP/htdocs/prevaler/smartylib/templates/presupuesto.tpl',
      1 => 1513630695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/botonera.tpl' => 1,
    'file:layout/banner.tpl' => 1,
    'file:layout/publicidad.tpl' => 1,
    'file:layout/contacto.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_5a3948df8b0e99_05692112 ($_smarty_tpl) {
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
    <div class="col-xs-10 col-xs-pull-1 col-xs-push-1 col-md-8 col-md-pull-2 col-md-push-2 col-lg-6 col-lg-pull-3 col-lg-push-3">

      <form class="form-horizontal" role="form" action="/formulario.php" method="post" name="presupuesto" id="presupuesto">

        <div class="row">
          <div class="form-group no_padding1">
          <i class="fa fa-circle color_naranja" aria-hidden="true"></i>
          <span>Datos del Paciente</span>
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="text" name="nombre" id="nombre" placeholder="Nombres" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="text" rows="3" name="apellido" id="apellido" placeholder="Apellidos" value="" required="required">
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

        </div>

        <div class="row">
          <div class="col-sm-6">
            <a href="#visible1" class="btn-info" onclick="mostrar1();">Cotizar con póliza</a>
          </div>
          <div class="col-sm-6">
            <a href="#visible2" class="btn-info" onclick="mostrar2();">Cotizar Por Medios Propios</a>
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
          <input  type="text" name="nombre_pol" id="nombre_pol" placeholder="Titular de la Póliza" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="number" rows="3" name="cedula_pol" id="cedula_pol" placeholder="Cédula del Titular de la Póliza" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <select id="seguro" name="seguro" required="required">
            <option value="Seguro">Seguro</option>
          </select>
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="text" id="empresa" name="empresa" placeholder="Empresa" value="" required="required">
        </div>
            
        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="text" name="medico" id="medico" placeholder="Médico" value="" required="required">
        </div>
           
        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="text" rows="3" name="diagnostico" id="diagnostico" placeholder="Diagnóstico" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="text" rows="3" name="procedimiento" id="procedimiento" placeholder="Procedimiento por" value="" required="required">
        </div>
        
        </div>

        
        <!--  SI PRESIONA COTIZAR POR MEDIOS PROPIOS -->

        <div class="row" id="visible2" style="display: none;">

          <div class="form-group no_padding1">
          <i class="fa fa-circle color_naranja" aria-hidden="true"></i>
          <span>Por Medios Propios</span>
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="text" id="empresa" name="empresa" placeholder="Empresa" value="" required="required">
        </div>
            
        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input  type="text" name="medico" id="medico" placeholder="Médico" value="" required="required">
        </div>
           
        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="text" rows="3" name="diagnostico" id="diagnostico" placeholder="Diagnóstico" value="" required="required">
        </div>

        <div class="form-group no_padding1">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <input type="text" rows="3" name="procedimiento" id="procedimiento" placeholder="Procedimiento por" value="" required="required">
        </div>
        
        </div>

        <div class="row">
          <div class="col-xs-6 col-xs-offset-6">
            <button class="btn-info" name="cotizar" type="submit" id="cotizar" value="cotizar">ENVIAR</button>
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

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/contacto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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




  </body>
</html>
<!-- Fin Pie de Página
================================================== -->

  <?php }
}
