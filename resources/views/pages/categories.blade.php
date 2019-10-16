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
                       <a href={{route('index')}}>Home</a>
                   </li>
                   <li>
                       Result
                   </li>
               </ul>
               
           </div>
           
         
           
           <div class="col-md-12">
             
             
               
               <div class="row">
        
        		@if($count==0)
            
                <div class='box'>
                
                    <h1> No Product Found In This Price. </h1>
                
                </div>
            
                @else
                <h4 style="padding-left:1.4em; margin-bottom: 3em">Showing: {{$count}} Items</h4>
        		@foreach($pc as $p)
                           <div class="col-sm-3">
                               <div class="card">
                                   <a href="{{route('detail',$p->productCode)}}">
                                       <img class='img-responsive' src="{{url('images/frontend_image/products').'/'.$p->productImg1}}">
                                   </a>
                                   <h4>{{$p->productName}}</h4>
                                   <p class="price">{{number_format($p->productPrice)}} VND</p>
                                   <p id="description">{{limit_text($p->productDescription, 55)}}</p>
                                   <p><button onclick="window.location='{{route('addcart',$p->productCode)}}';"  href="{{route('addcart',$p->productCode)}}"><i class="fa fa-shopping-cart"></i> Add to Cart</button></p>
                               </div>
                           </div>

                @endforeach
                @endif
               
               </div>
               
             
              
               
           </div>
           
       </div>
   </div>
 @endsection()