<html>
   <head>
      <title>Ajax Example</title>
      <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}"type='text/css' />
      <link rel="stylesheet" href="{{URL::asset('/css/calc.css')}}"type='text/css' />
      <meta name="_token" content="{!! csrf_token() !!}"/>
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      
      <script type="text/javascript">
      $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
      });
      function llenar2(num) {
           
            var dataString2="santiago";
            var key = "Nombre";
            var suma=localStorage.getItem("Nombre")+num;
                  //localStorage["Nombre"] = "algo";
            localStorage.setItem(key, suma);
           // console.log('iiii');
      };
      function vaciar() {
           
           localStorage.setItem("Nombre",'');
          // console.log('iiii');
     };
     function llamarPagina(page){
            //console.log(page);
            $.ajax({
                    type:"POST",
                    dataType:"JSON",
                    url:"postajax?page="+page, //ojo con esta dire si en el server hay otra subcarpeta que contiene el laravel
                    data:{'dato':"listar todo"}, //dato se lee en el servidor y va hacia el controler
                        //data2 es lo que envia el servidor como respuesta
                    success: function(data2){
                          console.log(data2);
                       
                    }
            });
     };
        $(document).ready(function(){
           // $("#contenido").empty().html("<span>Piso todo</span>");
          
            $.ajax({
                    type:"POST",
                    dataType:"JSON",
                    url:"postajax", //ojo con esta dire si en el server hay otra subcarpeta que contiene el laravel
                    data:{'dato':"listar todo"}, //dato se lee en el servidor y va hacia el controler
                        //data2 es lo que envia el servidor como respuesta
                    success: function(data2){
                          console.log(data2);
                        //console.log(data2.data[0].Titulo);
                             // $('#server').append(data2);
                             // $('#answer').val(data2);
                              //console.log(data2[0].Titulo);
                             // $("#contenido").empty().html(data2[0].Titulo);
                              var items = [];
                              var cont=0;
                             /* foreach(var dato in data2){
                                    cont++;
                              }*/
                              /*for (index = 0; index < data2.length; ++index) {
                                    console.log(data2[index].Titulo);
                              }*/
                             /* $.each( data2, function(data2) {
                                    //items.push( "<li id='" + key + "'>" + val + "</li>" );
                                    
                                    items.push( "<li id='" + data2[cont].Titulo + "'>" + 0 + "</li>" );
                                    cont=cont+1;
                              });*/
                             // $("#contenido").empty().html(cont);
                    }
            });
          
            
             
             $(".consulta").click(function(){
                  //var dataString=$("#answer").val();
                  var dataString=$(".consulta").val();
                  console.log("aprete : "+dataString);
                  //console.log(dataString);
                 /* $.ajax({
                        type:"POST",
                        url:"postajax", //ojo con esta dire si en el server hay otra subcarpeta que contiene el laravel
                        data:{'dato':dataString},
                        //data2 es lo que envia el servidor como respuesta
                        success: function(data2){
                             // $('#server').append(data2);
                             // $('#answer').val(data2);
                            
                              console.log(data2);
                        }
                   });*/
             });
        
        });
      </script>
   </head>
   
   <body>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row col-lg-5"></div>
      <div id="getRequestData"></div>
      <div id="postRequestData"></div>
      <div id="server"></div>
      <div class="row col-lg-5">
            <h2 align="center">Calcular</h2>
            <div id='calc-contain'>
                  <form name="pelisForm">
                        <input type="text" id ="answer" name="answer" />
                        <br><input type="button" value=" = " class="consulta" /></br>
                        <input type="button" onclick = "llamarPagina(1)" value= "1"  />
                        <input type="button" onclick = "llamarPagina(2)" value="2" />
                        <input type="button" onclick = "llamarPagina(3)" value="3" />
                  </form>
            </div>
            <div class="contenido" id="contenido" name="contenido"></div>
      </div>
        
   </body>

</html>
