<?php
/* Smarty version 3.1.29, created on 2017-10-06 22:42:00
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/layout/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59d7ea98610756_23484045',
  'file_dependency' => 
  array (
    'ba6dbcfa2d826459d7017c8df7be38c23cb88596' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/layout/footer.tpl',
      1 => 1507322516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d7ea98610756_23484045 ($_smarty_tpl) {
?>
<!-- Pie de Página
================================================== -->
<div class="container-fluid">
  <footer>
    <div class="row">                 <!-- Contenedor de suscripcion-->
      <div class="col-xs-10 col-xs-pull-1 col-xs-push-1" align="center">
        <div class="row bordes_verdes">
          <div class="col-xs-12 col-md-2 color_verde">
               <h4>SUSCRÍBETE</h4>
          </div>
          <div class="col-xs-12 col-md-7 col-lg-7">
            <p class="alineamiento1">Recibe notificaciones sobre nuevos productos y ofertas especiales para ti.</p>
          </div>
          <div class="col-xs-12 col-md-3 alineamiento2">
            <form id="footer" name="footer" method="post" action="/..#footer">
              <div class="col-xs-9 no_padding1">
                <input type="text" name="correoSusc" class="maximo" placeholder="Coloca tú email" value="" onkeypress="javascrip: return validar_correo(event);">
              </div>
              <div class="col-xs-3 no_padding1">
                <button class="maximo" name="go" type="submit" id="go" value="Go">
                  <i class="fa fa-chevron-right fa-lg" aria-hidden="true"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-xs-10 col-xs-pull-1 col-xs-push-1" align="right">
        <h4 class="fuente_verde"><?php echo $_smarty_tpl->tpl_vars['mensaje3']->value;?>
</h4>
      </div>
    </div>                <!-- Fin del Contenedor de suscripcion-->

    <div align="center"><hr></div>         <!-- linea de separacion-->

    <div class="row">                             
      <div class="col-xs-12">
        <div class="row">
          <div class="col-md-4 visible-lg visible-md " align="left">
            <a href="http://diazcreativos.net" target="_blank">
              <div class="row">
                <div class="col-xs-3 no_padding1" align="right">
                  <img src="/imagenes/logo-firma.png" alt="Desarrollado por Díaz Creativos" border="0">
                </div>
                <div class="col-xs-9">
                  <p class="fuente_gris">Díaz Creativos</p>
                </div>
              </div>
            </a> 
          </div>

          <div class="col-xs-12 col-md-4" align="center">
            <p>©2017 Derechos Reservados. Uniformese.</p>
          </div>

          <div class="col-xs-12 visible-xs visible-sm no_padding1" align="center">
            <p>
              <a href="http://diazcreativos.net" target="_blank">
              <div class="row">
                <div class="col-xs-2 no_padding1" align="right">
                  <img src="/imagenes/logo-firma.png" alt="Desarrollado por Díaz Creativos" border="0">
                </div>
                <div class="col-xs-10" align="left">
                  <p class="fuente_gris">Díaz Creativos</p>
                </div>
              </div>
            </a> 
            </p>
          </div>

          <div class="col-xs-12 col-md-4" align="right">
            <div class="row">
              <div class="col-xs-10 no_padding1">
                <p>Volver Arriba</p>
              </div>
              <div class="col-xs-2" align="left">
                <a href="#inicio">
                  <i class="fa fa-arrow-up fa-2x fuente_verde" aria-hidden="true"></i>
                </a> 
              </div>
            </div>
          </div>

        </div>
      </div>

      

    </div>
  </footer>
</div>
<?php }
}
