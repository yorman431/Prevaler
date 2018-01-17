 <div class="col-xs-12" id="contacto">
   <div class="row">

    <hr class="color_morado">

     <div class="col-xs-12 titulo" align="center">
       <span class="fuente_morada">CONTACTO</span>
     </div>

     <div class="col-md-6">
     <form class="form-horizontal" role="form" action="/index.php#contacto" method="post" name="contact" id="contact">
        <div class="panel panel-default panel-contacto">
          <div class="panel-heading">
            
          </div>
          <div class="panel-body">
          
            <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
              <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
              <input  type="text" name="nombre" id="nombre" placeholder="Nombre / Empresa" value="" required="required">
            </div>
            
            <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
              <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
              <input  type="text" name="telefono" id="telefono" placeholder="Teléfono" value="" required="required">
            </div>
          
            <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
              <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
              <input  type="email" id="email" name="email" placeholder="Email" value="" required="required">
            </div>
           
            <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
              <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
              <input  type="text" id="sede" name="sede" placeholder="Sede" value="" required="required">
            </div>
           
            <div class="form-group col-xs-10 col-xs-pull-1 col-xs-push-1  no_padding1">
              <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
              <input type="text" rows="3" name="comentario" id="comentario" placeholder="Consulta" value="" required="required">
            </div>
  
          </div>
          <div class="panel-footer" align="right">
            <div  class="col-xs-11 no_padding1">
              <button onclick="javascript: return validarformulario();" name="enviar" type="submit" id="enviar" value="Enviar1">
              Enviar
            </button>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <h4>{$mensaje2}</h4>
        </div>
       </form>
    </div>

    

    <div class="col-md-6">
      <div class="row"  align="center">
          <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Porlamar
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 773.86.33)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            porlamar@prevaler.com
            
          </span>
          <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Valencia Norte
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 772.87.34)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            valencianorte@prevaler.com
           
          </span>
          <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Maracay
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 993.27.34)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            porlamar@prevaler.com
            
          </span>
          <span class="subrayado">
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Caracas
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 994.22.67)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            caracas@prevaler.com
            
          </span>
          <span>
            <i class="fa fa-circle fuente_morada" aria-hidden="true"></i>
            Sede Valencia Sur
            <i class="fa fa-phone fa-lg fuente_morada" aria-hidden="true"></i>
            (0500 884.33.26)
            <i class="fa fa-envelope fuente_morada" aria-hidden="true"></i>
            valenciasur@prevaler.com
          </span>
          
      </div>
    </div>
  </div>
</div>