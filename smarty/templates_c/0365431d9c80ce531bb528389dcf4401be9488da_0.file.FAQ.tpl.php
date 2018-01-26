<?php
/* Smarty version 3.1.29, created on 2018-01-26 15:36:27
  from "D:\Websites\Prevaler\smarty\templates\layout\FAQ.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a6b4afb695bd4_74286103',
  'file_dependency' => 
  array (
    '0365431d9c80ce531bb528389dcf4401be9488da' => 
    array (
      0 => 'D:\\Websites\\Prevaler\\smarty\\templates\\layout\\FAQ.tpl',
      1 => 1516980918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6b4afb695bd4_74286103 ($_smarty_tpl) {
?>
<div class="col-xs-12">
    <div class="row">
        <div class="col-xs-5 no_padding1">
            <h3>PREGUNTAS FRECUENTES</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-5 pregunta">
            <ul class="nav" id="side-menu">
              <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
              <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['faq']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

                <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                <li>
                <?php if ($_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'] == $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_faq']) {?>
                    <a  id="<?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_faq'];?>
" onclick="return faq();" style="cursor:pointer;" <?php if ($_smarty_tpl->tpl_vars['cont']->value == '1') {?> class="no-push btn-push" <?php } else { ?> class="no-push"<?php }?>><i class="fa fa-circle" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pregunta_faq'];?>
<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <?php } else { ?>
                    <a  id="<?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_faq'];?>
" onclick="return faq2();" style="cursor:pointer;"><i class="fa fa-circle" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pregunta_faq'];?>
</a>
                    <ul class="nav nav-second-level">
                       <?php
$__section_j_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__smarty_section_j'] : false;
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista']) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total != 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                        <li>
                        <a  id="<?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id_faq'];?>
" onclick="return faq();" style="cursor:pointer;"><i class="fa fa-circle" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['pregunta_faq'];?>
<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </li>
                       <?php
}
}
if ($__section_j_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_1_saved;
}
?>
                    </ul>
                <?php }?>
                </li>

              <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
            </ul>
        </div>
        <div class="col-xs-7 respuesta">
            <div class="row">
              <div class="col-xs-12">
                <div class="row" id="default" style="display: block;">
                    <div class="col-lg-8 marco-faq">
                      <p class="text-justify formato-faq">
                        <?php echo $_smarty_tpl->tpl_vars['faq']->value[0]['respuesta_faq'];?>

                      </p>
                    </div>
                  </div>
                <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['faq']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  <?php $_smarty_tpl->tpl_vars["cont"] = new Smarty_Variable($_smarty_tpl->tpl_vars['cont']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cont", 0);?>
                  <?php if ($_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'] == $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_faq']) {?>
                    <div class="row" id="panel_<?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_faq'];?>
" style="display: none;">
                      <div class="col-lg-8 marco-faq">
                        <p class="text-justify formato-faq">
                          <?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['respuesta_faq'];?>

                        </p>
                      </div>
                    </div>
                  <?php } else { ?>
                    <?php
$__section_j_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__smarty_section_j'] : false;
$__section_j_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista']) ? count($_loop) : max(0, (int) $_loop));
$__section_j_3_total = $__section_j_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_3_total != 0) {
for ($__section_j_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_3_iteration <= $__section_j_3_total; $__section_j_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                      <?php if ($_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['lista2'][0]['respuesta_faq'] == '') {?>
                        <div class="row" id="panel_<?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id_faq'];?>
" style="display: none;">
                          <div class="col-lg-8 marco-faq">
                            <p class="text-justify formato-faq">
                              <?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['respuesta_faq'];?>

                            </p>
                          </div>
                        </div>
                      <?php } else { ?>
                        <div class="row" id="panel_<?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id_faq'];?>
" style="display: none;">
                          <div class="col-lg-8 marco-faq">
                            <?php
$__section_k_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_k']) ? $_smarty_tpl->tpl_vars['__smarty_section_k'] : false;
$__section_k_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['lista2']) ? count($_loop) : max(0, (int) $_loop));
$__section_k_4_total = $__section_k_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_4_total != 0) {
for ($__section_k_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_4_iteration <= $__section_k_4_total; $__section_k_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                              <div class="panel panel-default">
                                <a class="formato-faq" href="#panel_<?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['lista2'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id_faq'];?>
" onclick="faq2()" title="Ver Respuesta" id="<?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['lista2'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id_faq'];?>
"><div class="panel-heading"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['lista2'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['pregunta_faq'];?>
</div></a>
                              </div>
                              <?php if ($_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['lista2'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['respuesta_faq'] != '') {?>
                                <div class="panel panel-default" id="visible_<?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['lista2'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id_faq'];?>
" style="display:none;">
                                  <div class="panel-body">
                                    <p class="text-justify">
                                      <?php echo $_smarty_tpl->tpl_vars['faq']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lista'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['lista2'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['respuesta_faq'];?>

                                    </p>
                                  </div>
                                </div>
                              <?php }?> 
                            <?php
}
}
if ($__section_k_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_k'] = $__section_k_4_saved;
}
?>
                          </div>
                        </div>
                      <?php }?>
                    <?php
}
}
if ($__section_j_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_3_saved;
}
?>
                  <?php }?>
                <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
              </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
