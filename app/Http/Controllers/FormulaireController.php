<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Form;
use Illuminate\Support\Facades\DB;
class FormulaireController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulaire');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $newProd = new Product();
      $title = $request->input('Title');
      $desc = $request->input('Description');
      $width = $request->input('Width');
      $height = $request->input('Height');
      $price = $request->input('Price');
      $nameAuthor = $request->input('Author');
      $newProd->name = $title;
      $newProd->description = $desc;
      $newProd->width = $width;
      $newProd->height = $height;
      $newProd->price = $price;
      $ID = DB::select("select id from creators where name like '$nameAuthor'");

      if ($ID == NULL) {
        DB::insert("insert into creators (name) values ('$nameAuthor')");
        $lastID = DB::getPdo()->lastInsertId();
        DB::insert("insert into products (name,description,price,height,width,creator_id) values ('$title','$desc',$price,$height,$width,$lastID)");
      }else {
        $currId = $ID[0]->id;
        DB::insert("insert into products (name,description,price,height,width,creator_id) values ('$title','$desc',$price,$height,$width,$currId)");
      }


      return view('resForm', ['newProd' => $newProd]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
