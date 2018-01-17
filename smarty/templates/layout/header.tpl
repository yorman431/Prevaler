<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="title" content="{$accion} | Prevaler | " />
<meta name="author" content="Prevaler" />
<meta name="subject" content="{$accion} | Prevaler | " />

<meta name="description" content="{$descripcion}" />

<meta name="Keywords" content="{$claves}" />

<link rel="icon" href="/imagenes/icono.ico" />
<meta name="Language" content="Spanish" />
<meta name="Revisit" content="2 days" />
<meta name="Distribution" content="Global" />
<meta name="Robots" content="All" />
<title>{$accion} | Prevaler | </title>
<script src="/js/validar.js"></script>
<script src="/js/ajax.js"></script>
<script src="/js/faq.js"></script>
<link href="/dist/css/bootstrap.css" rel="stylesheet">
<link href="/fonts/stylesheet.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="/assets/js/ie-emulation-modes-warning.js"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<link href="/css/navbar-fixed-top.css" rel="stylesheet">
<link href="/css/personalizado/personalizado.css" rel="stylesheet">
<script src="/js/jquery.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHV-QZyvPzbYOCNlxyW-Dx1f74G5AVZXE&libraries=places&callback=initMap" async defer></script>
<link  href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="/lightbox-master/dist/ekko-lightbox.css" media="screen">
<script src="/lightbox-master/dist/ekko-lightbox.js"></script>
<script src="/js/efectos.js"></script>

{literal}
  <script type="text/javascript">
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
  </script>

  <script>            // pertenece a galeria
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event){
      event.preventDefault();
      $(this).ekkoLightbox();
    });
  </script>
{/literal}
