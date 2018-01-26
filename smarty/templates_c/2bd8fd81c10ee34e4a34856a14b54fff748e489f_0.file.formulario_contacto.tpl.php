<?php
/* Smarty version 3.1.29, created on 2017-10-11 20:33:34
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/layout/formulario_contacto.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59de63fec55104_41969426',
  'file_dependency' => 
  array (
    '2bd8fd81c10ee34e4a34856a14b54fff748e489f' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/layout/formulario_contacto.tpl',
      1 => 1506021413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59de63fec55104_41969426 ($_smarty_tpl) {
?>
 <form class="form-horizontal" role="form" action="/contacto.php#contact" method="post" name="contact" id="contact">
        <div class="panel panel-default panel-contacto">
          <div class="panel-heading preolca-contacto" align="center">
            <h2 class="fuente_verde">CONTACTO</h2>
            <hr class="color_verde">
          </div>
          <div class="panel-body">
            <div class="form-group">
              <input  type="text" name="nombre" id="nombre" placeholder="Nombre Completo" value="" required="required">
            </div>
            <div class="form-group">
              <input  type="text" name="telefono" id="telefono" placeholder="Teléfono" value="" required="required">
            </div>
            <div class="form-group">
              <input  type="email" id="email" name="email" placeholder="tucorreo@servidor.com" value="" required="required">
            </div>
            <div class="form-group">
              <input type="text" rows="3" name="comentario" id="comentario" placeholder="Mensaje" value="" required="required">
            </div>
          </div>
          <div class="panel-footer" align="right">
            <button onclick="javascript: return validarformulario();" name="enviar" type="submit" id="enviar" value="Enviar">
              <img class="img-responsive" src="/imagenes/enviar.png">
            </button>
          </div>
        </div>
        <div class="col-xs-12">
          <h4 class="fuente_verde"><?php echo $_smarty_tpl->tpl_vars['mensaje2']->value;?>
</h4>
        </div>
       </form><?php }
}
