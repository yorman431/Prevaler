<?php
/* Smarty version 3.1.29, created on 2017-12-19 17:33:47
  from "/Applications/MAMP/htdocs/prevaler/smartylib/templates/noticia_detalle.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a393f6ba30d69_35509493',
  'file_dependency' => 
  array (
    '4a8db9c5f5d87bfeb58569d8baaf06c97f1541dd' => 
    array (
      0 => '/Applications/MAMP/htdocs/prevaler/smartylib/templates/noticia_detalle.tpl',
      1 => 1512419421,
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
function content_5a393f6ba30d69_35509493 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  
  <!-- InstanceBeginEditable name="contenido" -->
    
<div class="container-fluid">
  <div class="row noticias">
    <div class="col-xs-12 titulo" align="center">
      <span class="fuente_morada">NOTICIAS</span>
    </div>  
    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1">
      <div class="col-xs-12 col-md-5" align="right">
        <img class="img-responsive" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['directorio_image'];?>
">
      </div>
      <div class="col-xs-12 col-md-6">
        <h2 class="fuente_verde"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo_not'];?>
</h2>
        <p class="fuente_gris lead"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['contenido_not'];?>
</p>
      </div>
      <div class="col-xs-12" align="center">
        <a href="" onclick="history.back()" class="btn-info">VOLVER</a>
      </div>
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

  <!-- Pie de Página
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




  </body>
</html>
<!-- Fin Pie de Página
================================================== -->
<?php }
}
