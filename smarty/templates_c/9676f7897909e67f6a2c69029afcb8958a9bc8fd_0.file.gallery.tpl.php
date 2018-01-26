<?php
/* Smarty version 3.1.29, created on 2017-08-31 00:00:44
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/gallery.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59a7358cae3758_63005536',
  'file_dependency' => 
  array (
    '9676f7897909e67f6a2c69029afcb8958a9bc8fd' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/gallery.tpl',
      1 => 1504117525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_59a7358cae3758_63005536 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/plantilla_interno.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="title" content="<?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
 | Nick Autoglass" />
    <meta name="author" content="Nick Autoglass" />
    <meta name="subject" content="<?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
 | Nick Autoglass" />
    
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
" />
    
    <meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['claves']->value;?>
" /> 

    <link rel="icon" href="/imagenes/icono.ico" />
    <meta name="Language" content="Spanish" />
    <meta name="Revisit" content="2 days" />
    <meta name="Distribution" content="Global" />
    <meta name="Robots" content="All" />
    <title><?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
 | Nick Autoglass</title>
    <?php echo '<script'; ?>
 src="/js/validar.js"><?php echo '</script'; ?>
>
    <link href="/dist/css/bootstrap.css" rel="stylesheet">
    <link href="/fonts/stylesheet.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><?php echo '<script'; ?>
 src="../../assets/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->
    <?php echo '<script'; ?>
 src="/assets/js/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
>

    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <link href="/css/navbar-fixed-top.css" rel="stylesheet">
    <link href="/css/personalizado/personalizado.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="/js/jquery.js"><?php echo '</script'; ?>
>
	<link href="/css/personalizado/personalizado.css" rel="stylesheet">
  
	<link  href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 
  <?php echo '<script'; ?>
 defer src="/js/flex/jquery.flexslider.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" /> 
  <?php echo '<script'; ?>
 defer src="/js/flex/jquery.flexslider.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="/lightbox-master/dist/ekko-lightbox.css" media="screen">    
  <?php echo '<script'; ?>
 type="text/javascript" src="/js/lightbox/jquery.lightbox.min.js"><?php echo '</script'; ?>
>    
  <link rel="stylesheet" href="/lightbox-master/dist/ekko-lightbox.css" media="screen">   
  <?php echo '<script'; ?>
 src="/lightbox-master/dist/ekko-lightbox.js"><?php echo '</script'; ?>
>
  <!-- InstanceBeginEditable name="head" -->


    <!-- InstanceEndEditable -->
  </head>
<!-- Fin Cabecera
================================================== -->
<body>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layouts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">
      <div class="row" id="GALERIAS">
        <div class="clearfix"></div>
        <div class="col-xs-12">
          <div class="container">
            <?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_Variable("0", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'cont', 0);?>
            <div class="row" style="margin-bottom:20px;">
              <div class="col-xs-12" style="margin-bottom:20px;">
               <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contenido']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <h3 style="font-family:'intro';"><?php echo $_smarty_tpl->tpl_vars['contenido']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_con'];?>
</h3>
        	<?php echo $_smarty_tpl->tpl_vars['contenido']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['contenido_con'];?>

                <div class="clearfix"></div>
               <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
              </div>
              <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['galeria']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value > 7) {?>
                  <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 0) {?>
                  <div class="col-xs-12 col-sm-6 col-md-6 no_padding" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat;   background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox"  data-footer="<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-6.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 1) {?>
                  <div class="col-xs-12 col-sm-6 col-md-2 no_padding" style="overflow: hidden">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat; background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox"  data-footer="<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-2.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 2) {?>
                  <div class="col-xs-12 col-sm-6 col-md-4 no_padding" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat; background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox"  data-footer="<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-4.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>

                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 3) {?>
                  <div class="col-xs-12 col-sm-6 col-md-10 no_padding" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat; background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox" data-title="<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_gal'];?>
" data-footer="<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-10.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 4) {?>
                  <div class="col-xs-12 col-sm-6 col-md-2 no_padding" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat; background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox"  data-footer="<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-2-2.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 5) {?>
                  <div class="col-xs-12 col-sm-6 col-md-4 no_padding" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat; background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox"  data-footer="<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-4.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 6) {?>
                  <div class="col-xs-12 col-sm-6 col-md-2 no_padding" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat; background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox"  data-footer="<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-2.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cont']->value == 7) {?>
                  <div class="col-xs-12 col-sm-6 col-md-6 no_padding" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
') center no-repeat; background-size: cover;">
                      <a href="/imagenes/<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
" data-toggle="lightbox"  data-footer="<?php echo $_smarty_tpl->tpl_vars['galeria']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" data-gallery="GALERIA">
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
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
              
                <?php echo '<script'; ?>
>
                  $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event){
                      event.preventDefault();
                      $(this).ekkoLightbox();
                    });
                <?php echo '</script'; ?>
>
            
            </div>
          </div>
        </div>
      </div>
    </div>
	
    
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
   

  </body>
<!-- InstanceEnd --></html><?php }
}
