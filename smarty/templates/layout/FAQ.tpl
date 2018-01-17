<div class="col-xs-12">
    <div class="row">
        <div class="col-xs-5 no_padding1">
            <h3>PREGUNTAS FRECUENTES</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-5 pregunta">
            <ul class="nav" id="side-menu">
                {section name=i loop=$faq}
                <li>
                {if $faq[i].lista eq $faq[i].id_faq}
                    <a  id="{$faq[i].id_faq}" onclick="javascript: return faq();" style="cursor:pointer;"><i class="fa fa-circle" aria-hidden="true"></i>{$faq[i].pregunta_faq}<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                {else}
                    <a  id="{$faq[i].id_faq}" onclick="javascript: return faq_2();" style="cursor:pointer;"><i class="fa fa-circle" aria-hidden="true"></i>{$faq[i].pregunta_faq}</a>
                    <ul class="nav nav-second-level">
                       {section name=j loop=$faq[i].lista}
                        <li>
                        <a  id="{$faq[i].lista[j].id_faq}" onclick="javascript: return faq();" style="cursor:pointer;"><i class="fa fa-circle" aria-hidden="true"></i>{$faq[i].lista[j].pregunta_faq}<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </li>
                       {/section}
                    </ul>
                {/if}
                </li>
                {/section}
                
            </ul>
        </div>
        <div class="col-xs-7 respuesta">
            <div class="row">
              <div class="col-xs-12">
                {section name=i loop=$faq}
            {if $faq[i].lista eq $faq[i].id_faq}
            <div class="row" id="panel_{$faq[i].id_faq}" style="display: none;">
                <div class="col-lg-8 marco-faq">
                  <p class="text-justify formato-faq">
                    {$faq[i].respuesta_faq}
                  </p>
                </div>
            </div>
            {else}
              {section name=j loop=$faq[i].lista}
              {if $faq[i].lista[j].lista2[0].respuesta_faq eq ""}
              <div class="row" id="panel_{$faq[i].lista[j].id_faq}" style="display: none;">
                <div class="col-lg-8 marco-faq">
                  <p class="text-justify formato-faq">
                    {$faq[i].lista[j].respuesta_faq}
                  </p>
                </div>
              </div>
              {else}
                  <div class="row" id="panel_{$faq[i].lista[j].id_faq}" style="display: none;">
                    <div class="col-lg-8 marco-faq">
                    {section name=k loop=$faq[i].lista[j].lista2}
                      <div class="panel panel-default">
                        <a class="formato-faq" href="#panel_{$faq[i].lista[j].lista2[k].id_faq}" onclick="faq2()" title="Ver Respuesta" id="{$faq[i].lista[j].lista2[k].id_faq}"><div class="panel-heading"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;{$faq[i].lista[j].lista2[k].pregunta_faq}</div></a>
                      </div>
                      {if $faq[i].lista[j].lista2[k].respuesta_faq neq ""}
                      <div class="panel panel-default" id="visible_{$faq[i].lista[j].lista2[k].id_faq}" style="display:none;">
                        <div class="panel-body">
                          <p class="text-justify">
                            {$faq[i].lista[j].lista2[k].respuesta_faq}
                          </p>
                        </div>
                      </div>
                      {/if} 
                    {/section}
                    </div>
                  </div>
                  {/if}
              {/section}
            {/if}
        {/section}
              </div>
            </div>
        </div>
    </div>
</div>
