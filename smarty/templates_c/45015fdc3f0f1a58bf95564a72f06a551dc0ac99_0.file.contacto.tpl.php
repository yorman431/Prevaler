<?php
/* Smarty version 3.1.29, created on 2017-11-10 21:35:00
  from "/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/layout/contacto.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a060d74a314f2_24462177',
  'file_dependency' => 
  array (
    '45015fdc3f0f1a58bf95564a72f06a551dc0ac99' => 
    array (
      0 => '/Applications/MAMP/htdocs/delle_cucine/smartylib/templates/layout/contacto.tpl',
      1 => 1510090443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a060d74a314f2_24462177 ($_smarty_tpl) {
?>
 <div class="col-xs-12" id="contacto">
   <div class="row">
     <div class="col-xs-12" align="center">
       <img class="img-responsive" src="/imagenes/contacto.png">
     </div>
     <div class="col-xs-12 col-md-3">
     <form class="form-horizontal" role="form" action="/index.php#contacto" method="post" name="contact" id="contact">
        <div class="panel panel-default panel-contacto">
          <div class="panel-heading">
            <span class="fuente_gris"><i class="fa fa-circle" aria-hidden="true"></i>CONTACTO</span>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <input  type="text" name="nombre" id="nombre" placeholder="Nombre" value="" required="required">
            </div>
            <div class="form-group">
              <input  type="text" name="telefono" id="telefono" placeholder="Teléfono" value="" required="required">
            </div>
            <div class="form-group">
              <input  type="email" id="email" name="email" placeholder="Email" value="" required="required">
            </div>
            <div class="form-group">
              <input type="text" rows="3" name="comentario" id="comentario" placeholder="Mensaje" value="" required="required">
            </div>
          </div>
          <div class="panel-footer" align="right">
            <button onclick="javascript: return validarformulario();" name="enviar" type="submit" id="enviar" value="Enviar1">
              Enviar
            </button>
          </div>
        </div>
        <div class="col-xs-12">
          <h4><?php echo $_smarty_tpl->tpl_vars['mensaje2']->value;?>
</h4>
        </div>
       </form>
    </div>

    <div class="col-md-6">
      <div class="row">
        <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 bordes_verdes no_padding1">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.905031671619!2d-80.26641014861482!3d26.102018583402476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d907efc31f7765%3A0x2d546b371ab61b6b!2s8606+W+State+Rd+84%2C+Davie%2C+FL+33324%2C+EE.+UU.!5e0!3m2!1ses-419!2sve!4v1510076514447" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="row">
        <div class="col-xs-1 no_padding1" align="right">
          <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i> 
        </div>
        <div class="col-xs-11">
          <p class="fuente_gris">
              8606 W State Road, Davie, Fl 33324. 
          </p>
        </div>
        <br>
        <div class="col-xs-1 no_padding1" align="right">
          <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
        </div>
        <div class="col-xs-11">
          <p class="fuente_gris">    
              +1 (954) 451-3247  
          </p>
        </div>
        <br>
        <div class="col-xs-1 no_padding1" align="right">
          <i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
        </div>
        <div class="col-xs-11">
          <p class="fuente_gris">dellecucine@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</div><?php }
}
