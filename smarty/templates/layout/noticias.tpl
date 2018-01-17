  <div class="col-xs-12 titulo" align="center">
    <span class="fuente_morada">NOTICIAS</span>
  </div>

    <div class="col-xs-12">       <!-- Area de Productos-->
      <div class="row">

        {assign var="cont" value=0}
          {section i $noticia}
            {if $cont eq '4'}</div><div class="row" {if $cont ge '4'} id="visible" style="display:none;"{/if}> {/if}
              <div class="col-xs-12 col-sm-6 col-md-3">
                {assign var="cont" value=$cont+1}
                <div class="row">
                  <div class="panel-default col-xs-10 col-xs-push-1 col-xs-pull-1 no_padding1">
                    <div align="center" class="panel-heading no_padding">
                      <img class="img-responsive" src="/imagenes/{$noticia[i].imagenes[0].directorio_image}" />
                    </div>

                    <div class="panel-body">
                      <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
                      <span class="fuente_morada">
                        {$noticia[i].titulo_not}
                      </span>
                      <p>{$noticia[i].subtitulo_not}</p>
                    </div>
                    <div class="panel-footer no_padding" align="center">
                      <a href="noticia_detalle.php?cont={$noticia[i].id_not}">
                        <p class="blanco">VER MÁS</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
          {/section}
          {literal}
            <script>
                $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event){
                    event.preventDefault();
                    $(this).ekkoLightbox();
                });
            </script>
          {/literal}
        </div>
        {if $noticia|@count gt 4}
          <div class="row">
              <div class="col-xs-12" align="center">
                  <button href="#visible" id="mostre-todo" onclick="mostrar()" class="btn-info">
                      CARGAR M&Aacute;S
                  </button>
              </div>
          </div>
        {/if}
  </div>      <!-- Fin del Area de Noticias-->