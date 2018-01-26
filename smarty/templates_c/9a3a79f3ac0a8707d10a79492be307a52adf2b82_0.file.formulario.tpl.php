<?php
/* Smarty version 3.1.29, created on 2017-04-26 18:05:59
  from "/Applications/MAMP/htdocs/preolca/smartylib/templates/admin/contenido/formulario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5900c5673c9370_34028514',
  'file_dependency' => 
  array (
    '9a3a79f3ac0a8707d10a79492be307a52adf2b82' => 
    array (
      0 => '/Applications/MAMP/htdocs/preolca/smartylib/templates/admin/contenido/formulario.tpl',
      1 => 1493222755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/layout/header.tpl' => 1,
    'file:admin/layout/navigation.tpl' => 1,
    'file:admin/layout/firma.tpl' => 1,
    'file:admin/layout/footer.tpl' => 1,
  ),
),false)) {
function content_5900c5673c9370_34028514 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/ckfinder/ckfinder.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
  window.onload = function() {
    var editor = CKEDITOR.replace('contenido', {
      toolbar: [
        ['Font', 'FontSize', 'TextColor', 'RemoveFormat', '-', 'Table', 'Image', 'Source', 'Templates'], '/',

        ['Bold', 'Italic', 'Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink'],
        ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
        ['Maximize', 'ShowBlocks']

      ],

      allowedContent: 'hr br img ol ul li a h1 h2 h3 h4 h5 h6 strong em u[*](*); p[*](*){text-align}; table[*](*){cellpadding, cellspacing}; style[*](*); tr td[*](*); span[*](*){color,font-size,font-family}; div[*](*)'

    });
    CKFinder.setupCKEditor(editor, '../../ckfinder/');
  };
<?php echo '</script'; ?>
>


  <div id="wrapper">

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layout/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Contenido Principal
================================================== -->
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><?php echo $_smarty_tpl->tpl_vars['accion']->value;?>

            <div class="pull-right">
              <!-- Filtros -->
              <!-- Fin Filtros -->
            </div>
          </h3>
        </div>
        <!-- /.col-lg-12 -->
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <?php if ($_smarty_tpl->tpl_vars['mensaje']->value != '') {?>
                  <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div><?php }?>
                  <form action="" method="post" name="form1" id="form1" onsubmit="MM_validateForm('nombre','','R','f_date_c','','R');return document.MM_returnValue">
                    <div class="form-group">
                      <label class="sr-only" for="nombre">Nombre</label>
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre*" value="<?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>
">
                    </div>
                    <div class="form-group">
                      <label for="enlace">Enlace</label>
                      <select class="form-control" name="enlace" id="enlace" onchange="javascripts: document.form1.submit();">
                        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listado']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['enlace']->value == $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_cat'] || $_smarty_tpl->tpl_vars['enlace']->value == $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat']) {?> selected='selected' <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['listado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_cat'];?>
</option>
                        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="subenlace">Subenlace</label>
                      <select class="form-control" name="subenlace" id="subenlace">
                        <option value="1">Ninguno(Principal)</option>
                        <?php
$__section_j_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__smarty_section_j'] : false;
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listado2']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total != 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['subenlace']->value == $_smarty_tpl->tpl_vars['listado2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['nombre_sub']) {?>selected='selected' <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['listado2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id_sub'];?>
"><?php echo $_smarty_tpl->tpl_vars['listado2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['nombre_sub'];?>
</option>
                        <?php
}
}
if ($__section_j_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_1_saved;
}
?>
                      </select>
                    </div>
                    <div class="form-group">
                      <div class='input-group date' id='datetimepicker1'>
                        <label class="sr-only" for="fecha">Fecha</label>
                        <input onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="fecha" id="fecha" placeholder="Fecha*" value="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
">
                        <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="contenido">Contenido</label>
                      <textarea class="form-control" rows="4" name="contenido" id="contenido" placeholder="Contenido"><?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>
</textarea>
                    </div>

                    <div class="form-group">
                      <input onclick="javascript: return validarcontenido('&iquest;Est&aacute; seguro que desea guardar?');" class="btn btn-md btn-success" name="envio" type="submit" id="envio" value="Guardar" />
                      <input onclick="javascript: location.href='/admin/contenido/'" class="btn btn-md btn-default" name="envio" type="button" id="cancelar" value="Cancelar" /> (*) Datos Obligatorios
                    </div>
                  </form>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="well">
                    <h4>Información sobre creación de contenidos</h4>
                    <p>Sed tincidunt, ante nec congue porta, sapien diam commodo urna, nec gravida diam elit at massa. Proin commodo consequat nulla quis commodo. Suspendisse potenti. Pellentesque at rutrum ex, vitae luctus lorem. Aliquam erat volutpat. Ut a
                      ligula ullamcorper diam pretium viverra nec ut mauris.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
        </div>

      </div>

      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layout/firma.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      </div>
      <!-- /#page-wrapper -->

  <!-- Fin Contenido Principal
  ================================================== -->

    </div>
    <!-- /#wrapper -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<link href="/css/bootstrap-datetimepicker.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="/js/moment-with-locales.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/bootstrap-datetimepicker.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
  $(function() {
    $('#datetimepicker1').datetimepicker({
      viewMode: 'years',
      format: 'DD/MM/YYYY'
    });
  });
<?php echo '</script'; ?>
>

<!-- InstanceEndEditable -->
<?php }
}
