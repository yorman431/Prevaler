<div class="col-xs-12">
  <div class="row">
    <div class="col-xs-5 no_padding1">
      <h3>PREGUNTAS FRECUENTES</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-5 pregunta">
      <ul class="nav" id="side-menu">
        {assign var="cont" value=0} 
        {section i $faq} 
        {assign var="cont" value=$cont+1}
        <li>
          {if $faq[i].lista eq $faq[i].id_faq}
          <a href="#faqRespuesta" id="{$faq[i].id_faq}" onclick="javascript: return faq();" style="cursor:pointer;" {if $cont eq '1' } class="no-push btn-push transicion"
            {else} class="no-push transicion" {/if}>
            <i class="fa fa-circle" aria-hidden="true"></i>{$faq[i].pregunta_faq}
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
          </a>
          {else}
          <a href="#faqRespuesta" class="transicion" id="{$faq[i].id_faq}" onclick="return faq_2({$faq[i].id_faq});" style="cursor:pointer;">
            <i class="fa fa-circle" aria-hidden="true"></i>{$faq[i].pregunta_faq}</a>
          {/if}
        </li>
        {/section}
      </ul>
    </div>
    <div class="col-xs-7 respuesta" id="faqRespuesta">
      <div class="row">
        <div class="col-xs-12">
          <div class="row" id="default" style="display: block;">
            <div class="col-lg-8 marco-faq">
              <p class="text-justify formato-faq">
                {$faq[0].respuesta_faq}
              </p>
            </div>
          </div>
          {section i $faq} 
          {if $faq[i][5] eq $faq[i].id_faq}
          <div class="row" id="panel_{$faq[i].id_faq}" style="display: none;">
            <div class="col-lg-8 marco-faq">
              <p class="text-justify formato-faq">
                {$faq[i].respuesta_faq}
              </p>
            </div>
          </div>
          {/if} 
          {/section}
        </div>
      </div>
    </div>
  </div>
</div>
