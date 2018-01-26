<!-- Banner Principal
================================================== -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 sombra">

    </div>
    <div class="col-xs-12">
     <div class="row">
        <div class="col-xs-12 col-md-2 visible-md visible-lg">
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators hidden-xs hidden-sm">
            {assign var="cont" value=0}
            {section name=i loop=$banner2}
              <li data-target="#carousel" data-slide-to="{$cont}" {if $cont eq "0"}class="active"{/if}></li>
              {assign var="cont" value=$cont+1}
            {/section}
          </ol>

          <div class="carousel-inner" role="listbox">

            {assign var="cont" value=0}
            {section name=i loop=$banner2}
              <div {if $cont eq "0"}class="item active" {else} class="item" {/if}>
                {if $banner2[i].vinculo_ban neq ""}
                  <a {if $banner2[i].id_ban eq "25"} target="_blank" {/if}title="{$banner2[i].etiqueta_ban}" href="{$banner2[i].vinculo_ban}">
                    <img alt="{$banner2[i].etiqueta_ban}" src="/imagenes/banner/{$banner2[i].url_ban}">
                  </a>
                {else}
                  <img alt="{$banner2[i].etiqueta_ban}" src="/imagenes/banner/{$banner2[i].url_ban}">
                {/if}

                <div class="container-fluid">
                  <div class="carousel-caption inversa">
                    <h1 class="conclase" align="center"></h1>
                  </div>
                </div>
              </div>
              {assign var="cont" value=$cont+1}
            {/section}

          </div>

          <a class="left carousel-control visible-xs visible-sm" href="#carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control visible-xs visible-sm" href="#carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="col-xs-12 col-md-10">
        <div id="carouselPrincipal" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators hidden-xs hidden-sm">
            {assign var="cont" value=0}
            {section name=i loop=$banner1}
              <li data-target="#carouselPrincipal" data-slide-to="{$cont}" {if $cont eq "0"}class="active"{/if}></li>
              {assign var="cont" value=$cont+1}
            {/section}
          </ol>

          <div class="carousel-inner" role="listbox">

            {assign var="cont" value=0}
            {section name=i loop=$banner1}
              <div {if $cont eq "0"}class="item active" {else} class="item"{/if}>
                {if $banner1[i].vinculo_ban neq ""}
                  <a {if $banner1[i].id_ban eq "25"} target="_blank" {/if}title="{$banner1[i].etiqueta_ban}" href="{$banner1[i].vinculo_ban}">
                    <img alt="{$banner1[i].etiqueta_ban}" src="/imagenes/banner/{$banner1[i].url_ban}">
                  </a>
                {else}
                  <img alt="{$banner1[i].etiqueta_ban}" src="/imagenes/banner/{$banner1[i].url_ban}">
                {/if}

                <div class="container-fluid">
                  <div class="carousel-caption inversa">
                    <h1 class="conclase" align="center"></h1>
                  </div>
                </div>
              </div>
              {assign var="cont" value=$cont+1}
            {/section}

          </div>

          <a class="left carousel-control visible-xs visible-sm" href="#carouselPrincipal" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control visible-xs visible-sm" href="#carouselPrincipal" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
     </div>
    </div>
  </div>
</div>
<!-- Fin Banner Principal
================================================== -->
