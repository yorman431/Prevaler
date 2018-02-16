<?php
/* Smarty version 3.1.29, created on 2018-02-16 19:32:24
  from "D:\Websites\Prevaler\smarty\templates\admin\layouts\menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a8731c8dcb658_06131747',
  'file_dependency' => 
  array (
    'b7e13a1bc355ed4c59488a300386343519ee6318' => 
    array (
      0 => 'D:\\Websites\\Prevaler\\smarty\\templates\\admin\\layouts\\menu.tpl',
      1 => 1513707288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8731c8dcb658_06131747 ($_smarty_tpl) {
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
        <a title="Inicio" class="navbar-brand" href="/admin/panel_central.php">Panel de Control</a>
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
"><i class="fa fa-user fa-fw"></i>Perfil de Usuario</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuraci&oacute;n</a>
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

    <div class="navbar-default sidebar"  role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
              <li>
                  <div align="center" class="hidden-xs"><img src="/imagenes/logo_admin.png" width="220px" class="img-responsive"></div>
                </li>
              
                <li>
                    <a href="/admin/panel_central.php"><i class="fa fa-dashboard fa-fw"></i> Panel de Control</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-desktop fa-fw"></i> Interface Web<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                      <li>
                            <a href="/admin/link/"><i class="fa fa-link fa-fw"></i> Enlaces</a>
                        </li>
                        <li>
                            <a href="/admin/contenido/"><i class="fa fa-file-text fa-fw"></i> Contenidos</a>
                        </li>
                        <li>
                            <a href="/admin/banner/"><i class="fa fa-photo fa-fw"></i> Banner</a>
                        </li>
                        <li>
                            <a href="/admin/publicidad/"><i class="fa fa-photo fa-fw" aria-hidden="true"></i> Publicidad</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="/admin/sede/"><i class="fa fa-hospital-o" aria-hidden="true"></i></i> Sedes</a>
                  <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="/admin/especialidad/"><i class="fa fa-stethoscope" aria-hidden="true"></i></i> Especialidades</a>
                  <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="/admin/medico/"><i class="fa fa-user-md" aria-hidden="true"></i> Especialistas</a>

                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="/admin/seguro/"><i class="fa fa-building" aria-hidden="true"></i> Aseguradoras</a>

                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="/admin/faq/">
                        <i class="fa fa-question-circle" aria-hidden="true"></i> 
                        Preguntas Frecuentes</a>
                  <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="/admin/noticia/"><i class="fa fa-file-text-o" aria-hidden="true"></i> Noticias</a>
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
