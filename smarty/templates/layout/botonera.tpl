<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid top-background hidden-lg hidden-md">
      <div class="row">

        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs" align="center">
          
        </div>

        <div class="hidden-lg hidden-md col-sm-9 col-xs-9">
          <div class="navbar-left">
            <a href="index.php">
              <img class="img-responsive" src="/imagenes/logo.png">
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-3" align="right">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" id="boton-navegacion" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
        </div>

      </div>
    </div>

    <div class="container-fluid">
      <div id="navbar" class="navbar-collapse collapse">
        <div class="navbar-header hidden-xs hidden-sm">
            <a href="index.php">
              <img class="img-responsive" src="/imagenes/logo.png">
            </a>
        </div>

        <ul class="nav navbar-nav botonera">
            {section name=i loop=$enlaces_A}
              {if $enlaces_A[i].enlaces neq ""}
                <li class="dropdown">
                  <a id="borde" title="{$enlaces_A[i].etiqueta_cat}" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{$enlaces_A[i].nombre_cat}<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    {section name=j loop=$enlaces_A[i].enlaces}
                      {if $enlaces_A[i].id_cat eq "22"}
                        <li><a title="{$enlaces_A[i].nombre_cat}" href="catalogo_opcion.php?cat={$enlaces_A[i].enlaces[j].id_cat}">{$enlaces_A[i].enlaces[j].nombre_cat}</a></li>
                      {else}
                        <li><a title="{$enlaces_A[i].nombre_cat}" href="contenido_sub.php?cont={$enlaces_A[i].id_cat}&sub={$enlaces_A[i].enlaces[j].id_sub}">{$enlaces_A[i].enlaces[j].nombre_sub}</a></li>
                      {/if}
                    {/section}
                  </ul>
                </li>
              {else}
                <li {if $enlaces_A[i].id_cat eq $activo}class="active"{/if}><a id="borde" class="{if $enlaces_A[i].id_cat neq '1' && $enlaces_A[i].id_cat neq '5'}transicion{/if}" title="{$enlaces_A[i].etiqueta_cat}" href="{if $enlaces_A[i].id_cat eq '1'}index.php {else}{if $enlaces_A[i].id_cat eq '2'} #productos {else} {if $enlaces_A[i].id_cat eq '3'} #sedes {else}
                {if $enlaces_A[i].id_cat eq '4'} #faq {else}{if $enlaces_A[i].id_cat eq '5'}presupuesto.php {else} #contacto {/if}{/if}{/if}{/if}{/if}"">
                  <img class="seleccionado img-responsive" src="/imagenes/seleccion.png">
                  {$enlaces_A[i].nombre_cat}</a></li>
              {/if}
            {/section}
        </ul>
        <ul class="nav navbar-nav">
            <li class="hidden-md hidden-lg"><a title="Follow us on Instagram" href="" target="_blank">
              <i class="fa fa-instagram fuente_morada" aria-hidden="true"></i></a></li>
            <li class="hidden-md hidden-lg"><a title="Follow us on Twitter" href="" target="_blank">
              <i class="fa fa-twitter fuente_morada"></i></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right visible-md visible-lg">
            <li>
              <a title="Follow us on Instagram" href="" target="_blank">
                <i class="fa fa-instagram fa-2x fuente_morada" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <h2></h2>
            </li>
            <li>
              <a title="Follow us on Twitter" href="" target="_blank"><i class="fa fa-twitter fa-2x fuente_morada"></i></a>
            </li>
            <li class="color_morado">
              <a href="cita_online.php">
               <img class="img-responsive" src="/imagenes/flecha.png">
               <h5>CITA ONLINE</h5>
              </a>
            </li>
        </ul>
                                                                                  
      </div>  
    </div>
</nav>