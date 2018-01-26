<?php
/* Smarty version 3.1.29, created on 2017-11-02 17:23:32
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/catalogo_opcion.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59fb46848a67e4_69600144',
  'file_dependency' => 
  array (
    '53a3fcb75b76e2d74f0497b004fac938421d1341' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/catalogo_opcion.tpl',
      1 => 1508786691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./layout/header.tpl' => 1,
    'file:./layout/botonera.tpl' => 1,
    'file:./layout/banner.tpl' => 1,
    'file:./layout/categorias.tpl' => 1,
  ),
),false)) {
function content_59fb46848a67e4_69600144 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">
    <div class="row categorias">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./layout/categorias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
