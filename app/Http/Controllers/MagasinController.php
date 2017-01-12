<?php

namespace App\Http\Controllers;

use App\Product;
use App\Creator;
use Illuminate\Http\Request;

class MagasinController extends Controller
{
    public function index(Request $request){
      $products = Product::all();
      if ($products === NULL) {
        $request->session()->flash('status','No products returned');
      }else {
        $request->session()->flash('status','All is good');
      }
      //return $products;
      return view('magasin', ['products' => $products]);
    }
}//end class
