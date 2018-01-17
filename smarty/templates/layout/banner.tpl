<!-- Banner Principal
================================================== -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 visible-md visible-lg sombra">

    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-md-3 col-lg-2 hidden-sm hidden-xs" style="padding-right: 0">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          {foreach $banner2 as $banner}
            <li data-target="#carousel" data-slide-to="{$banner@index}" {if $banner@first}class="active"{/if}></li>
          {/foreach}
        </ol>

        <div class="carousel-inner" role="listbox">

          {foreach $banner2 as $banner}
            <div {if $banner@first}class="item active" {else} class="item" {/if}>
              {if $banner.vinculo_ban neq ""}
                <a {if $banner.id_ban eq "25"} target="_blank" {/if}title="{$banner.etiqueta_ban}" href="{$banner.vinculo_ban}">
                  <img alt="{$banner.etiqueta_ban}" src="/imagenes/banner/{$banner.url_ban}">
                </a>
              {else}
                <img alt="{$banner.etiqueta_ban}" src="/imagenes/banner/{$banner.url_ban}">
              {/if}

              <div class="container-fluid">
                <div class="carousel-caption inversa">
                  <h1 class="conclase" align="center"></h1>
                </div>
              </div>
            </div>
          {/foreach}

        </div>

        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="col-xs-12 col-md-9 col-lg-10">
      <div id="carouselPrincipal" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          {foreach $banner1 as $banner}
            <li data-target="#carouselPrincipal" data-slide-to="{$banner@index}" {if $banner@first}class="active"{/if}></li>
          {/foreach}
        </ol>

        <div class="carousel-inner" role="listbox">

          {foreach $banner1 as $banner}
            <div {if $banner@first}class="item active" {else} class="item"{/if}>
              {if $banner.vinculo_ban neq ""}
                <a {if $banner.id_ban eq "25"} target="_blank" {/if}title="{$banner.etiqueta_ban}" href="{$banner.vinculo_ban}">
                  <img alt="{$banner.etiqueta_ban}" src="/imagenes/banner/{$banner.url_ban}">
                </a>
              {else}
                <img alt="{$banner.etiqueta_ban}" src="/imagenes/banner/{$banner.url_ban}">
              {/if}

              <div class="container-fluid">
                <div class="carousel-caption inversa">
                  <h1 class="conclase" align="center"></h1>
                </div>
              </div>
            </div>
          {/foreach}

        </div>

        <a class="left carousel-control" href="#carouselPrincipal" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselPrincipal" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>


</div>
<!-- Fin Banner Principal
================================================== -->
