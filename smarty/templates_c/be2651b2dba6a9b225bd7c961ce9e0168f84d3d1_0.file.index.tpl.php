<?php
/* Smarty version 3.1.29, created on 2017-11-10 21:35:00
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a060d7449ea95_73380476',
  'file_dependency' => 
  array (
    'be2651b2dba6a9b225bd7c961ce9e0168f84d3d1' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/index.tpl',
      1 => 1510074477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/botonera.tpl' => 1,
    'file:layout/banner.tpl' => 1,
    'file:layout/productos.tpl' => 1,
    'file:layout/publicidad.tpl' => 1,
    'file:layout/contacto.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_5a060d7449ea95_73380476 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">  <!-- Contenedor Principal-->

	<div class="row">			<!-- Contenedor de Productos-->

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/productos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
	</div>						<!-- Fin del Contenedor de Productos-->

  <div class="row publicidad">  <!-- Contenedor de Banner Publicitario-->

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  </div>        <!-- Fin del Contenedor de Banner Publicitario-->

	<div class="row">     <!-- Contenedor de nosotros-->

    <?php echo $_smarty_tpl->tpl_vars['contenido']->value[0]['contenido_con'];?>


  </div>            <!-- Fin del Contenedor de nosotros-->

  <div class="row servicio">       <!-- Contenedor de Servicios-->

    <?php echo $_smarty_tpl->tpl_vars['contenido']->value[1]['contenido_con'];?>

    
  </div>      <!-- Contenedor de Servicios-->

  <div class="row contacto">       <!-- Contenedor de Instagram-->

     <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/contacto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
  </div>      <!-- Contenedor de Instagram-->

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
