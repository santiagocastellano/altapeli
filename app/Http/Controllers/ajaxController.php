<?php



use Illuminate\Http\Request;
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\TablaPeli as Peli;
class AjaxController extends Controller
{
    public function index(){
        $msg = "This is a simple message.";
       // $data = $request->all(); // This will get all the request data.

       // dd($data);
       /* if($request::ajax()){
            return 'getRequest comleto' ;
        }*/
       // return response()->json(array('msg'=> $msg), 200);
       
     }
     public function post2(){
        echo "sskjsks";
        $posts = Peli::Paginate(10);
        echo $posts->total();
        
        $response = [
            'pagination' => [
                'total' => $posts->total(),
                'per_page' => $posts->perPage(),
                'current_page' => $posts->currentPage(),
                'last_page' => $posts->lastPage(),
                'from' => $posts->firstItem(),
                'to' => $posts->lastItem()
            ],
            'data' => $posts
        ];
        return response()->json($response);
     }
     public function postVue(){
        $movies = Peli::Paginate(10);
        $var=$movies;
        echo "santi";
        return response()->json([
            'status' => 'success',
            'errors' => false,
            'data' => [
                'rows' => json_decode($movies->toJson()),
                'paginationMarkup' => $movies->render()
            ]
        ], 200);

     }
    /* public function postBusqueda(){
        $opcionBusqueda=$_POST['opcionBusqueda'];
        $textoBusqueda=$_POST['textoBusqueda'];
        switch ($opcionBusqueda) {
            case "Titulo":
                $post=Peli::where('Titulo','LIKE','%'.$textoBusqueda.'%')->paginate(10);
                break;
            case "Genero":
                echo "i es igual a 1";
                break;
            case "Año":
                echo "i es igual a 2";
                break;
            case "Puntaje":
                echo "i es igual a 2";
            break;
            case "Sinopsis":
                echo "i es igual a 2";
            break;
            default:
                $post = Peli::Paginate(10);
        }
        return $post;
     }*/
     public function post(){
         $campo=$_POST['campo'];
         $paginas=10;
         $textoBusqueda=$_POST['textoBusqueda'];
         $campoOrden=$_POST['campoOrden'];
         $sentido=$_POST['sentido'];
         if($textoBusqueda!=""){
            $post=Peli::where($campo,'LIKE','%'.$textoBusqueda.'%')->paginate($paginas);
         }else{
            $post = Peli::orderBy($campoOrden,$sentido)->paginate($paginas); 
         }
       // $dato=$_POST['dato'];
        //echo"sjsjsjs";
        //$textoBusqueda=$_POST['textoBusqueda'];
       /* switch ($campo) {
            case "Titulo":
                $post=Peli::where('Titulo','LIKE','%'.$textoBusqueda.'%')->paginate(10);
                break;
            case "Genero":
                $post=Peli::where('Genero','LIKE','%'.$textoBusqueda.'%')->paginate(10);
                break;
            case "Año":
                $post=Peli::where('Año','LIKE','%'.$textoBusqueda.'%')->paginate(10);
                break;
            case "Puntaje":
                $post=Peli::where('Puntaje','LIKE','%'.$textoBusqueda.'%')->paginate(10);
            break;
            case "Sinopsis":
                $post=Peli::where('Sinopsis','LIKE','%'.$textoBusqueda.'%')->paginate(10);
            break;
            default:
                $post = Peli::Paginate(10);
        }*/
        //$post = Peli::Paginate(10);
        return $post;

      /*  $post = Peli::Paginate(10);
        
        $postJson= $post->toJson();
        $data = '[{
            "name": "Aragorn",
            "race": "Human"
        }]';
        if($_POST['dato'])
        {
            $dato=$_POST['dato'];
            
        }*/
      /*  if($dato->){
            echo $dato;
        }*/
       // $san=$post->total();
      /*  $response = [
            'pagination' => [
                'total' => $posts->total(),
                'per_page' => $posts->perPage(),
                'current_page' => $posts->currentPage(),
                'last_page' => $posts->lastPage(),
                'from' => $posts->firstItem(),
                'to' => $posts->lastItem()
            ],
            'data' => $posts
        ];*/
      
        //return response()->json($data);
       /* return response()->json([
            'status' => 'success',
            'errors' => false,
            'data' => [
                'rows' => json_decode($post->toJson()),
                'total'=>$post->total()
            ]
        ], 200);*/
         //echo "santiago";
       /* if($_POST['dato'])
        {
            $dato=$_POST['dato'];
            $var="devuelta: ".$dato;
            if($dato==="listar todo"){
                $movies = Peli::Paginate(10);
                $var=$movies;
                return response()->json([
                    'status' => 'success',
                    'errors' => false,
                    'data' => [
                        'rows' => json_decode($movies->toJson()),
                        'paginationMarkup' => $movies->render()
                    ]
                ], 200);

            }
          
        }else {
            return "consulta vacia";
        }*/
      
        
     }
}
