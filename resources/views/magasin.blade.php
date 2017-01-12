@extends('templates.base')
@section('title','Magasin')
@section('content')
  <h1>Bienvenue dans le magasin</h1>
  <h2>{{Session::get('status')}}</h2>
</div>
  <div class="container-fluid table">
    @if (sizeof($products) >1)
      @foreach ($products as $product)
        <div class="wrapper"style="margin-right:15px;">
          <table id="product-table">
            <tr>
              <td style="text-align:center;"><img style="width:auto;height:150px;" src="img/{{$product->img}}"></td>
            </tr>
            <tr>
              <td><h2>{{$product->name}}</h2></td>
            </tr>
            <tr>
              <td>{{$product->description}} taille: {{$product->height}} x {{$product->width}} <span style="border-left:1px solid black; padding-top:10px;padding-bottom:10px;">  &nbsp;&nbsp; {{$product->price/100}} €</span></td>
            </tr>
          </table>
        <button style="width:100%;" type="button" name="button">ajouter au panier</button>
        </div>
      @endforeach
    @elseif (sizeof($products) == 1)
        <div class="wrapper"style="margin-right:15px;">
          <table id="product-table">
            <tr>
              <td style="text-align:center;"><img style="width:auto;height:150px;" src="img/{{$products->img}}"></td>
            </tr>
            <tr>
              <td><h2>{{$products->name}}</h2></td>
            </tr>
            <tr>
              <td>{{$products->description}} taille: {{$products->height}} x {{$products->width}} <span style="border-left:1px solid black; padding-top:10px;padding-bottom:10px;">  &nbsp;&nbsp; {{$products->price/100}} €</span></td>
            </tr>
          </table>
        <button style="width:100%;" type="button" name="button">ajouter au panier</button>
        </div>
      @else
        <p></p>
    @endif
  </div>
  <div class="">
@endsection
