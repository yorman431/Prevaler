<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/plantilla_interno.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="title" content="{$accion} | Nick Autoglass" />
    <meta name="author" content="Nick Autoglass" />
    <meta name="subject" content="{$accion} | Nick Autoglass" />
    
    <meta name="description" content="{$descripcion}" />
    
    <meta name="Keywords" content="{$claves}" /> 

    <link rel="icon" href="/imagenes/icono.ico" />
    <meta name="Language" content="Spanish" />
    <meta name="Revisit" content="2 days" />
    <meta name="Distribution" content="Global" />
    <meta name="Robots" content="All" />
    <title>{$accion} | Nick Autoglass</title>
    <script src="/js/validar.js"></script>
    <link href="/dist/css/bootstrap.css" rel="stylesheet">
    <link href="/fonts/stylesheet.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/assets/js/ie-emulation-modes-warning.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="/css/navbar-fixed-top.css" rel="stylesheet">
    <link href="/css/personalizado/personalizado.css" rel="stylesheet">
    <script src="/js/jquery.js"></script>
	<link href="/css/personalizado/personalizado.css" rel="stylesheet">
  
	<link  href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 
  <script defer src="/js/flex/jquery.flexslider.js"></script>
  <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" /> 
  <script defer src="/js/flex/jquery.flexslider.js"></script>
  <link rel="stylesheet" href="/lightbox-master/dist/ekko-lightbox.css" media="screen">    
  <script type="text/javascript" src="/js/lightbox/jquery.lightbox.min.js"></script>    
  <link rel="stylesheet" href="/lightbox-master/dist/ekko-lightbox.css" media="screen">   
  <script src="/lightbox-master/dist/ekko-lightbox.js"></script>
  <!-- InstanceBeginEditable name="head" -->


    <!-- InstanceEndEditable -->
  </head>
<!-- Fin Cabecera
================================================== -->
<body>

{include file='layouts/header.tpl'}

<div class="container-fluid">
      <div class="row" id="GALERIAS">
        <div class="clearfix"></div>
        <div class="col-xs-12">
          <div class="container">
            {assign cont "0"}
            <div class="row" style="margin-bottom:20px;">
              <div class="col-xs-12" style="margin-bottom:20px;">
               {section name=i loop=$contenido}
                <h3 style="font-family:'intro';">{$contenido[i].nombre_con}</h3>
        	{$contenido[i].contenido_con}
                <div class="clearfix"></div>
               {/section}
              </div>
              {section i $galeria}
                {if $cont > 7}
                  {assign var="cont" value= 0}
                {/if}
                {if $cont == 0}
                  <div class="col-xs-12 col-sm-6 col-md-6 no_padding" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/{$galeria[i].directorio_image}') center no-repeat;   background-size: cover;">
                      <a href="/imagenes/{$galeria[i].directorio_image}" data-toggle="lightbox"  data-footer="{$galeria[i].nombre_image}" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-6.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                {/if}
                {if $cont == 1}
                  <div class="col-xs-12 col-sm-6 col-md-2 no_padding" style="overflow: hidden">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/{$galeria[i].directorio_image}') center no-repeat; background-size: cover;">
                      <a href="/imagenes/{$galeria[i].directorio_image}" data-toggle="lightbox"  data-footer="{$galeria[i].nombre_image}" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-2.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                {/if}
                {if $cont == 2}
                  <div class="col-xs-12 col-sm-6 col-md-4 no_padding" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/{$galeria[i].directorio_image}') center no-repeat; background-size: cover;">
                      <a href="/imagenes/{$galeria[i].directorio_image}" data-toggle="lightbox"  data-footer="{$galeria[i].nombre_image}" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-4.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>

                  </div>
                {/if}
                {if $cont == 3}
                  <div class="col-xs-12 col-sm-6 col-md-10 no_padding" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/{$galeria[i].directorio_image}') center no-repeat; background-size: cover;">
                      <a href="/imagenes/{$galeria[i].directorio_image}" data-toggle="lightbox" data-title="{$galeria[i].nombre_gal}" data-footer="{$galeria[i].nombre_image}" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-10.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                {/if}
                {if $cont == 4}
                  <div class="col-xs-12 col-sm-6 col-md-2 no_padding" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/{$galeria[i].directorio_image}') center no-repeat; background-size: cover;">
                      <a href="/imagenes/{$galeria[i].directorio_image}" data-toggle="lightbox"  data-footer="{$galeria[i].nombre_image}" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-2-2.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                {/if}
                {if $cont == 5}
                  <div class="col-xs-12 col-sm-6 col-md-4 no_padding" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/{$galeria[i].directorio_image}') center no-repeat; background-size: cover;">
                      <a href="/imagenes/{$galeria[i].directorio_image}" data-toggle="lightbox"  data-footer="{$galeria[i].nombre_image}" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-4.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                {/if}
                {if $cont == 6}
                  <div class="col-xs-12 col-sm-6 col-md-2 no_padding" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/{$galeria[i].directorio_image}') center no-repeat; background-size: cover;">
                      <a href="/imagenes/{$galeria[i].directorio_image}" data-toggle="lightbox"  data-footer="{$galeria[i].nombre_image}" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-2.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>
                  </div>
                {/if}
                {if $cont == 7}
                  <div class="col-xs-12 col-sm-6 col-md-6 no_padding" style="overflow: hidden;">
                    <div class="col-xs-12 efecto-hover" style="background: url('/imagenes/{$galeria[i].directorio_image}') center no-repeat; background-size: cover;">
                      <a href="/imagenes/{$galeria[i].directorio_image}" data-toggle="lightbox"  data-footer="{$galeria[i].nombre_image}" data-gallery="GALERIA">
                        <img src="/imagenes/col-xs-6.png" alt="" class="img-responsive fullHeigh">
                      </a>
                    </div>

                  </div>
                {/if}
                {assign var="cont" value=$cont + 1}
              {/section}
              {literal}
                <script>
                  $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event){
                      event.preventDefault();
                      $(this).ekkoLightbox();
                    });
                </script>
            {/literal}
            </div>
          </div>
        </div>
      </div>
    </div>
	
    
{include file='layouts/footer.tpl'}

    <script src="/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
   

  </body>
<!-- InstanceEnd --></html>