


$(document).ready(function(){
//nos desplazamos entre todos los divs
          $('a.visible').click(function(e){
              e.preventDefault();
              enlace  = $(this).attr('href');
                        $('html, body').animate({
                             scrollTop: $(enlace).offset().top
                        }, 1000);
             });
});

  /*----------------------------*/
            /*Galeria*/
  /*----------------------------*/
function mostrar1(){

 if(document.getElementById("visible1").style != null){
    var elemento = document.getElementById("visible1");
    var ocultar =elemento.style.display;

    if(ocultar == 'block'){
       document.getElementById("visible1").style.display = 'none';
       document.getElementById("visible2").style.display = 'block';
    }else{
      document.getElementById("visible1").style.display = 'block';
      document.getElementById("visible2").style.display = 'none';
    }
  }
}

function mostrar2(){

 if(document.getElementById("visible2").style != null){
    var elemento = document.getElementById("visible2");
    var ocultar =elemento.style.display;

    if(ocultar == 'block'){
       document.getElementById("visible2").style.display = 'none';
       document.getElementById("visible1").style.display = 'block';
    }else{
      document.getElementById("visible2").style.display = 'block';
      document.getElementById("visible1").style.display = 'none';
    }
  }
}
