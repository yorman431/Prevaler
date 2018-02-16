<?php
/* Smarty version 3.1.29, created on 2018-02-16 18:53:47
  from "D:\Websites\Prevaler\smarty\templates\sedes.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8728bbcef528_61368632',
  'file_dependency' => 
  array (
    'bef29596a635554cdf7f40855846b7e0940717c9' => 
    array (
      0 => 'D:\\Websites\\Prevaler\\smarty\\templates\\sedes.tpl',
      1 => 1518807218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/botonera.tpl' => 1,
    'file:layout/banner.tpl' => 1,
    'file:layout/publicidad.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_5a8728bbcef528_61368632 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<!-- InstanceBeginEditable name="contenido" -->
    
<div class="container-fluid">

  <div class="row sedes">

    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1">
     <div class="row">
       <div class="col-md-3 no_padding1" align="center">
         <span class="fuente_morada">SEDES PREVALER</span>
       </div>
       <div class="col-md-9 no_padding1" align="center">
         <span>Conoce nuestras especialidades y servicios, horarios, cobertura de seguros en cada una de nuestras sedes.</span>
       </div>
     </div>
   </div>

  </div>

  <div class="row ubicacion">
    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1">
     <div class="row">
        <div class="col-md-7">
          <div id="banner_sede" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                      <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                      <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listado']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <li data-target="#banner_sede" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['cont']->value == "0") {?>class="active"<?php }?>></li>
                          <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                      <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                  </ol>

                  <div class="carousel-inner" role="listbox">
                      <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                      <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listado']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <div <?php if ($_smarty_tpl->tpl_vars['cont']->value == "0") {?> class="item active" <?php } else { ?> class="item" <?php }?>>
                            <img class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_image'];?>
" src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['directorio_image'];?>
">
                        </div>
                          <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                      <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
                  </div>
                 
          </div>
          <h3>
            <i class="fa fa-circle " aria-hidden="true"></i>
            <?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>

          </h3>
          <P><?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
</P>
        </div>

        <div class="col-md-5">
          <div class="row" id="map"></div>
          <h3><i class="fa fa-circle " aria-hidden="true"></i>Ubicación y Contacto.</h3>
          <P><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['ubicacion']->value;?>
</P>
          <p><i class="fa fa-phone fa-lg" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>
</p>
        </div>

      </div>
    </div>
  </div>

  <div class="row sedes" align="center">
    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 titulo no_padding1">
      <hr class="color_morado">
      <span class="fuente_morada">ESPECIALIDADES MÉDICAS</span>
    </div>

    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 no_padding1">
      <div class="row">
        <div class="col-xs-5 col-md-4 col-lg-2" align="left">
          <div class="row especialidades">
                <div class="col-xs-12">
                  <ul class="nav" id="side-menu">
                    <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                    <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['especialidad']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

                      <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                      <li>
                        <a id="<?php echo $_smarty_tpl->tpl_vars['especialidad']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_fac'];?>
" onclick="javascript: return faq3();" style="cursor:pointer;" <?php if ($_smarty_tpl->tpl_vars['cont']->value == '1') {?> class="no-push btn-push" <?php } else { ?> class="no-push"<?php }?>>
                          <?php echo $_smarty_tpl->tpl_vars['especialidad']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_fac'];?>

                          <i class="fa fa-chevron-right" aria-hidden="true"></i>
                          <ul class="hidden-md hidden-lg">
                            
                          </ul>
                        </a>
                      </li>
                    <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>  
                  </ul>
                </div>
                <!-- /.sidebar-collapse -->
          </div>
        </div>

        <div class="col-xs-7 col-md-8 col-lg-9 ver_medico">
          <div id="default" class="row" style="display: block;">

              <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>            
              <?php
$__section_i_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['medico']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total != 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['especialidad']->value[0]['id_fac'];
$_tmp1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['especialidad_med'];
$_tmp2=ob_get_clean();
if ($_tmp1 == $_tmp2) {?>
                  <div class="col-xs-11 default">
                    <img class="img-responsive img-circle" <?php ob_start();
echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['imagenes'];
$_tmp3=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['imagenes'];
$_tmp4=ob_get_clean();
if ($_tmp3 == null || $_tmp4 == '') {?> src="/imagenes/mi_perfil.png"<?php } else { ?> src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['imagenes'];?>
"<?php }?>>
                    <ul>
                      <span class="fuente_morada"><?php echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_med'];?>
</span>
                      <i class="fa fa-circle"></i><?php echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descripcion_med'];?>

                    </ul>
                  </div>
                <?php }?>
              <?php
}
}
if ($__section_i_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_3_saved;
}
?>

          </div>

          <div class="row">

            <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>

            <?php
$__section_i_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['medico']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total != 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

              <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
              <div class="col-xs-11 panel_<?php echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['especialidad_med'];?>
" style="display: none;">
               
                <img class="img-responsive img-circle" <?php ob_start();
echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['imagenes'];
$_tmp5=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['imagenes'];
$_tmp6=ob_get_clean();
if ($_tmp5 == null || $_tmp6 == '') {?> src="/imagenes/mi_perfil.png"<?php } else { ?> src="/imagenes/<?php echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['imagenes'];?>
"<?php }?>>
                <ul>
                  <span class="fuente_morada"><?php echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_med'];?>
</span>
                  <i class="fa fa-circle"></i><?php echo $_smarty_tpl->tpl_vars['medico']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descripcion_med'];?>

                </ul>
              </div>
            <?php
}
}
if ($__section_i_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_4_saved;
}
?>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12" style="margin-top: 50px;">
      <a href="cita_online.php" class="btn-info">SOLICITAR CITA</a>
    </div>
    <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 titulo no_padding1">
      <hr class="color_morado">
      <span class="fuente_morada">NUESTROS SERVICIOS</span>
    </div>

    <?php
$_from = $_smarty_tpl->tpl_vars['servicios']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_servicio_0_saved_item = isset($_smarty_tpl->tpl_vars['servicio']) ? $_smarty_tpl->tpl_vars['servicio'] : false;
$_smarty_tpl->tpl_vars['servicio'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['servicio']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['servicio']->value) {
$_smarty_tpl->tpl_vars['servicio']->_loop = true;
$__foreach_servicio_0_saved_local_item = $_smarty_tpl->tpl_vars['servicio'];
?>

    <div class="col-xs-12 col-md-6">
      <div class="row">
        <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1">
          <div class="panel-heading">
            <img class="img-responsive hidden-xs" src="imagenes/happy.png">
            <span><?php echo $_smarty_tpl->tpl_vars['servicio']->value['titulo'];?>
</span>
          </div>
          <div class="panel-body">
            <p>
              <?php echo $_smarty_tpl->tpl_vars['servicio']->value['descripcion'];?>

            </p>
          </div>
        </div>
      </div>
    </div>

    <?php
$_smarty_tpl->tpl_vars['servicio'] = $__foreach_servicio_0_saved_local_item;
}
if ($__foreach_servicio_0_saved_item) {
$_smarty_tpl->tpl_vars['servicio'] = $__foreach_servicio_0_saved_item;
}
?>

    <div class="col-xs-12">
      <button href="" onclick="history.back()" class="btn-info">VOLVER</button>
    </div>
  </div>

  <div class="row publicidad">  <!-- Contenedor de Banner Publicitario-->

     <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    

  </div>        <!-- Fin del Contenedor de Banner Publicitario-->

  <div class="row contacto">  <!-- Contenedor de Contacto-->

    <div class="col-xs-12" id="contacto">
      <div class="row">

        <hr class="color_morado">

        <div class="col-xs-12 titulo" align="center">
          <span class="fuente_morada">CONTACTO</span>
        </div>

        <div class="col-md-6">
          <form class="form-horizontal" role="form" action="/sedes.php#contacto" method="post" name="contact" id="contact">
            <div class="panel panel-default panel-contacto">
              <div class="panel-heading"></div>
              <div class="panel-body">
          
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <input  type="text" name="nombre" id="nombre" placeholder="Nombre / Empresa" value="" required="required">
                </div>
            
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <input  type="text" name="telefono" id="telefono" placeholder="Teléfono" value="" required="required">
                </div>
          
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <input  type="email" id="email" name="email" placeholder="Email" value="" required="required">
                </div>
           
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <select id="sede" name="sede" required="required">
                    <option selected hidden value="">Seleccione la Sede</option>
                    <?php
$__section_i_5_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sede']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total != 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['sede']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_sede'];?>
"><?php echo $_smarty_tpl->tpl_vars['sede']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_sede'];?>
</option>
                    <?php
}
}
if ($__section_i_5_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_5_saved;
}
?>
                  </select>
                </div>
           
                <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
                  <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                  <input type="text" rows="3" name="comentario" id="comentario" placeholder="Mensaje" value="" required="required">
                </div>
  
              </div>

              <div class="panel-footer" align="right">
                <div  class="col-xs-11 no_padding1">
                  <button onclick="javascript: return validarformulario();" name="enviar" type="submit" id="enviar" value="Enviar1" class="btn-info">Enviar</button>
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <h4 class="fuente_morada"><?php echo $_smarty_tpl->tpl_vars['mensaje2']->value;?>
</h4>
            </div>
          </form>
        </div>

        <div class="col-md-6">
          <div class="row"  align="center">

            <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Caracas
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 773.86.33)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            caracas@prevaler.com
            </span>

            <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Maracay
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 773.82.53)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            maracay@prevaler.com
            </span>

            <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Porlamar
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0295 400.94.00)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            porlamar@prevaler.com
            </span>

            <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Valencia Norte
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 773.82.53)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            valencianorte@prevaler.com
            </span>

            <span>
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Valencia Sur
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 773.82.53)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            valenciasur@prevaler.com
            </span>

          </div>
        </div>
      </div>
    </div>
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
 type='text/javascript'>
  var map;
  var infowindow;

  function initMap() {
    var pyrmont = new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['latitud']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['longitud']->value;?>
);

    map = new google.maps.Map(document.getElementById('map'), {
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: pyrmont,
      zoom: 16
    });

    var image = '/imagenes/logo.png';
    var myLatLng = new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['latitud']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['longitud']->value;?>
);
    var beachMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
    });

    var request = {
      location: pyrmont,
      radius: 2,
      types: ['store']
    };
    infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);
    service.search(request, callback);
  }

  function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
        createMarker(results[i]);
      }
    }
  }

  function createMarker(place) {
    var placeLoc = place.geometry.location;
    var marker = new google.maps.Marker({
      map: map,
      position: place.geometry.location
    });

    google.maps.event.addListener(marker, 'click', function() {
      infowindow.setContent(place.name);
      infowindow.open(map, this);
    });
  }

  google.maps.event.addDomListener(window, 'load', initMap);
<?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/javascript">

  $(document).ready(function(){
    $('.fa-arrow-up').click(function(){
      $('body, html').animate({
        scrollTop: '0px'
      }, 300);
    });
  });

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
      $('[id=especialidad-]').click(function(){
        var id_selector = $(this).attr("id");
        var id = id_selector.substr(id_selector.length -1);
        $('[id=medico-'+id+']').css('display', 'block');
        $('[id^=medico-]').css('display', 'none');
      });
    });
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/javascript">       /// resalta las opcion seleccionada
      $(document).ready(function(){       /// de preguntas frecuentes
        $('.no-push').click(function(e){
          $('.no-push').removeClass('btn-push');
          $(this).addClass('btn-push');
        })
      });
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/javascript">
      $(document).ready(function(){
        $('a.transicion').click(function(e){
          e.preventDefault();
          enlace = $(this).attr('href');
          $('html, body').animate({
            scrollTop: $(enlace).offset().top-100
          }, 1000);
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
