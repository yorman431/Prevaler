<?php
/* Smarty version 3.1.29, created on 2017-12-19 21:16:15
  from "/Applications/MAMP/htdocs/prevaler/smartylib/templates/sedes.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a39738f93d228_38364819',
  'file_dependency' => 
  array (
    'd98addcf77ab8fedb8ccd206c924e5398e1ed420' => 
    array (
      0 => '/Applications/MAMP/htdocs/prevaler/smartylib/templates/sedes.tpl',
      1 => 1513353495,
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
function content_5a39738f93d228_38364819 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<!-- InstanceBeginEditable name="contenido" -->
    
<div class="container-fluid">

  <div class="row sedes">

    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1">
     <div class="row">
       <div class="col-md-3 no_padding1" align="center">
         <span class="fuente_morada">SEDES PREVALER</span>
       </div>
       <div class="col-md-9 no_padding1" align="center">
         <span>Conoce nuestras especialidades y servicios, horarios, cobertura de seguros en cada una de nuestras sedes.</span>
       </div>
     </div>
   </div>

  </div>

  <div class="row ubicacion">
    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1">
     <div class="row">
        <div class="col-md-7">
          <img class="img-responsive" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['listado']->value[0]['directorio_image'];?>
">
          <h3>
            <i class="fa fa-circle " aria-hidden="true"></i>
            SEDE <?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>

          </h3>
          <P><?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
</P>
       </div>

       <div class="col-md-5">
          <?php echo $_smarty_tpl->tpl_vars['mapas']->value;?>

          <h3>
            <i class="fa fa-circle " aria-hidden="true"></i>
            Ubicaci??n y Contacto. 
          </h3>
          <P>
            <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['ubicacion']->value;?>

          </P>
          <p>
            <i class="fa fa-phone fa-lg" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>

          </p>
       </div>
     </div>
   </div>
  </div>

  <div class="row sedes" align="center">
    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 titulo no_padding1">
      <hr class="color_morado">
      <span class="fuente_morada">ESPECIALIDADES M??DICAS</span>
    </div>

    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 no_padding1">
      <div class="row">
        <div class="col-xs-6 col-md-4 col-lg-3" align="left">
          <div class="row especialistas">
                <div class="col-xs-12">
                  <ul class="nav" id="side-menu">
                    <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['especialidad']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                      <li>
                        <a id="<?php echo $_smarty_tpl->tpl_vars['especialidad']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_fac'];?>
" onclick="javascript: return faq3();" style="cursor:pointer;">
                          <?php echo $_smarty_tpl->tpl_vars['especialidad']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_fac'];?>

                          <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </li>
                    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>  
                  </ul>
                </div>
                <!-- /.sidebar-collapse -->
          </div>
        </div>

        <div class="col-xs-6 col-md-8 col-lg-9 ver_medico">
          <div class="row">
            <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['medico']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
              <div class="col-xs-11 panel_<?php echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['especialidad_med'];?>
" id="" style="display: none;">
                <img class="img-responsive img-circle" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
">
                <ul>
                  <span>Dr. <?php echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_med'];?>
</span>
                  <span><i class="fa fa-circle"></i><?php echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descripcion_med'];?>
</span>
                </ul>
              </div>
            <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12" style="margin-top: 50px;">
      <a href="cita_online.php" class="btn-info">SOLICITAR CITA</a>
    </div>
    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 titulo no_padding1">
      <hr class="color_morado">
      <span class="fuente_morada">NUESTROS SERVICIOS</span>
    </div>


    <div class="col-xs-12 col-md-6">
      <div class="row">
        <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
          <div class="panel-heading">
            <img class="img-responsive hidden-xs" src="imagenes/happy.png">
            <span>Asistencia M??dica Integral</span>
          </div>
          <div class="panel-body">
            <p>
              Contamos con m??dicos calificados de familia e internistas, soportados por 
              nuestro equipo de m??dicos especialistas y sub-especialistas, todos de 
              amplia experiencia.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-md-6">
      <div class="row">
        <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
          <div class="panel-heading">
            <img class="img-responsive hidden-xs" src="imagenes/happy.png">
            <span>Atenci??n M??dica Ambulatoria</span>
          </div>
          <div class="panel-body">
            <p>
              En nuestros centros usted podr?? realizarse procedimientos de rutina 
              ambulatorios con la atenci??n de calificadas enfermeras, tales como: 
              mediciones de tensi??n y temperatura, nebulizaciones, colocaci??n de 
              inyecciones, tratamientos intravenosos e hidrataci??n entre otras.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-md-6">
      <div class="row">
        <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
          <div class="panel-heading">
            <img class="img-responsive hidden-xs" src="imagenes/happy.png">
            <span>Medicina Ocupacional</span>
          </div>
          <div class="panel-body">
            <p>
              Este servicio est?? orientado para aquellas empresas que requieran realizar 
              estudios para sus empleados as?? como a los aspirantes a cargos. 
              Para ello contamos con especialistas que realizan evaluaciones de 
              pre-empleo, post-empleo, pre-vacacional, post- vacacional y 
              ex??menes peri??dicos de salud o tutoriales.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-md-6">
      <div class="row">
        <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
          <div class="panel-heading">
            <img class="img-responsive hidden-xs" src="imagenes/happy.png">
            <span>Servicio de Laboratorio General y Especializado</span>
          </div>
          <div class="panel-body">
            <p>
              Nos preocupamos en ofrecer al m??dico y al paciente pruebas de alta 
              confiabilidad, gracias a la constante modernizaci??n de los equipos t
              ecnol??gicos y a sus profesionales altamente calificados. Realizamos los 
              diferentes ex??menes de rutina y pruebas especiales.
              Contamos con unidades tanto en nuestras sedes de Valencia de la 
              Urb. Camoruco y en Maracay.
            </p>
          </div>
        </div>
      </div>
    </div>

        <div class="col-xs-12 col-md-6">
      <div class="row">
        <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
          <div class="panel-heading">
            <img class="img-responsive hidden-xs" src="imagenes/happy.png">
            <span>Servicio de Radiolog??a General</span>
          </div>
          <div class="panel-body">
            <p>
              Realizamos las diferentes im??genes de radiolog??a como apoyo al 
              diagn??stico de nuestros m??dicos. Contamos con equipos de ??ltima 
              generaci??n. Nuestro equipo m??dico est?? conformado por profesionales 
              altamente capacitados en el ??rea de imagenolog??a.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-md-6">
      <div class="row">
        <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
          <div class="panel-heading">
            <img class="img-responsive hidden-xs" src="imagenes/happy.png">
            <span>Servicio de Ecograf??a</span>
          </div>
          <div class="panel-body">
            <p>
              Realizamos estudios convencionales en general, como: ecosonogramas 
              abdominales, p??lvicos y renales y estudios especiales tales como: doppler 
              renales, hep??ticos, m??sculo esquel??ticos, mamarios, tiroideo, prost??tico, 
              testicular y partes blandas.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="col-xs-12">
      <button href="" onclick="history.back()" class="btn-info">VOLVER</button>
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

  <!-- Pie de P??gina
================================================== -->

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
      $('[id=especialidad-]').click(function(){
        var id_selector = $(this).attr("id");
        var id = id_selector.substr(id_selector.length -1);
        $('[id=medico-'+id+']').css('display', 'block');
        $('[id^=medico-]').css('display', 'none');
      });
    });
  <?php echo '</script'; ?>
>




  </body>
</html>
<!-- Fin Pie de P??gina
================================================== -->
<?php }
}
