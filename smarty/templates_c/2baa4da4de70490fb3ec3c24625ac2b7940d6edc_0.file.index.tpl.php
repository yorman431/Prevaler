<?php
/* Smarty version 3.1.29, created on 2017-12-20 14:53:43
  from "/Applications/MAMP/htdocs/prevaler/smartylib/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a3a6b678877e0_07251769',
  'file_dependency' => 
  array (
    '2baa4da4de70490fb3ec3c24625ac2b7940d6edc' => 
    array (
      0 => '/Applications/MAMP/htdocs/prevaler/smartylib/templates/index.tpl',
      1 => 1513778021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/botonera.tpl' => 1,
    'file:layout/banner.tpl' => 1,
    'file:layout/FAQ.tpl' => 1,
    'file:layout/noticias.tpl' => 1,
    'file:layout/contacto.tpl' => 2,
    'file:layout/publicidad.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_5a3a6b678877e0_07251769 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">  <!-- Contenedor Principal-->

	<div class="row sedes" id="sedes">			<!-- Contenedor de Sedes-->

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

   <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 no_padding1">
     <div class="row">

      <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['hotel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) < '2') {?>
          <div class="col-md-6 efecto-hover">
            <a href="sedes.php?id=<?php echo $_smarty_tpl->tpl_vars['hotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_sede'];?>
" title="Ver Detalles">
              <div class="img-sede">
                <img class="img-responsive" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['hotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
">
              </div>
              <div class="ver_sede" align="center">
                <h3><?php echo $_smarty_tpl->tpl_vars['hotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_sede'];?>
</h3>
                <h4>(Edo. <?php echo $_smarty_tpl->tpl_vars['hotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['estado_sede'];?>
)</h4>
                <img  class="img-responsive" src="/imagenes/flecha_sede.png">
              </div>
            </a>
          </div>
        <?php } else { ?>
          <div class="col-md-4 efecto-hover">
            <a href="sedes.php?id=<?php echo $_smarty_tpl->tpl_vars['hotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_sede'];?>
" title="Ver Detalles">
              <div class="img-sede">
                <img class="img-responsive" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['hotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
">
              </div>
              <div class="ver_sede" align="center">
                <h3><?php echo $_smarty_tpl->tpl_vars['hotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_sede'];?>
</h3>
                <h4>(<?php echo $_smarty_tpl->tpl_vars['hotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['estado_sede'];?>
)</h4>
                <img  class="img-responsive" src="/imagenes/flecha_sede.png">
              </div>
            </a>
          </div>
        <?php }?>
      <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>

     </div>

   </div>
        
	</div>						<!-- Fin del Contenedor de Sedes-->

  <div class="row publicidad">  <!-- Contenedor de Banner Publicitario-->

          <div class="col-xs-12 no_padding1">
            <div id="publicidad3" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators" style="display:none;">
                      <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                      <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['publicidad3']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['cont']->value == "0") {?>class="active"<?php }?>></li>
                          <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                      <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
                  </ol>

                  <div class="carousel-inner" role="listbox">
                      <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                      <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['publicidad3']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <div <?php if ($_smarty_tpl->tpl_vars['cont']->value == "0") {?> class="item active" <?php } else { ?> class="item" <?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['publicidad3']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['url_dir'];?>
" target="_blank">
                            <img class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['publicidad3']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['etiqueta_ban'];?>
" src="/imagenes/publicidad/<?php echo $_smarty_tpl->tpl_vars['publicidad3']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_dir'];?>
">
                            </a>
                        </div>
                          <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                      <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
                  </div>
                  <a class="left carousel-control" href="#publicidad3" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#publicidad3" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
            </div>
          </div>
        
    <div class="col-md-6" align="center">
      <a href="+585007738253">
        <i class="fa fa-phone" aria-hidden="true"></i>
        En Maracay o Valencia llámenos al 0500 773.82.53
      </a>
    </div>
    <div class="col-md-6" align="center">
      <a href="+585007738633">
        <i class="fa fa-phone" aria-hidden="true"></i>
        En Caracas o Porlamar llámenos al 0500 773.86.33
      </a>
    </div>

  </div>        <!-- Fin del Contenedor de Banner Publicitario-->

	<div class="row faq" id="faq">     <!-- Contenedor de Preguntas Frecuentes-->

     <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/FAQ.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 

  </div>            <!-- Fin del Contenedor de Preguntas Frecuentes-->

  <div class="row noticias">       <!-- Contenedor de Noticias-->

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/noticias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    
  </div>      <!-- Contenedor de Noticias-->

  <div class="row">       <!-- Contenedor de Instagram-->

     <!--  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/contacto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  -->
    
  </div>      <!-- Contenedor de Instagram-->

  <div class="row conten">       <!-- Contenedor de Programas Especiales-->

     <?php echo $_smarty_tpl->tpl_vars['contenido']->value[0]['contenido_con'];?>


  </div>      <!-- Contenedor de Programas Especiales-->

  <div class="row publicidad">  <!-- Contenedor de Banner Publicitario-->

     <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    

  </div>        <!-- Fin del Contenedor de Banner Publicitario-->

  <div class="row contacto">  <!-- Contenedor de Contacto-->

     <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/contacto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


  </div>        <!-- Fin del Contenedor de Contacto-->
  
   <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</div><!--  Fin del Contenedor Principal-->


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



<!--
  
  <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
      $('.pregunta').click(function(){
        clickeado = $(this).attr('id');
        if ($('a').attr('id') == clickeado) {
          $(this).addClass('activo');
        } else {
          $(this).removeClass('activo');
        }
        
      });
    });
  <?php echo '</script'; ?>
>


-->




  </body>
</html>
<!-- Fin Pie de Página
================================================== -->
<?php }
}
