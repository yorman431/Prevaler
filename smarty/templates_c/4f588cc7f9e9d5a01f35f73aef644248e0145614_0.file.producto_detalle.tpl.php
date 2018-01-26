<?php
/* Smarty version 3.1.29, created on 2017-11-10 21:49:41
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/producto_detalle.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0610e5363d66_43578329',
  'file_dependency' => 
  array (
    '4f588cc7f9e9d5a01f35f73aef644248e0145614' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/producto_detalle.tpl',
      1 => 1510165990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/botonera.tpl' => 1,
    'file:layout/banner.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_5a0610e5363d66_43578329 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 detalle" id="productos">
      <div class="row">
        <div class="col-md-4 hidden-sm hidden-xs linea-md">
        <hr class="fondo_verde">
      </div>
      <div class="col-xs-12 col-md-4 no_padding1" align="center">
        <span>DELLE CUCINE</span>
      </div>
      <div class="col-md-4 hidden-sm hidden-xs linea-md">
        <hr class="fondo_rojo">
      </div>
    </div>
    <div class="row contenido">
      <div class="col-xs-12 col-md-6">
        <h4><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_pro'];?>
</h4>
        <hr class="color_gris">
        <br><br>
        <p><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion_pro'];?>
</p>
        <button class="btn-info" data-toggle="modal" data-target="#myModal">SOLICITUD</button>
        <h4><?php echo $_smarty_tpl->tpl_vars['mensaje2']->value;?>
</h4>
      </div>
      <div class="col-xs-12 col-md-6 borde_contenido" align="center">
        <img class="img-responsive" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['producto']->value['directorio_image'];?>
">
      </div>
    </div>
    <div class="row fondo_galeria"> 
        <div class="clearfix"></div>
        <div class="col-xs-12 separacion-row">
          <div class="container-fluid">
            <div class="row">
              <?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_Variable("0", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'cont', 0);?>
              <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['imagen']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 0) {?>
                  <div class="col-md-6 col-xs-12 no_padding border" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat;   background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox" data-footer="<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="imagen">
                        <img src="/imagenes/col-xs-6.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 1) {?>
                  <div class="col-md-2 col-xs-12 no_padding border" style="overflow: hidden">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat; background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox" data-footer="<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="imagen">
                        <img src="/imagenes/col-xs-2.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 2) {?>
                  <div class="col-md-4 col-xs-12 no_padding border" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat; background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox" data-footer="<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="imagen">
                        <img src="/imagenes/col-xs-4.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 3) {?>
                  <div class="col-md-10 col-xs-12 no_padding border" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat; background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox" data-footer="<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="imagen">
                        <img src="/imagenes/col-xs-10.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 4) {?>
                  <div class="col-md-2 col-xs-12 no_padding border" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat; background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox" data-footer="<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="imagen">
                        <img src="/imagenes/col-xs-2-2.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 5) {?>
                  <div class="col-md-4 col-xs-12 no_padding border" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat; background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox" data-footer="<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="imagen">
                        <img src="/imagenes/col-xs-4.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 6) {?>
                  <div class="col-md-2 col-xs-12 no_padding border" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat; background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox" data-footer="<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="imagen">
                        <img src="/imagenes/col-xs-2.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 7) {?>
                  <div class="col-md-6 col-xs-12 no_padding border" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat; background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox" data-footer="<?php echo $_smarty_tpl->tpl_vars['imagen']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="imagen">
                        <img src="/imagenes/col-xs-6.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                <?php }?>
                <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
              <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
              <div class="col-xs-12" align="center">
                <a href="/index.php#productos" class="btn">VOLVER</a>
              </div>
            </div>
          </div>
        </div>
    </div> <!-- fondo galeria-->
  </div> 
</div>
     <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

 


<!-- formulario de solicitud-->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-margin">
                    <div class="container-fluid">
                        <div class="row">
                           <div class="col-xs-12">
                               <form class="form-horizontal" role="form" action="/producto_detalle.php?cont=<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_pro'];?>
#productos" method="post" name="contact" id="contact">
        <div class="panel panel-default panel-contacto">
          <div class="panel-heading">
            <span class="fuente_gris"><i class="fa fa-circle" aria-hidden="true"></i>CONTACTO</span>
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
              <input type="text" rows="3" name="codigo" id="codigo"  value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['codigo_pro'];?>
" required="required">
            </div>
            <div class="form-group info_invisible">
              <input type="text" rows="3" name="producto" id="producto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_pro'];?>
" required="required">
            </div>
          </div>
          <div class="panel-footer" align="right">
            <button onclick="javascript: return validarformulario();" name="enviar" type="submit" id="enviar" value="Enviar2">
              Enviar
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
