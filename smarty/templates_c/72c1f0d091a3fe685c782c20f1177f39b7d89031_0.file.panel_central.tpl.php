<?php
/* Smarty version 3.1.29, created on 2018-02-09 18:39:39
  from "D:\Websites\Prevaler\smarty\templates\admin\panel_central.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a7deaebdf22a3_95203915',
  'file_dependency' => 
  array (
    '72c1f0d091a3fe685c782c20f1177f39b7d89031' => 
    array (
      0 => 'D:\\Websites\\Prevaler\\smarty\\templates\\admin\\panel_central.tpl',
      1 => 1508347356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/layouts/head2.tpl' => 1,
    'file:admin/layouts/menu.tpl' => 1,
    'file:admin/layouts/footer.tpl' => 1,
  ),
),false)) {
function content_5a7deaebdf22a3_95203915 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" -->
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layouts/head2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	  <link href='//fonts.googleapis.com/css?family=Open+Sans:600,400,300' rel='stylesheet'>
</head>

<body>

    <div id="wrapper">

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layouts/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div id="page-wrapper">
        	<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><?php echo $_smarty_tpl->tpl_vars['accion']->value;?>

                    	<div class="pull-right">

                    	</div>
                    </h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
      	        <div class="col-xs-12">
        	          <div id="embed-api-auth-container"></div>
                    <div id="chart-container"></div>
                    <div id="view-selector-container"></div>
                </div>
            </div>

            <hr class="divider" />

            <div class="row">
                <div class="col-lg-8">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        PANEL ADMINISTRATIVO DELLE CUCINE
                    </div>
                    <!-- /.panel-heading -->

                    <div class="panel-body">
                        <p class="text-justify">Bienvenido(a). En el lado izquierdo de la pantalla podr&aacute; ubicar todas las opciones
                        necesarias para personalizar su sitio web en funci&oacute;n a sus requerimientos</p>
                    </div>
                    <!-- /.panel-body -->

                </div>
                <!-- /.panel -->

         </div>
    </div>



            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Metis Menu Plugin JavaScript -->
    <?php echo '<script'; ?>
 src="/bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="/bower_components/datatables/media/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>
	<!-- InstanceBeginEditable name="pie" -->


    
    	<?php echo '<script'; ?>
>

			gapi.analytics.ready(function() {

			  /**
			   * Authorize the user immediately if the user has already granted access.
			   * If no access has been created, render an authorize button inside the
			   * element with the ID "embed-api-auth-container".
			   */
			  gapi.analytics.auth.authorize({
				container: 'embed-api-auth-container',
				clientid: '229297812460-ie6r02l36t1db5i1msqmsqft1ejd4p91.apps.googleusercontent.com'
			  });


			  /**
			   * Create a new ViewSelector instance to be rendered inside of an
			   * element with the id "view-selector-container".
			   */
			  var viewSelector = new gapi.analytics.ViewSelector({
				container: 'view-selector-container'
			  });

			  // Render the view selector to the page.
			  viewSelector.execute();


			  /**
			   * Create a new DataChart instance with the given query parameters
			   * and Google chart options. It will be rendered inside an element
			   * with the id "chart-container".
			   */
			  var dataChart = new gapi.analytics.googleCharts.DataChart({
				query: {
				  metrics: 'ga:sessions',
				  dimensions: 'ga:date',
				  'start-date': '30daysAgo',
				  'end-date': 'yesterday'
				},
				chart: {
				  container: 'chart-container',
				  type: 'LINE',
				  options: {
					width: '100%'
				  }
				}
			  });


			  /**
			   * Render the dataChart on the page whenever a new view is selected.
			   */
			  viewSelector.on('change', function(ids) {
				dataChart.set({query: {ids: ids}}).execute();
			  });

			});
	  <?php echo '</script'; ?>
>


        

	<!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
<?php }
}
