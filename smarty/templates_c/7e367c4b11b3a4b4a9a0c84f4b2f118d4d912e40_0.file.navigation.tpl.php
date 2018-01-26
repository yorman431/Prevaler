<?php
/* Smarty version 3.1.29, created on 2017-08-21 17:05:02
  from "/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/layout/navigation.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_599af69e823b85_92916775',
  'file_dependency' => 
  array (
    '7e367c4b11b3a4b4a9a0c84f4b2f118d4d912e40' => 
    array (
      0 => '/Applications/MAMP/htdocs/uniformese/smartylib/templates/admin/layout/navigation.tpl',
      1 => 1492685900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599af69e823b85_92916775 ($_smarty_tpl) {
?>
  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a title="Inicio" class="navbar-brand" href="/admin/panel_central.php">Prefabricados | CMS</a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">
      <!-- /.dropdown -->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-user fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
 <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
          <li><a href="/admin/usuario/editar.php?id=<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a>
          </li>
          <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuración</a>
          </li>
          <li class="divider"></li>
          <li><a href="/admin/cerrar_session.php"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
          </li>
        </ul>
        <!-- /.dropdown-user -->
      </li>
      <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" style="background-color:#f8f8f8;" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
          <li>
            <div align="center" class="hidden-xs"><img src="/imagenes/logo_admin.png" width="220px" class="img-responsive"></div>
          </li>
          <li class="sidebar-search">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button style="padding: 9px 12px;" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div>
            <!-- /input-group -->
          </li>
          <li>
            <a href="/admin/panel_central.php"><i class="fa fa-dashboard fa-fw"></i>Panel Principal</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-desktop fa-fw"></i> Interfaz Web<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="/admin/link/"><i class="fa fa-link fa-fw"></i>  Enlaces</a>
              </li>
              <li>
                <a href="/admin/contenido/"><i class="fa fa-file-text fa-fw"></i> Contenidos</a>
              </li>
              <li>
                <a href="/admin/banner/"><i class="fa fa-photo fa-fw"></i> Banner</a>
              </li>
            </ul>
            <!-- /.nav-second-level -->
          </li>
          <li>
              <a href="/admin/usuario/"><i class="fa fa-user fa-fw"></i> Usuarios</a>
              <!-- /.nav-second-level -->
          </li>
        </ul>
      </div>
      <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
  </nav>
<?php }
}
