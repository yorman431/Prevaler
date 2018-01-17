<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" -->
    {include file='admin/layouts/head2.tpl'}
	  <link href='//fonts.googleapis.com/css?family=Open+Sans:600,400,300' rel='stylesheet'>
</head>

<body>

    <div id="wrapper">

        {include file='admin/layouts/menu.tpl'}

        <div id="page-wrapper">
        	<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">{$accion}
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



            {include file='admin/layouts/footer.tpl'}

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <script src="/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/dist/js/sb-admin-2.js"></script>
	<!-- InstanceBeginEditable name="pie" -->


    {literal}
    	<script>

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
	  </script>


        {/literal}

	<!-- InstanceEndEditable -->
</body>

<!-- InstanceEnd --></html>
