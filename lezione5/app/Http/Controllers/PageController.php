<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
 public function corsi(){

   $corsi = [
      "Zumba"=>   [
              "id" => 1,
              "time" => "Martedi 15:30",
              "costo" => "30€",
              "cover" => "https://picsum.photos/600/400",
      ],
              "Yoga"=>[
               "id" => 2,
                "time" => "Giovedi 15:30",
                "costo" => "40€",
                "cover" => "https://picsum.photos/600/400",
              ],

      "Sala pesi"=>[
                "id" => 3,
                "time" => "Tutti i giorni",
                "costo" => "40€",
                "cover" => "https://picsum.photos/600/400",
            ],
            
         ];
   
    return view ('corsi',['singolocorso' => $corsi]);
 }
public function send(Request $request){

   
}

}
