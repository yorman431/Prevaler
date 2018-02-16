<?php
/* Smarty version 3.1.29, created on 2018-02-16 17:12:38
  from "D:\Websites\Prevaler\smarty\templates\nosotros.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a87110646bad0_05512620',
  'file_dependency' => 
  array (
    '07c743e1fbb1043b0a0efdf87e303eaa7b927288' => 
    array (
      0 => 'D:\\Websites\\Prevaler\\smarty\\templates\\nosotros.tpl',
      1 => 1516997471,
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
function content_5a87110646bad0_05512620 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div class="container-fluid">  <!-- Contenedor Principal-->

	<div class="row nosotros" align="center">
		<hr class="color_morado">
    	<div class="col-xs-10 col-xs-push-1 col-xs-pull-1 titulo no_padding1">
      		<span class="fuente_morada">NOSOTROS</span>
    	</div>

    	<div class="col-xs-12 conten" align="left">
    		<?php echo $_smarty_tpl->tpl_vars['contenido']->value[0]['contenido_con'];?>

    	</div>

    	<div class="col-xs-11 col-xs-offset-1"><hr class="color_morado"></div>

    	<div class="col-xs-12 col-md-6" align="center">
    		<div class="row">
    			<div class="col-xs-10 col-xs-push-1 col-xs-pull-1">
    				<span class="fuente_morada">PRINCIPIOS</span>
    			</div>
    		</div>
    	</div>

    	<div class="col-xs-12">
    		<?php echo $_smarty_tpl->tpl_vars['contenido']->value[1]['contenido_con'];?>

    	</div>

    	<div class="col-xs-11 col-xs-offset-1"><hr class="color_morado"></div>

    	<div class="col-xs-12 col-md-6" align="center">
    		<div class="row">
    			<div class="col-xs-10 col-xs-push-1 col-xs-pull-1">
    				<span class="fuente_morada">OBJETIVOS ESTRATEGICOS</span>
    			</div>
    		</div>
    	</div>

    	<div class="col-xs-12 conten" align="left">
    		<?php echo $_smarty_tpl->tpl_vars['contenido']->value[2]['contenido_con'];?>

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
            <form class="form-horizontal" role="form" action="/nosotros.php#contacto" method="post" name="contact" id="contact">
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
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sede']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['sede']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_sede'];?>
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
