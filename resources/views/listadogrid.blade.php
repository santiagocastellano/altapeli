@extends('layouts.principal')
@section('content')

<!DOCTYPE html>
<style>
.contenedor{
 
  margin-top:5%;
  margin-left: 100px;
  margin-right: auto;
}
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial;
}

.header2 {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header2 a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header2 a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header2 a:hover {
  background-color: #ddd;
  color: black;
}

.header2 a.active {
  background-color: dodgerblue;
  color: white;
}

.header2-right {
  float: right;
}
input[type=search] {
  appearance: none;
  float: right;
                margin-top: 10px;
                margin-bottom: 0px;
                margin-right: 0px;
    -webkit-appearance: none;
    -moz-appearance: none;
    -o-appearance: none;
    height: 30px;
    width: 170px;
    background: #CCC;
    color: orangered;
}
@media screen and (max-width: 500px) {
  .custom-select{
    float: right;
    margin-right:8px;
   
  }
  .header2 a {
    float: none;
    display: block;
    text-align: left;
  }
  .header2-right {
    float: none;
  }
  input[type=search] {
  appearance: none;
  float: left;
                margin-top: 10px;
                margin-bottom: 0px;
                margin-right: 0px;
                margin-left:10px;
   
    height: 30px;
    width: 47%;
    background: #CCC;
    color: orangered;
}
.boton{
  appearance: none;
  float: left;
                margin-top: 15px;
                margin-bottom: 0px;
                margin-right: 0px;
                margin-left:0px;
   
}
}
</style>
<script>
function buscar() {
            div = document.getElementById('fname');
            div.style.display = '';
        }

</script>
<html lang="es">
    <head>
        <title>jQuery lightGallery demo</title>
       
        <style type="text/css">
            body{
                background-color: #152836
            }
            .demo-gallery > ul {
              margin-bottom: 0;
            }
            .demo-gallery > ul > li {
                float: left;
                margin-bottom: 15px;
                margin-right: 20px;
                width: 200px;
            }
            .demo-gallery > ul > li a {
              border: 3px solid #FFF;
              border-radius: 3px;
              display: block;
              overflow: hidden;
              position: relative;
              float: left;
            }
            .demo-gallery > ul > li a > img {
              -webkit-transition: -webkit-transform 0.15s ease 0s;
              -moz-transition: -moz-transform 0.15s ease 0s;
              -o-transition: -o-transform 0.15s ease 0s;
              transition: transform 0.15s ease 0s;
              -webkit-transform: scale3d(1, 1, 1);
              transform: scale3d(1, 1, 1);
              height: 100%;
              width: 100%;
            }
            .demo-gallery > ul > li a:hover > img {
              -webkit-transform: scale3d(1.1, 1.1, 1.1);
              transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
              opacity: 1;
            }
            .demo-gallery > ul > li a .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.1);
              bottom: 0;
              left: 0;
              position: absolute;
              right: 0;
              top: 0;
              -webkit-transition: background-color 0.15s ease 0s;
              -o-transition: background-color 0.15s ease 0s;
              transition: background-color 0.15s ease 0s;
            }
            .demo-gallery > ul > li a .demo-gallery-poster > img {
              left: 50%;
              margin-left: -10px;
              margin-top: -10px;
              opacity: 0;
              position: absolute;
              top: 50%;
              -webkit-transition: opacity 0.3s ease 0s;
              -o-transition: opacity 0.3s ease 0s;
              transition: opacity 0.3s ease 0s;
            }
            .demo-gallery > ul > li a:hover .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .justified-gallery > a > img {
              -webkit-transition: -webkit-transform 0.15s ease 0s;
              -moz-transition: -moz-transform 0.15s ease 0s;
              -o-transition: -o-transform 0.15s ease 0s;
              transition: transform 0.15s ease 0s;
              -webkit-transform: scale3d(1, 1, 1);
              transform: scale3d(1, 1, 1);
              height: 100%;
              width: 100%;
            }
            .demo-gallery .justified-gallery > a:hover > img {
              -webkit-transform: scale3d(1.1, 1.1, 1.1);
              transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
              opacity: 1;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.1);
              bottom: 0;
              left: 0;
              position: absolute;
              right: 0;
              top: 0;
              -webkit-transition: background-color 0.15s ease 0s;
              -o-transition: background-color 0.15s ease 0s;
              transition: background-color 0.15s ease 0s;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
              left: 50%;
              margin-left: -10px;
              margin-top: -10px;
              opacity: 0;
              position: absolute;
              top: 50%;
              -webkit-transition: opacity 0.3s ease 0s;
              -o-transition: opacity 0.3s ease 0s;
              transition: opacity 0.3s ease 0s;
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
              background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .video .demo-gallery-poster img {
              height: 48px;
              margin-left: -24px;
              margin-top: -24px;
              opacity: 0.8;
              width: 48px;
            }
            .demo-gallery.dark > ul > li a {
              border: 3px solid #04070a;
            }
            .home .demo-gallery {
              padding-bottom: 80px;
            }
.buscar3 {
  float: left;
   
    margin: 5px 0;
   
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid red;
}
.boton3{
  appearance: none;
  float: right;
    margin-top: 12px;
    margin-bottom: 15px;
    margin-right: 10px;
   
}
.mibusqueda{
  float :right;
  margin-right:10px;
}
.custom-select{
  float: right;
  margin-top: 15px;
  margin-right:8px;
   
}
.busqueda{
  
}

        </style>
       
    </head>
    <body class="home">
      <div class="header2">
      
        <a href="#default" class="logo">CompanyLogo</a>
        
        <div class="header2-right">
          <a class="active" href="#home">Inicio</a>
          <a href="#contact" onclick="buscar()" >Ordenar</a>
        
          
        <div>
        
</div>
      </div>
</div>  
<div class="busqueda">
  <form >
  
      <button class="boton3" >Buscar</button>
      <input type="search" class = "mibusqueda" id="mibusqueda" name="mibusqueda" value="{{$data['busqueda']}}" >
     
      <div class="custom-select"  id= "custom-select">
          <select name="camposeleccionado">
            <option value="0" selected> </option>
            <option value="1" {{$data['tituloSel']}} >Titulo</option>
            <option value="2" {{$data['sinoSel']}} >Sinopsis</option>
            <option value="3" {{$data['generoSel']}} >Genero</option>
            <option value="4" {{$data['puntajeSel']}} >Puntaje</option>
            <option value="5" {{$data['anioSel']}} >Año</option>
          </select>
        </div>
      
    
  
</form> 
</div>
        <div class="contenedor">
        <div class="demo-gallery">
            <ul id="lightgallery" class="list-unstyled row">
              
              @foreach ($data['peliculas'] as $peli)
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" 
                data-src="images/video2.jpg" data-sub-html="<h4>{{$peli->Titulo}}</h4><p>{{$peli->Sinopsis}}</p>
                <p><h6>Puntaje : {{$peli->Puntaje}}</h6></p>
                <p><h6>Genero : {{$peli->Genero}}</h6></p>
                <p><h6>Año : {{$peli->Año}}</h6> <h6> {{$peli->Comentarios}}</h6></p>">
                
                    <a href="">
                        <img class="img-responsive" src="images/video2.jpg">
                    </a>
                </li>
    
              @endforeach
             
               <!-- <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="images/video2.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                    <a href="">
                        <img class="img-responsive" src="images/video2.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/2-375.jpg 375, img/2-480.jpg 480, img/2.jpg 800" data-src="images/video2.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="images/video2.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/13-375.jpg 375, img/13-480.jpg 480, img/13.jpg 800" data-src="images/video2.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="images/video2.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/4-375.jpg 375, img/4-480.jpg 480, img/4.jpg 800" data-src="images/video2.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="images/video2.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="images/video2.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                    <a href="">
                        <img class="img-responsive" src="images/video2.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="images/video2.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                    <a href="">
                        <img class="img-responsive" src="images/video2.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="images/video2.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                    <a href="">
                        <img class="img-responsive" src="images/video2.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="images/video2.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                    <a href="">
                        <img class="img-responsive" src="images/video2.jpg">
                    </a>
                </li>-->
            </ul>
        </div>
        {{ $data['peliculas']->links() }}
        </div>
       
        
    </body>
</html>