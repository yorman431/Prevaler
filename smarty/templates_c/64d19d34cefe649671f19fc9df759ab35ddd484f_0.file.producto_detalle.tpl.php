<?php
/* Smarty version 3.1.29, created on 2017-10-11 20:33:14
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/producto_detalle.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59de63eaad72b0_13340733',
  'file_dependency' => 
  array (
    '64d19d34cefe649671f19fc9df759ab35ddd484f' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/producto_detalle.tpl',
      1 => 1507668141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/botonera.tpl' => 1,
    'file:layout/banner.tpl' => 1,
  ),
),false)) {
function content_59de63eaad72b0_13340733 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
<div class="container-fluid ">
    <div class="row productos">
        <div class="col-xs-10 col-xs-pull-1 col-xs-push-1 col-sm-8 col-sm-pull-2 col-sm-push-2 col-md-4 col-md-pull-4 col-md-push-4" align="center">
			     <span class="fuente_verde"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre_cat'];?>
</span>
            <hr class="color_verde">
		    </div>
		    <div class="col-xs-12">
			     <div class="row">
				    <div class="col-xs-12 col-md-5">
        			<div class="row">
        				<div class="col-xs-10 col-xs-pull-1 col-xs-push-1 col-md-9 col-md-push-3 col-lg-7 col-lg-push-5">
                            <div class="row">  
                                         <!-- Para resoluciones md y lg -->
                                <div class="col-xs-12 no_padding1 hidden-sm hidden-xs" align="right">
                                    <div id="myProducto" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                                            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['imagen']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                                <li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['cont']->value == "0") {?>class="active"<?php }?>></li>
                                            <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                                            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                        </ol>

                                        <div class="carousel-inner" role="listbox">
                                            <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                                            <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['imagen']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                                <div <?php if ($_smarty_tpl->tpl_vars['cont']->value == "0") {?>class="item active"<?php } else { ?>class="item"<?php }?> align="center" data-slide-number="<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
">
                                                    <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox" data-footer="<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
">
                                                        <img class="img-responsive bordes_verdes" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
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

                                        <a class="left carousel-control" href="#myProducto" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myProducto" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>

                                                <!-- Para resoluciones sm y xs -->
                                 <div class="col-xs-12 no_padding1 no_padding1 hidden-md hidden-lg" align="center">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                                            <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['imagen']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                                <li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['cont']->value == "0") {?>class="active"<?php }?>></li>
                                            <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                                            <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
                                        </ol>

                                        <div class="carousel-inner" role="listbox">

                                            <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                                            <?php
$__section_i_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['imagen']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total != 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                                <div <?php if ($_smarty_tpl->tpl_vars['cont']->value == "0") {?>class="item active"<?php } else { ?>class="item"<?php }?>>
                
                                                    <img class="img-responsive bordes_verdes" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
">
                                                    <div class="container-fluid">
                                                        <div class="carousel-caption inversa">
                                                            <h1 class="conclase" align="center"></h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                                            <?php
}
}
if ($__section_i_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_3_saved;
}
?>
                                        </div>

                                        <a class="left carousel-control" href="#myProducto" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myProducto" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
        					
                            <div class="row">   
                                <div class="col-xs-12 no_padding1" align="center">
                                    <ul class="list-inline productoschicos">
                                    <!-- seccion de imagenes pequeñas (por hacer)-->
                                       <?php
$__section_i_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['imagen']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total != 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                        <li> 
                                            <a id="carousel-selector-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
">
                                                <img class="img-responsive bordes_verdes" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" style="cursor:pointer;" />
                                            </a>
                                        </li>    
                                    <?php
}
}
if ($__section_i_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_4_saved;
}
?>                                         
                                    </ul>
                                </div>
                            </div>
        				</div>
        			</div>
        		</div>
        		<div class="col-xs-12 col-md-7">
        			<div class="row">
        				<div class="col-xs-10 col-xs-pull-1 col-xs-push-1" align="left">
        					<h2 class="fuente_verde">
        						<i class="fa fa-circle" aria-hidden="true"></i>
        						<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_pro'];?>

        					</h2>
        					<div class="row descripcion">
        						<div class="col-xs-12">
                      
        							<span class="fuente_verde">
        								Código: <?php echo $_smarty_tpl->tpl_vars['producto']->value['codigo_pro'];?>

        							</span>
                      <span class="fuente_verde">
                        Colores: <?php echo $_smarty_tpl->tpl_vars['producto']->value['color_pro'];?>

                      </span>
                      <span class="fuente_verde">
                        Tallas: <?php echo $_smarty_tpl->tpl_vars['producto']->value['talla_pro'];?>

                      </span>
                      <span class="fuente_verde">
                        Telas: <?php echo $_smarty_tpl->tpl_vars['producto']->value['telas_pro'];?>

                      </span>
                      <span class="fuente_verde">
                        Vistas: <?php echo $_smarty_tpl->tpl_vars['producto']->value['vistas_pro'];?>

                      </span>

        						</div>
                            </div>
        						
        			         <div class="row descripcion">
        				        <div class="col-xs-12 texto">
        					       <?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion_pro'];?>

        				        </div>
        			         </div>
        			        <div class="row">
        				        <div class="col-xs-10" align="left">
        					        <button class="color_verde" data-toggle="modal" data-target="#myModal">Solicitud
        					        </button>
        					        <button class="color_verde">
        						        ¿Conoces tu Talla?
        					        </button>
        				        </div>
        			        </div>
        		        </div>
                    <div class="col-xs-10 col-xs-pull-1 col-xs-push-1" align="left">
                      <h4 class="fuente_verde"><?php echo $_smarty_tpl->tpl_vars['mensaje2']->value;?>
</h4>
                    </div>
        	        </div>
                </div>
			 </div>
		  </div>
      <div class="col-xs-12" align="center">
        <a href="producto.php?cont=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_cat'];?>
" class="btn-info">Volver</a>
      </div>
      <div class="col-xs-10 col-xs-pull-1 col-xs-push-1"></div>
    </div>

</div>
    
<!-- Pie de Página
================================================== -->
<footer>
  <div class="container-fluid">
    <div class="row">                 <!-- Contenedor de suscripcion-->
      <div class="col-xs-10 col-xs-pull-1 col-xs-push-1" align="center">
        <div class="row bordes_verdes">
          <div class="col-xs-12 col-md-2 color_verde">
               <h4>SUSCRIBETE</h4>
          </div>
          <div class="col-xs-12 col-md-7 col-lg-7">
            <p class="alineamiento1">Recibe notificaciones sobre nuevos productos y ofertas especiales para ti.</p>
          </div>
          <div class="col-xs-12 col-md-3 alineamiento2">
            <form id="footer" name="footer" method="post" action="/producto_detalle.php?cont=<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_pro'];?>
#footer">
              <div class="col-xs-9 no_padding1">
                <input type="text" name="correoSusc" id="correoSusc" class="maximo" placeholder="Coloca tú email" value="" onkeypress="javascrip: return validar_correo(event);">
              </div>
              <div class="col-xs-3 no_padding1">
                <button class="maximo" name="go" type="submit" id="go" value="Go">
                  <i class="fa fa-chevron-right fa-lg" aria-hidden="true"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-xs-10 col-xs-pull-1 col-xs-push-1" align="right">
        <h4 class="fuente_verde"><?php echo $_smarty_tpl->tpl_vars['mensaje3']->value;?>
</h4>
      </div>
    </div>                <!-- Fin del Contenedor de suscripcion-->

    <div align="center"><hr></div>         <!-- linea de separacion-->

        <div class="row">

          <div class="col-md-4 visible-lg visible-md " align="left">
            <a href="http://diazcreativos.net" target="_blank">
              <div class="row">
                <div class="col-xs-3 no_padding1" align="right">
                  <img src="/imagenes/logo-firma.png" alt="Desarrollado por Díaz Creativos" border="0">
                </div>
                <div class="col-xs-9">
                  <p class="fuente_gris">Díaz Creativos</p>
                </div>
              </div>
            </a> 
          </div>

          <div class="col-xs-12 col-md-4" align="center">
            <p>©2017 Derechos Reservados. Uniformese.</p>
          </div>

          <div class="col-xs-12 visible-xs visible-sm no_padding1" align="center">
            <p>
              <a href="http://diazcreativos.net" target="_blank">
              <div class="row">
                <div class="col-xs-2 no_padding1" align="right">
                  <img src="/imagenes/logo-firma.png" alt="Desarrollado por Díaz Creativos" border="0">
                </div>
                <div class="col-xs-10" align="left">
                  <p class="fuente_gris">Díaz Creativos</p>
                </div>
              </div>
            </a> 
            </p>
          </div>

          <div class="col-xs-12 col-md-4" align="right">
            <div class="row">
              <div class="col-xs-10 no_padding1">
                <p>Volver Arriba</p>
              </div>
              <div class="col-xs-2" align="left">
                <a href="#inicio">
                  <i class="fa fa-arrow-up fa-2x fuente_verde" aria-hidden="true"></i>
                </a> 
              </div>
            </div>
          </div>

        </div>
  </div> 
</footer>


<!-- formulario de solicitud-->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="container-fluid">
                        <div class="row">
                           <div class="col-xs-12">
                               <form class="form-horizontal" role="form" action="/producto_detalle.php?cont=<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_pro'];?>
#myProducto" method="post" name="contact" id="contact">
        <div class="panel panel-default panel-contacto">
          <div class="panel-heading preolca-contacto" align="center">
            <h2 class="fuente_verde">CONTACTO</h2>
            <hr class="color_verde">
          </div>
          <div class="panel-body">
            <div class="form-group">
              <input  type="text" name="nombre" id="nombre" placeholder="Nombre" value="" required="required">
            </div>
            <div class="form-group">
              <input  type="text" name="telefono" id="telefono" placeholder="Teléfono" value="" required="required">
            </div>
            <div class="form-group">
              <input  type="email" id="email" name="email" placeholder="Email" value="" required="required">
            </div>
            <div class="form-group">
              <input type="text" rows="3" name="comentario" id="comentario" placeholder="Mensaje" value="" required="required">
            </div>
            <div class="form-group info_invisible">
              <input type="text" rows="3" name="categoria" id="categoria"  value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre_cat'];?>
" required="required">
            </div>
            <div class="form-group info_invisible">
              <input type="text" rows="3" name="producto" id="producto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_pro'];?>
" required="required">
            </div>
          </div>
          <div class="panel-footer" align="right">
            <button onclick="javascript: return validarformulario();" name="enviar" type="submit" id="enviar" value="Enviar">
              <img class="img-responsive" src="/imagenes/enviar.png">
            </button>
          </div>
        </div>
       </form>
                           </div> 
                        </div>
                    </div>
                </div>
            </div>
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
    $('#myProduct').carousel({
      interval: 4000
    });
    
    // handles the carousel thumbnails
    $('[id^=carousel-selector-]').click( function(){
      var id_selector = $(this).attr("id");
      var id = id_selector.substr(id_selector.length -1);
      id = parseInt(id);
      $('#myProduct').carousel(id);
      $('[id^=carousel-selector-]').removeClass('selected');
      $(this).addClass('selected');
    });
    
    // when the carousel slides, auto update
    $('#myProduct').on('slid', function (e) {
      var id = $('.item.active').data('slide-number');
      id = parseInt(id);
      $('[id^=carousel-selector-]').removeClass('selected');
      $('[id=carousel-selector-'+id+']').addClass('selected');
    });
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/javascript">

    jQuery(document).ready(function() {
          
      jQuery('.carousel[data-type="producto"] .item').each(function(){
        var next = jQuery(this).next();
        if (!next.length) {
          next = jQuery(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo(jQuery(this));
        
        for (var i=0;i<2;i++) {
          next=next.next();
          if (!next.length) {
            next = jQuery(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));
        }
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
