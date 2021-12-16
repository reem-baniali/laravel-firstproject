<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
   public function index(){
    $products=['Product 1','Product 2','Product 3'];

      return view('product',compact('products'));
   }
}
 //with == other way to send variable