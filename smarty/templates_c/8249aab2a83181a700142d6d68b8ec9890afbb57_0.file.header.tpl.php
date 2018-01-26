<?php
/* Smarty version 3.1.29, created on 2017-11-10 21:49:41
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/layout/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0610e54fa240_82145281',
  'file_dependency' => 
  array (
    '8249aab2a83181a700142d6d68b8ec9890afbb57' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/layout/header.tpl',
      1 => 1508530776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0610e54fa240_82145281 ($_smarty_tpl) {
?>
<!-- Cabecera
================================================== -->
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="<?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
 | Delle Cucine | Miami" />
    <meta name="author" content="Uniformese" />
    <meta name="subject" content="<?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
 | Delle Cucine | Miami" />

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
 | Delle Cucine | Miami</title>
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
	<link  href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/lightbox-master/dist/ekko-lightbox.css" media="screen">
    <?php echo '<script'; ?>
 src="/lightbox-master/dist/ekko-lightbox.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/efectos.js"><?php echo '</script'; ?>
>

    
        


    <?php echo '<script'; ?>
 type="text/javascript">
        var wto = wto || [];
        wto.push(['setWTID', 'hsausa']);
        wto.push(['webTraxs']);
          (function() {
            var wt = document.createElement('script');
            wt.src = document.location.protocol + '//www.webtraxs.com/wt.php';
            wt.type = 'text/javascript';
            wt.async = true;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wt, s);
          })();
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>            // pertenece a galeria
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event){
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    <?php echo '</script'; ?>
>

	

  </head>
  <body id="inicio">
<!-- Fin Cabecera
================================================== -->
<?php }
}
