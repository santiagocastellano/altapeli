@extends('layouts.principal')
@section('content')
<style>
.paginaNumero,.paginaNumero2{
  background-color: #f1f1f1;
  text-align: center;
  font-size: 18px; 
  font-weight: bold;
  font-family: Arial;
}
.white-popup {
  position: relative;
  background: #FFF;
  padding: 20px;
  width: auto;
  max-width: 500px;
  margin: 20px auto;
}
.tituloBusqueda{
  text-align: center;
  background-color: #f1f1f1;
  margin: 20px auto;
}
.enviarBusqueda, .centro{
  
  text-align: center;
  
  bottom:5px;
}

.textoBusqueda{
  margin-left: 20px;
  align: right;
  width: 60%;
}

.opcionesBusqueda{
  align: left;
  width:30%;
}
@media screen and (max-width: 500px) {
  .indice{
  align:center;
  width:100%;
  }
  .contenedor{
    width:100%;
    align:center;
  }
  .demo-gallery{
    width:225px;
    margin-left: auto;
    margin-right: auto;
  }
  
}
@media screen and (min-width: 600px) {
  .divgrid, .lightgallery{
    width:90%;
    margin-left: auto;
    margin-right: auto;
  }
  .demo-gallery{
    width:90%;
    margin-left: auto;
    margin-right: auto;

  }
}

.indice2{
  align:center;
  width:100%;
  }

</style>

  <div class="header2">
    <a href="#default" ><img style="margin-left:10px;" src="images/logoaltapelirecortado.png" /></a>
        <div class="header2-right">
                <a class="reset" href="#home">Inicio</a>
                <a href="#ordenar" class ="btnOrdenar" >Ordenar</a>
                <a href="#busqueda" class ="btnBuscar" >Buscar</a>
        </div>

  </div>  
  <div id="resultadoVacio" class="white-popup mfp-hide">La búsqueda no obtuvo resultados.</div>
  <div id="busqueda" class="white-popup mfp-hide">
          <h4 class="tituloBusqueda">Busqueda</h4>
         
          <select name="opcionesBusqueda" class="opcionesBusqueda">
              <option value="Titulo"   >Titulo</option>
              <option value="Genero"   >Genero</option>
              <option value="Sinopsis" >Sinopsis</option>
              <option value="Puntaje"  >Puntaje</option>
              <option value="Año"      >Año</option>
          </select>
            <input type="text"  class="textoBusqueda" name="textoBusqueda">
            
            <div class="enviarBusqueda"><input type="button" onclick="enviarBusqueda()"  value= "Enviar"  /></div>
          
  </div>
  <div id="ordenar" class="white-popup mfp-hide">
          <h4 class="tituloBusqueda">Ordenar</h4>
         <div class="centro">
          <select style="width:30%" name="ordenCampo" class="ordenCampo">
              <option value="Titulo"   >Titulo</option>
              <option value="Genero"   >Genero</option>
              <option value="Disco"    >Disco</option>
              <option value="Puntaje"  >Puntaje</option>
              <option value="Año"      >Año</option>
          </select>
          <select name="ordenSentido" class="ordenSentido">
              <option value="ASC"      >A-Z</option>
              <option value="DESC"      >Z-A</option>
          </select>
          </div>
            <div class="enviarBusqueda"><input type="button" class="ordenar"  value= "Enviar"  /></div>
          
  </div>
  <div style="height:70px;">
    <div id="owl-carousel"  class="owl-carousel owl-theme" ></div>
  </div> 
  <div class="paginaNumero" name="paginaNumero"  id ="paginaNumero"></div>
  <div id="cargandoArriba" name = "cargandoArriba" >.</div>
  <div class="demo-gallery" >
            <ul id="lightgallery" class="lightgallery" >   
              <div id="divgrid" class="divgrid" ></div>           
            </ul>
  </div>
  <div id="cargandoAbajo" name = "cargandoAbajo" >.</div>
  <div class="paginaNumero2" name="paginaNumero2"  id ="paginaNumero2"></div>  
  <div style="height:70px;">         
    <div id="owl-carousel2" class="owl-carousel owl-theme" ></div>
  </div>
   
        
@endsection
@section('view.scripts')
    <script> 

    var datos;
    $(".reset").click(function(){
      reset();
    });
    $(".ordenar").click(function(){
      pagina='1';
      callPag({pagina:pagina,botonera:true});
      closePopup();
    });
    function reset(){
      location.reload();
    }
    function makePeine(elementos){

      peine="";
      console.log("ultima: "+ultimaPagina);
      for (i=1;i<ultimaPagina+1;i++){
        peine+='<input type="button" onclick="callPag({pagina:'+i+'})" value= "'+i+'"/>';
      };
      $("#owl-carousel").empty().html(peine);
      $("#owl-carousel2").empty().html(peine);
      $('#owl-carousel').owlCarousel({
          loop:true,
          margin:0,
          nav:false,
          autoWidth:true,
          center: true,
          dots:false,
          fluidSpeed:false,
          dragEndSpeed:false,
          mouseDrag:true,
          responsive:{
          0:{
            items:10
          },
          600:{
            items:10
          },
          1000:{
            items:10
          }
          }
        });
      $('#owl-carousel2').owlCarousel({
          loop:true,
          margin:0,
          nav:false,
          center: true,
          autoWidth:true,
          mouseDrag:true,
          dots:false,
          fluidSpeed:false,
          dragEndSpeed:false,
          responsive:{
          0:{
            items:10
          },
          600:{
            items:10
          },
          1000:{
            items:10
          }
          }
        });
     
    } //fin make peine
    function renderPag(elementos){
      cantElementos=elementos.data.length;
      desde=elementos.from;
      offset=elementos.per_page;
      hasta=elementos.to;
      ultimaPagina=elementos.last_page;
      paginaActual=elementos.current_page;
      lista="";
      for(i=0;i<cantElementos;i++){
          sino=elementos.data[i].Sinopsis;
          sino=sino.replace(/["']/g, "");
          lista+='<a href="images/video2.jpg" data-sub-html="<h4>'+elementos.data[i].Titulo+'</h4>'+
          '<h4><p>'+sino+'</p></h4>'+ '<h4><p> Puntaje: '+elementos.data[i].Puntaje+'</p></h4>'+
          '<h4><p>'+elementos.data[i].Genero+'</p></h4>'+'<h4> Año :'+elementos.data[i].Año+'</h4>'+
          '<h4>  Disco : '+elementos.data[i].Disco+'</h4>'+'<h4>'+elementos.data[i].Comentarios+'</h4>" >'+
          '<img style="margin:5px;" src="images/video2.jpg" /></a>';
      };//fin for
      lista='<div id="captions"  >'+lista+'</div>';
      $("#divgrid").empty().html(lista);
      $('#captions').lightGallery({
          share:false,
          actualSize:false
      });
      ocultarCargando();
      $('#paginaNumero').text("Pagina: "+paginaActual+" de "+ultimaPagina);
      $('#paginaNumero2').text("Pagina: "+paginaActual+" de "+ultimaPagina);
    }//fin renderpag
    function callPag({pagina='1',campo="",textoBusqueda="",botonera=true,campoOrden="Titulo",sentido="ASC"}={}){

        cargando();
        campo=$('.opcionesBusqueda').val();
        textoBusqueda=$('.textoBusqueda').val();
        campoOrden=$('.ordenCampo').val();
        sentido=$('.ordenSentido').val();
        var dato={
          "campo":campo,
          "textoBusqueda":textoBusqueda,
          "campoOrden":campoOrden,
          "sentido":sentido
        };
        $.ajax({
              type:"POST",     
              dataType:"JSON",
              url:"./postajax?page="+pagina, //ojo con esta dire si en el server hay otra subcarpeta que contiene el laravel
              data:dato, //dato se lee en el servidor y va hacia el controler
              //data2 es lo que envia el servidor como respuesta
              success: function(data2){
                  //console.log(data2);
                  if(data2.total!=0){
                    renderPag(data2);
                    (!botonera) ? makePeine(data2):console.log("no escribo botonera");
                  }else{
                   $.magnificPopup.open({
                      items: {
                      src: '<div class="white-popup"><h4 class="tituloBusqueda">'+
                      'No se encontraron coincidencias</h4><p><div class="enviarBusqueda">'+
                      '<input type="button" onclick="reset()"  value= "Salir"  /></div></p></div>', 
                      type: 'inline'
                      },
                      modal: true
                    });
                  }
                  
                  
              }//fin sucess
        });//fin ajax

    }//fin callpag
    function closePopup(){
      var magnificPopup = $.magnificPopup.instance;
      magnificPopup.close();
    }
    function enviarBusqueda(){
      opcionBusqueda=$('.opcionesBusqueda').val();
      textoBusqueda=$('.textoBusqueda').val();
      pagina='1';
     if (textoBusqueda==""){
        alert("Ingrese un texto de busqueda por favor.");
      
      }else {
        callPag({pagina:pagina,botonera:false});
        closePopup();

      }

     } //fin enviar busqueda


      function cargando(){
        $("#cargandoArriba").loading({
          message:'Cargando...'
        });
        $("#cargandoAbajo").loading({
          message:'Cargando...'
        });
      }
      function ocultarCargando(){
        $('#cargandoArriba').loading('stop');
        $("#cargandoAbajo").loading('stop');
      }
      function buscar() {
            div = document.getElementById('fname');
            div.style.display = '';
        }
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }
    
      cargando();
      $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
      });

      $(document).ready(function(){
        console.log("listo");
        pagina='1';
        callPag({pagina:pagina,botonera:false});
        $('.btnBuscar').magnificPopup({
            type: 'inline'
        });
        $('.btnOrdenar').magnificPopup({
            type: 'inline'
        });
      });
    </script>
@endsection