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
        
     
     <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-6623041-33', 'auto');
	  ga('send', 'pageview');
	
	</script>
        
	  {/literal}
      
    <!-- InstanceBeginEditable name="head" -->
{literal} 
	<link rel="stylesheet" href="/lightbox-master/dist/ekko-lightbox.css" media="screen">
    <script src="/lightbox-master/dist/ekko-lightbox.js"></script>
{/literal}

    
    <!-- InstanceEndEditable -->
  </head>
<!-- Fin Cabecera
================================================== -->
<body>

<nav class="navbar navbar-default navbar-fixed-top">

	  <div class="container">
           <div class="row">
                
                    <div class="col-lg-8 col-md-8 hidden-sm hidden-xs"><a title=" Dartronics, INC. Packaging Automation Specialists" href="index.php"><img src="/imagenes/logotipo.png" alt=" Dartronics, INC. Packaging Automation Specialists" width="350"  height="125" border="0"></a> </div>
                    
                    <div class="hidden-lg hidden-md col-sm-9 col-xs-9"><a title=" Dartronics, INC. Packaging Automation Specialists" href="index.php"><img src="/imagenes/logotipo.png" alt=" Dartronics, INC. Packaging Automation Specialists" width="200"  border="0"></a> </div>
                    
                    <div class="col-sm-3 col-xs-3" align="right">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" id="boton-navegacion" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div> 
              		</div>
                    
                    <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                    	<h3 class="telefono" align="right"><a class="pull-left" title="Search Produtcs" target="_blank" href="http://files.dartronics.com/">Login/Register</a><i class="fa fa-mobile"></i> 1-800-298-8936</h3>
                        <form id="form_buscar" name="form_buscar" action="resultados.php#next" class="form-horizontal">
                            	<div class="form-group">
                                	<div class="input-group">
                                    <input type="text" class="form-control" value="{$keywords}" name="keywords" id="keywords" placeholder="your search...">
                                    <span class="input-group-addon con-rojo" id="sizing-addon3">
                                    <a title="Search Produtcs" href="#" onclick="javascripts: document.form_buscar.submit(); return false;"><i class="fa fa-search" style="color:#FFF;"></i></a></span>
                                    </div>
                                </div>
                            </form>
                    </div>
                    
                </div>
           </div>
            
                  
      <div id="navbar" class="navbar-collapse collapse" style="background-color:#000;">
                
          <div class="container">
               <div class="alineamiento">
                  {section name=i loop=$enlaces_A}
                    <div class="dropdown">
                    
                        {if $enlaces_A[i].enlaces neq ""}
                        <a id="dLabel" data-toggle="dropdown" class="btn btn-primary navbar-dartronics" data-target="#" href="{$enlaces_A[i].url}~{$enlaces_A[i].id_cat}" title="{$enlaces_A[i].nombre_cat}">
                            {$enlaces_A[i].nombre_cat} {if $enlaces_A[i].enlaces neq ""}<span class="caret"></span>{/if}
                        </a>
                        
                        {else}
                        	<a id="dLabel"class="btn btn-primary navbar-dartronics" href="{$enlaces_A[i].url}~{$enlaces_A[i].id_cat}" title="{$enlaces_A[i].etiqueta_cat}">
                            {$enlaces_A[i].nombre_cat}
                        </a>
                        {/if}	
                        
                        {if $enlaces_A[i].enlaces neq ""}
                        <ul class="dropdown-menu multi-level menu-dartronics" role="menu" aria-labelledby="dropdownMenu">
                            {section name=j loop=$enlaces_A[i].enlaces}
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="{$enlaces_A[i].enlaces[j].url}_{$enlaces_A[i].enlaces[j].id_cat}" title="{$enlaces_A[i].enlaces[j].nombre_cat}">{$enlaces_A[i].enlaces[j].nombre_cat}</a>
                                <ul class="dropdown-menu">
                                  {section name=k loop=$enlaces_A[i].enlaces[j].enlaces}
                                  {if $enlaces_A[i].enlaces[j].enlaces[k].enlaces neq ""}
                                    <li class="dropdown-submenu">
                                        <a href="{$enlaces_A[i].enlaces[j].enlaces[k].url}_{$enlaces_A[i].enlaces[j].enlaces[k].id_cat}" title="{$enlaces_A[i].enlaces[j].enlaces[k].nombre_cat}">{$enlaces_A[i].enlaces[j].enlaces[k].nombre_cat}</a>
                                        <ul class="dropdown-menu">
                                            {section name=l loop=$enlaces_A[i].enlaces[j].enlaces[k].enlaces}
                                            {if $enlaces_A[i].enlaces[j].enlaces[k].enlaces[l].enlaces neq ""}
                                                <li class="dropdown-submenu">
                                                    <a href="{$enlaces_A[i].enlaces[j].enlaces[k].enlaces[l].url}_{$enlaces_A[i].enlaces[j].enlaces[k].enlaces[l].id_cat}" title="{$enlaces_A[i].enlaces[j].enlaces[k].enlaces[l].nombre_cat}">{$enlaces_A[i].enlaces[j].enlaces[k].enlaces[l].nombre_cat}</a>
                                                    <ul class="dropdown-menu">
                                                        {section name=m loop=$enlaces_A[i].enlaces[j].enlaces[k].enlaces[l].enlaces}
                                                        <li><a href="{$enlaces_A[i].enlaces[j].enlaces[k].enlaces[l].enlaces[m].url}_{$enlaces_A[i].enlaces[j].enlaces[k].enlaces[l].enlaces[m].id_cat}" title="{$enlaces_A[i].enlaces[j].enlaces[k].enlaces[l].enlaces[m].nombre_cat}">{$enlaces_A[i].enlaces[j].enlaces[k].enlaces[l].enlaces[m].nombre_cat}</a></li>
                                                        {/section}
                                                    </ul>
                                                </li>
                                            {else}
                                                <li><a href="{$enlaces_A[i].enlaces[j].enlaces[k].enlaces[l].url}_{$enlaces_A[i].enlaces[j].enlaces[k].enlaces[l].id_cat}" title="{$enlaces_A[i].enlaces[j].enlaces[k].enlaces[l].nombre_cat}">{$enlaces_A[i].enlaces[j].enlaces[k].enlaces[l].nombre_cat}</a></li>
                                            {/if}
                                            {/section}
                                        </ul>
                                    </li>
                                  {else}
                                    <li><a tabindex="-1" title="{$enlaces_A[i].enlaces[j].enlaces[k].nombre_cat}" href="{$enlaces_A[i].enlaces[j].enlaces[k].url}_{$enlaces_A[i].enlaces[j].enlaces[k].id_cat}">{$enlaces_A[i].enlaces[j].enlaces[k].nombre_cat}</a></li>
                                  {/if}
                                  {/section}
                                </ul>
                            </li>
                            {/section}
                           
                        </ul>
                        
                        {/if}
                    </div>
                    {/section}
                </div>
            </div>
      </div>
</nav>

{if $id_banner neq ""}
<div class="container-fluid">        
    <div class="row">
        	<div class="col-xs-12 no_padding">
            	<img alt="{$accion}" border="0" src="/imagenes/banner/banner-{$id_banner}.jpg" longdesc="{$accion}" class="img-responsive" />
            </div>
    </div>
 </div>
    
{/if}

	<div class="container">
	<!-- InstanceBeginEditable name="contenido" -->
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
              <h3>{$accion}</h3> 
                <h5><i class="fa fa-calendar-o"></i> {$fecha}</h5> 
                {$contenido}
            </div>
            
            <div class="col-xs-12">
            	<div class="row">
                	{section name=i loop=$galeria}
                	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    	<a class="thumbnail" id="mylink" href="/imagenes/{$galeria[i].directorio_image}" data-toggle="lightbox" data-title="{$galeria[i].nombre_image}" data-gallery="multiimages">
                     	<img src="/imagenes/{$galeria[i].directorio_image}" class="img-responsive">
                   		</a>
                    </div>
                    {/section}
                </div>
            </div>
            
            <div class="col-xs-12">
            	 <p align="center"><a class="btn btn-danger" title="Volver a Galerías" href="application.php" role="button">Back to Applications</a></p>
            </div>
            
        </div>   
  	</div>
    
    {literal}
	<script>
		$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
			event.preventDefault();
			$(this).ekkoLightbox();
		}); 
    
    </script>
    {/literal}
    
        <!-- InstanceEndEditable -->
    </div>
    
    <div class="container-fluid fondo_imagen">
    	<div class="container">
        	<div class="row">
                
                <div class="col-xs-12">
                	<hr class="featurette-divider" />
                	<div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-8">
							{literal}   
                            <form method="post" action="http://oi.vresp.com?fid=148cf0fed8" target="vr_optin_popup" onsubmit="window.open( 'http://www.verticalresponse.com', 'vr_optin_popup', 'scrollbars=yes,width=600,height=450' ); return true;" >
                            
                        
                            <h3>SUBSCRIBE TO OUR NEWSLETTER<div class="pull-right"><h5 style="font-family:'intro'; margin:0px;"><span style="color:#C00;">*</span> required</h5></div></h3>
                            
                            <div class="row">
                                <div class="form-group form-group-sm col-lg-4 col-sm-6 col-xs-12">
                                    <label for="email_address">Email Address: <span style="color:#C00;">*</span> </label>
                                    <input class="form-control" name="email_address" size="15" />
                                </div>
                                
                                <div class="form-group form-group-sm col-lg-4 col-sm-6 col-xs-12">
                                    <label for="first_name">First Name: </label>
                                    <input class="form-control" name="first_name" size="15" />
                                </div>
                                
                                <div class="form-group form-group-sm col-lg-4 col-sm-6 col-xs-12">
                                    <label for="last_name">Last Name: </label>
                                    <input class="form-control" name="last_name" size="15" />
                                </div>
                                
                                <div class="form-group form-group-sm col-lg-4 col-sm-6 col-xs-12">
                                    <label for="company_name">Company Name: </label>
                                    <input class="form-control" name="company_name" size="15" />
                                </div>
                             
                        
                                <div id="captchaPreview" class="field">
                                    <div class="form-group form-group-sm col-lg-4 col-sm-6 col-xs-12">
                                        <label for="captcha_guess" id="captcha_text">Enter the letters shown at: <span style="color:#C00;">*</span></label>	
                                        <input class="form-control" size="10" name="captcha_guess"/>
                                    </div>
                                    
                                    <div class="form-group form-group-sm col-lg-4 col-sm-6 col-xs-12" align="center">
                                        <img class="img-responsive" id="vrCaptchaImage" src="https://img.verticalresponse.com/blank.gif" width="260" />
                                    </div>
                                     
                                    <input type="hidden" id="vrCaptchaHash" name="captcha_hash" value="">
                                </div>
                            
                                <script>hex_chars=Array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f');hash='';hash_length=20;for(h=0;h<hash_length;h++){hash=hash+hex_chars[Math.floor(16*Math.random())];}document.getElementById('vrCaptchaHash').value=hash;captcha_image_url='https://captcha.vresp.com/produce/'+hash;document.getElementById('vrCaptchaImage').src=captcha_image_url;</script>
                                
                                <div class="form-group col-sm-6 col-lg-4">
                                <input class="btn btn-danger btn-block btn-sm" type="submit" value="Join Now" />
                                </div>
                        
                            </div>	
                            </form>
                        {/literal}  

                        </div>
                        
                        <div class="col-xs-12 col-md-6 col-lg-3 col-lg-offset-1">
                        	<div class="row" style="padding-bottom:20px;">
                            	<!-- <div class="col-xs-3" align="center">
                    				<a href="http://facebook.com/dartronicsinc/"><i class="fa fa-facebook fa-3x"></i></a>
                            	</div>
                                <div class="col-xs-3" align="center">
                    				<a href="http://twitter.com/dartronicsinc/"><i class="fa fa-twitter fa-3x"></i></a>
                                </div>
                                
                            	<div class="col-xs-3" align="center">
                            		<a href="http://instagram.com/dartronicsinc/"><i class="fa fa-instagram fa-3x"></i></a>
                                </div>
                                -->
                                <div class="col-xs-12" align="right">
                    				<a href="https://www.youtube.com/channel/UCFqi107CdIAwl-tPIgsv1pg"><i class="fa fa-youtube fa-3x"></i></a>
                                </div>
                            </div>
                                
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
   	<div class="container">
    	<div class="row">
        	<div class="col-xs-12 no_padding">
   	    <img class="img-responsive" src="/imagenes/logotipos_marcas.jpg" width="1612" height="134">
        	</div>
        </div>
    </div>
    
    <!-- Pie de Pagina -->
    <footer>
    	<div class="container">
            <div class="row">
            
            	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
                	<div class="row">
                    
                    	<div class="col-xs-4 col-sm-6 col-md-6 col-lg-4">
                            <ul class="items">
                            {section name=j loop=$enlaces_A}
                            <li>
    <a  class="foot-btn" title="{$enlaces_A[j].etiqueta_cat}" href="{$enlaces_A[j].url}~{$enlaces_A[j].id_cat}">{$enlaces_A[j].nombre_cat}</a>
                            </li>
                            {/section}
                            </ul>
                        </div>
                    
                        <div class="col-xs-4 col-sm-6 col-md-6 col-lg-4">
                        	<h5>DARTRONICS</h5>
                            <ul class="items">
                            {section name=i loop=$enlaces_B}
                                    <li>
     <a  title="{$enlaces_B[i].etiqueta_cat}" href="{$enlaces_B[i].url}_{$enlaces_B[i].id_cat}">{$enlaces_B[i].nombre_cat}</a>
                                    </li>
                            {/section}
                            </ul>
                        </div>
                        
                        <div class="col-xs-4 col-sm-6 col-md-6 col-lg-4">
                        	<h5>LEGAL</h5>
                            <ul class="items">
                            {section name=i loop=$enlaces_C}
                                    <li>
     <a  title="{$enlaces_C[i].etiqueta_cat}" href="{$enlaces_C[i].url}~{$enlaces_C[i].id_cat}">{$enlaces_C[i].nombre_cat}</a>
                                    </li>
                            {/section}
                            </ul>
                        </div>
                        
                    </div>
                </div>
                
            	<div  class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                     <div class="row">
                     	<div class="col-xs-12">
                     	 <h5>COMMENTS</h5>
                     		<form action="contacto.php" id="contacto2" name="contacto2" method="post" class="form-horizontal" role="form">
                         
                              <div class="form-group">
                                <label class="sr-only" for="nombre">Full Name</label>
                                <input type="text" class="form-control input-sm" name="nombre" id="nombre" placeholder="Full Name" value="{$nombre}">
                              </div>
                              
                              <div class="form-group">
                              	<label class="sr-only" for="telefono">Phone</label>
                              	<input  onkeypress="javascrip: return validarnum(event);" type="number" class="form-control" name="telefono" id="telefono" placeholder="Phone" value="{$telefono}">
                              </div>
                              
                              <div class="form-group">
                                <label class="sr-only" for="correo">Mail</label>
                                <input type="email" class="form-control input-sm" name="email" id="email" 									   placeholder="yourmail@server.com" value="{$email}">
                              </div>
                              
                              <div class="form-group">
                                <label class="sr-only" for="mensaje">Message</label>
                                <textarea type="text" class="form-control input-sm" name="comentario" id="comentario" placeholder="Message">{$comentario}</textarea>
                                       
                              </div>
                          
                              <div class="form-group">
                              	<input onclick="javascript: return validarformulario2();" class="btn btn-md btn-danger btn-block" name="envio" type="submit" id="envio" value="SEND" />
                              </div>
                          
							  </form>
                            
                          </div>
                     </div>
                   
                </div>
                
            	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">

                    <h5>CONTACT US</h5>
                    <h6>Phone +01 (732) 324-0800<br />Fax +01 (732) 324-4488</h6>
					<h6><a href="mailto: sales@dartronics.com" title="Contact Us">sales@dartronics.com</a></h6>
                    <h6>150 William Street Perth Amboy, NJ 08861</h6>
                	<br /><br />
                
                	<h6>All Right Reserved Dartronics, Inc. &copy;2016</h6>
                    <h6>Design <a href="http://www.mas58studio.com" target="_blank">+58 Studio C.A.</a><br />Developer <a class="enlace" href="http://www.diazcreativos.net.ve" target="_blank">D&iacute;az Creativos</a></h6>
                    
                </div>
                
            </div>
      </div>
</footer> 


    <script src="/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
   

  </body>
<!-- InstanceEnd --></html>