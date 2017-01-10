<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MagasinController extends Controller
{
    public function index(){
      $products = Product::all();
      return view('magasin', ['products' => $products]);
    }
}//end class
