<div class="col-xs-12 no_padding1">
  <div class="container-fluid">
    <div class="row">
     <div class="col-xs-6 no_padding1">
        <div id="publicidad1" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators" style="display:none;">
                      {assign var="cont" value=0}
                      {section name=i loop=$publicidad1}
                        <li data-target="#myCarousel" data-slide-to="{$cont}" {if $cont eq "0"}class="active"{/if}></li>
                          {assign var="cont" value=$cont+1}
                      {/section}
                  </ol>

                  <div class="carousel-inner" role="listbox">
                      {assign var="cont" value=0}
                      {section name=i loop=$publicidad1}
                        <div {if $cont eq "0"} class="item active" {else} class="item" {/if}>
                            <a href="{$publicidad1[i].url_dir}" target="_blank">
                            <img class="img-responsive" alt="{$publicidad1[i].etiqueta_ban}" src="/imagenes/publicidad/{$publicidad1[i].directorio_dir}">
                            </a>
                        </div>
                          {assign var="cont" value=$cont+1}
                      {/section}
                  </div>
                  <a class="left carousel-control" href="#publicidad1" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#publicidad1" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
        </div>
     </div>

     <div class="col-xs-6 no_padding1">
        <div id="publicidad2" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators" style="display:none;">
                      {assign var="cont" value=0}
                      {section name=i loop=$publicidad2}
                        <li data-target="#myCarousel" data-slide-to="{$cont}" {if $cont eq "0"}class="active"{/if}></li>
                          {assign var="cont" value=$cont+1}
                      {/section}
                  </ol>

                  <div class="carousel-inner" role="listbox">
                      {assign var="cont" value=0}
                      {section name=i loop=$publicidad2}
                        <div {if $cont eq "0"} class="item active" {else} class="item" {/if}>
                            <a href="{$publicidad2[i].url_dir}" target="_blank">
                            <img class="img-responsive" alt="{$publicidad2[i].etiqueta_ban}" src="/imagenes/publicidad/{$publicidad2[i].directorio_dir}">
                            </a>
                        </div>
                          {assign var="cont" value=$cont+1}
                      {/section}
                  </div>
                  <a class="left carousel-control" href="#publicidad2" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#publicidad2" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
        </div>
     </div>

   </div>
  </div>
</div>