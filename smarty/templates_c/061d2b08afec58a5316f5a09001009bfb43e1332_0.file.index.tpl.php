<?php
/* Smarty version 3.1.29, created on 2018-01-26 20:13:02
  from "D:\Websites\Prevaler\smarty\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a6b8bce4b5be6_61790754',
  'file_dependency' => 
  array (
    '061d2b08afec58a5316f5a09001009bfb43e1332' => 
    array (
      0 => 'D:\\Websites\\Prevaler\\smarty\\templates\\index.tpl',
      1 => 1516997469,
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
    'file:layout/publicidad.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_5a6b8bce4b5be6_61790754 ($_smarty_tpl) {
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
     <div class="row" id="mosaico_sede">

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
                <img class="img-responsive maximo" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['hotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
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
                <img class="img-responsive maximo" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['hotel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
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
  
                  <div class="carousel-inner" role="listbox">
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
                        <div <?php if ($_smarty_tpl->tpl_vars['cont']->value == "0") {?> class="item active" <?php } else { ?> class="item" <?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['publicidad3']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['url_dir'];?>
" target="_blank">
                            <img class="img-responsive maximo" alt="<?php echo $_smarty_tpl->tpl_vars['publicidad3']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['etiqueta_ban'];?>
" src="/imagenes/publicidad/<?php echo $_smarty_tpl->tpl_vars['publicidad3']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_dir'];?>
">
                            </a>
                        </div>
                          <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                      <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
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

  <div class="row">
    <div class="col-xs-12 columna-instagram">
      <i class="fa fa-instagram fa-3x fuente_morada" aria-hidden="true"></i>
      <span class="fuente_morada">@prevaler</span>
      <hr class="color_morado">
    </div> 
  </div>
  <div class="row instagram">       <!-- Contenedor de Instagram-->

    <!-- LightWidget WIDGET -->
    <?php echo '<script'; ?>
 src="//lightwidget.com/widgets/lightwidget.js"><?php echo '</script'; ?>
>
    <iframe src="//lightwidget.com/widgets/9b042ba75b1450f8883155c04ef6d5e6.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

    
  </div>      <!-- Contenedor de Instagram-->

  <div class="row conten">       <!-- Contenedor de Programas Especiales-->

     <?php echo $_smarty_tpl->tpl_vars['contenido']->value[0]['contenido_con'];?>


  </div>      <!-- Contenedor de Programas Especiales-->

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
     <form class="form-horizontal" role="form" action="/index.php#contacto" method="post" name="contact" id="contact">
        <div class="panel panel-default panel-contacto">
          <div class="panel-heading">
            
          </div>
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

<?php echo '<script'; ?>
 type="text/javascript">       /// resalta las opcion seleccionada
      $(document).ready(function(){       /// de cita con o sin poliza
        $('.no-push').click(function(e){
          $('.no-push').removeClass('btn-push');
          $(this).addClass('btn-push');
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
