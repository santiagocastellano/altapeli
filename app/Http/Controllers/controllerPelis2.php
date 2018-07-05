<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Models\TablaPeli as Peli;
class controllerPelis2 extends Controller
{
    public function index(Request $request){
        $busqueda=$request->input("mibusqueda");
        $campo=$request->input("camposeleccionado");
        $pagina=$request->input("page");
        $tituloSel="";
        $sinoSel="";
        $generoSel="";
        $puntajeSel="";
        $anioSel="";
        //echo $pagina;
       // var $buscando;
        if ($campo!="" ){
           //echo $campo;
            switch ($campo){
                case 1:
                    $movies=Peli::where('Titulo','LIKE','%'.$busqueda.'%')->paginate(10);
                    $tituloSel="selected";
                break;
                case 2:
                    $movies=Peli::where('Sinopsis','LIKE','%'.$busqueda.'%')->paginate(10);
                    $sinoSel="selected";
                break;
                case 3:
                    $movies=Peli::where('Genero','LIKE','%'.$busqueda.'%')->paginate(10);
                    $generoSel="selected";
                break;
                case 4:
                    $movies=Peli::where('Puntaje','LIKE','%'.$busqueda.'%')->paginate(10);
                    $puntajeSel="selected";
                break;
                case 5:
                    $movies=Peli::where('Año','LIKE','%'.$busqueda.'%')->paginate(10);
                    $anioSel="selected";
                break;
            }
        }else{
            
                $movies = Peli::Paginate(10);    
   
         
        }
        
      /*  if ($busqueda!=""){
            $movies=Peli::where('Titulo','LIKE','%'.$busqueda.'%')->
            orWhere('Genero','LIKE','%'.$busqueda.'%')->
            orWhere('Puntaje','LIKE','%'.$busqueda.'%')->
            orWhere('Año','LIKE','%'.$busqueda.'%')->paginate(10);
        } else {
            $movies = Peli::Paginate(10);   
        }*/
       
       // $pelisPag=$movies->paginate(5);
       // foreach ($movies as $movie) {
           // echo $movie->Titulo;
       // }
   // echo $request->input("mibusqueda");
        
       //return view("listadogrid")->with('peliculas',$movies);
       return view("listadogrid")->with('data',['peliculas'=>$movies,
       'tituloSel'=>$tituloSel,'sinoSel'=>$sinoSel,'generoSel'=>$generoSel,
       'puntajeSel'=>$puntajeSel,'anioSel'=>$anioSel,'busqueda'=>$busqueda]);
       //return view("prueba")->with('peliculas',$movies);
      //return view("listadogrid");
    }
}
