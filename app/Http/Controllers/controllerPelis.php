<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TablaPeli as Peli;
use Illuminate\Http\RedirectResponse;
//use App\Http\Controllers\Redirect;
//use resources\views\
class controllerPelis extends Controller
{
  public function index(){
      //
    //  echo "sksksks";
      //$movies = Peli::findOrFail(1); 
      $movies = Peli::all(); 
      //$pelicula=Peli
      //$cuenta=Peli::where('Titulo','=','')->count;
    foreach ($movies as $peli)
    {
    //var_dump($peli->Titulo);
   // echo($peli->Titulo);
    }
     // echo($movies->Titulo);
     // dd($movies);
      //return View::make('welcome');
      //return redirect('resources/view/welcome');
     // return view('views.welcome')->with('peliculas', $peli);
     return view("listado")->with('peliculas',$movies);
     //return redirect()->to("http://www.google.com");
    // return Redirect::to('welcome');
  }
}
