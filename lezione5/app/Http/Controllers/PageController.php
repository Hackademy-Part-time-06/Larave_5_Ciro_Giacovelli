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
 public function corsie(){
    return view ('corsi');
 }
}
