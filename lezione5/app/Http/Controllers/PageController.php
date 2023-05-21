<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
 public function homepage(){
    return view ('welcome');
 }
 public function contatti(){
    return view ('contatti');
 }
 public function singolocorso(){
    return view ('singolocorso');
 }
 

public static $corsi = [
      "Zumba"=>   [
              "id" => 1,
              "name"=> "Zumba",
              "time" => "Martedi 15:30",
              "costo" => "30€",
              "cover" => "https://picsum.photos/600/400",
              "slug" => "Zumba",
      ],
              "Yoga"=>[
               "id" => 2,
               "name"=> "Yoga",
                "time" => "Giovedi 15:30",
                "costo" => "40€",
                "cover" => "https://picsum.photos/600/400",
                "slug" => "yoga",
              ],

      "Sala pesi"=>[
                "id" => 3,
                "name"=> "Sala pesi",
                "time" => "Tutti i giorni",
                "costo" => "40€",
                "cover" => "https://picsum.photos/600/400",
                "slug" => "sala-pesi",
            ],
            
         ];

public function corsi(){

    return view ('corsi',['singolocorso' => self::$corsi]);

 }

public function send(Request $request){

   $request->validate([

      "nome"=>"required|string",
      "email" =>"required|email",
      "telefono"=>"required|numeric",
      "messaggio"=>"required|min:10"
   ]);

   $data=[
      "nome" =>$request->nome,
      "email"=>$request->email,
      "telefono"=>$request->telefono,
      "messaggio"=>$request->messaggio
   ];
   
   //dd($data);

   Mail::to($request->input('email'))->send(new InfoMail($data));
   return redirect()->route('welcome')->with('Grazie per averci contattato');
}

public function show($slug){

   foreach(self::$corsi as $corso){

      if($slug == $corso['slug']){

         return view ('singolocorso',['corso'=>$corso[0]]);
      }

      
}
abort (404);
}
}