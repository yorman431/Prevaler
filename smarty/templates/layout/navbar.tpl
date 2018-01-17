
<nav class="navbar navbar-default navbar-alameera hidden-sm hidden-xs hidden-md" style="margin-bottom:0; min-height:0;">
	<div class="container-fluid-navbar">
      <div class="col-md-5">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a title="Al Ameera Restaurant" href="/index.php" class=" navbar-brand hidden-sm hidden-xs"><img style="margin-top:7px;margin-bottom:7px;" src="/imagenes/logo_navbar.png" alt="Al Ameera Restaurant" border="0"></a>
          </div>
      </div>
      <div class="col-md-7" id="navbar">
          <div class="navbar-collapse collapse">
                  <div class="col-md-12 text-right" style="padding-top: 15px;">
                      <span style="font-weight: lighter; font-size: 30px;">+1(201).751.4101</span><span style="padding-left: 30px;"><a href="https://www.instagram.com/alameerarestaurant/"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/alameerarest"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/alameerarestaurant/"><i class="fa fa-facebook"></i></a></span><br><br>
                      <span style="font-size: 12px">5122 John F. Kennedy Blvd. West New York, NJ 07093 || Mon. to Thurs. 9:00am. to 11:00pm. Fri. to Sun. 9:00am. to 1:00am.</span><br>
                      <h4>The Best Middle Eastern Cuisine</h4>
                  </div>
                  <div class="col-md-12">
                      <ul class="nav navbar-nav navbar-right">
                          {section name=i loop=$enlaces_A}
                              {if $enlaces_A[i].enlaces neq ""}
                                  <li class="dropdown">
                                      <a role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" href="{$enlaces_A[i].url}~{$enlaces_A[i].id_cat}" title="{$enlaces_A[i].nombre_cat}">
                                          {$enlaces_A[i].nombre_cat} {if $enlaces_A[i].enlaces neq ""}<span class="caret"></span>{/if}
                                      </a>
                                      <ul class="dropdown-menu  menu-dartronics">
                                          {section name=j loop=$enlaces_A[i].enlaces}
                                              <li>
                                                  <a style="color: #fff; font-weight:bold;"  href="{$enlaces_A[i].enlaces[j].url}~{$enlaces_A[i].enlaces[j].id_cat}" title="{$enlaces_A[i].enlaces[j].nombre_cat}">{$enlaces_A[i].enlaces[j].nombre_cat}</a>
                                              </li>
                                          {/section}
                                      </ul>
                                  </li>
                              {else}
                                  <li {if $enlaces_A[i].nombre_cat == 'RESERVATION'} class="active" {/if}>
                                      <a href="{$enlaces_A[i].url}~{$enlaces_A[i].id_cat}" title="{$enlaces_A[i].etiqueta_cat}">
                                          {$enlaces_A[i].nombre_cat}
                                      </a>
                                  </li>
                              {/if}
                          {/section}
                      </ul>
                  </div>
          </div>
      </div>
    </div>
</nav>


<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 visible-xs-block visible-sm-block visible-md-block text-center navbar-logo">
            <a href="/index.php">
                <img class="center-block" src="/imagenes/logo-navbar-xs.png" alt="Al Ameera Restaurant" border="0">
            </a>
        </div>
    </div>
</div>

<nav class="navbar navbar-default navbar-alameera2 visible-sm-block visible-xs-block visible-md-block" style="margin-bottom:0; width: 100%">
    <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a title="Al Ameera Restaurant" href="tel:+12017514101" class="navbar-brand" >
                    <h3 class="no_margin2">
                        <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+1(201).751.4101
                    </h3>
                </a>
            </div>
            <div id="navbar1" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        {section name=i loop=$enlaces_A}
                            {if $enlaces_A[i].enlaces neq ""}
                                <li class="dropdown">
                                    <a role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" href="{$enlaces_A[i].url}~{$enlaces_A[i].id_cat}" title="{$enlaces_A[i].nombre_cat}">
                                        {$enlaces_A[i].nombre_cat} {if $enlaces_A[i].enlaces neq ""}<span class="caret"></span>{/if}
                                    </a>
                                    <ul class="dropdown-menu  menu-dartronics">
                                        {section name=j loop=$enlaces_A[i].enlaces}
                                            <li>
                                                <a style="color: #fff; font-weight:bold;"  href="{$enlaces_A[i].enlaces[j].url}~{$enlaces_A[i].enlaces[j].id_cat}" title="{$enlaces_A[i].enlaces[j].nombre_cat}">{$enlaces_A[i].enlaces[j].nombre_cat}</a>
                                            </li>
                                        {/section}
                                    </ul>
                                </li>
                            {else}
                                <li>
                                    <a href="{$enlaces_A[i].url}~{$enlaces_A[i].id_cat}" title="{$enlaces_A[i].etiqueta_cat}">
                                        {$enlaces_A[i].nombre_cat}
                                    </a>
                                </li>
                            {/if}
                        {/section}
                    </ul>
            </div>
    </div>
</nav>
