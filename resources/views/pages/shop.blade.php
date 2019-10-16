<?php
function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $text = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}
?>
@extends('layouts.frontLayouts.master')
@section('content')
    <div id="content">
       <div class="container">
           <div class="col-md-12">
               
               <ul class="breadcrumb">
                   <li>
                       <a href="{{asset('/')}}">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
               </ul>
               
           </div>
           
           <div class="col-md-3">
            @include('layouts.frontLayouts.leftmenu')
           </div>
           
           <div class="col-md-9">

               
               <div class="row">
               @foreach($products as $p)
                       <div class="col-sm-4">
                           <div class="card">
                               <a href="{{route('detail',$p->productCode)}}">
                                   <img class="img-responsive" src="images/frontend_image/products/{{$p->productImg1}}" alt="Product 1">
                               </a>
                               <h4>{{$p->productName}}</h4>
                               <p class="price">{{number_format($p->productPrice)}} VND</p>
                               <p id="description">{{limit_text($p->productDescription, 55)}}</p>
                               <p><button onclick="window.location='{{route('addcart',$p->productCode)}}';"  href="{{route('addcart',$p->productCode)}}"><i class="fa fa-shopping-cart"></i> Add to Cart</button></p>
                           </div>
                       </div>

               @endforeach
               </div>
               
               <center>
                  <div class="btn-group">
                      <div class="row">{{$products->links()}}</div>
                  </div> 
               </center>
                
           </div>
           
       </div>
   </div>
@endsection()
