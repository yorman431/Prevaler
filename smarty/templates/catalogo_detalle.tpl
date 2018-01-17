{include 'layouts/header.tpl'}
  
{include 'layouts/botonera.tpl'}

{include './layouts/banner.tpl'}

<div class="container-fluid paddingTop-xs">
    <div class="row">
        <div class="col-xs-12" style="padding: 15px;">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <img class="img-responsive fullWidth" src="/imagenes/{$imagen}" alt="{$nombres}">
                </div>
                <div class="col-md-6 col-xs-12 text-justify">
                    <h2 class="text-center"><strong>{$nombres}</strong></h2>
                    <h4><strong>Price: {$precio} $</strong></h4>
                    <hr>
                    {$descripcion}
                </div>
            </div>
        </div>
    </div>
</div>
    
    <!-- Pie de Pagina -->
{include 'layouts/footer.tpl'}


    <script src="/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>

    {literal}
        <script type="text/javascript">
            var wto = wto || [];
            wto.push(['setWTID', 'hsausa']);
            wto.push(['webTraxs']);
                (function() {
                var wt = document.createElement('script');
                wt.src = document.location.protocol + '//www.webtraxs.com/wt.php';
                wt.type = 'text/javascript';
                wt.async = true;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(wt, s);})();
        </script>
        
    {/literal}

  </body>
<!-- InstanceEnd --></html>