@extends('layouts.frontLayouts.master')
@section('content')
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href={{route('index')}}>Home</a>
                   </li>
                   <li>
                       Result
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
         
           
           <div class="col-md-12"><!-- col-md-9 Begin -->
             
             
               
               <div class="row"><!-- row Begin -->
        
        		@if($count==0)
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
        		@else

        		@foreach($pc as $p)

                           <div class="col-sm-3 single"><!-- col-sm-4 col-sm-6 single Begin -->
                               <div class="product"><!-- product Begin -->
                                   <div class="img">
                                       <a href="{{route('detail',$p->productCode)}}">
                                           <img class='img-responsive' src="{{url('images/frontend_image/products').'/'.$p->productImg1}}">
                                       </a>
                                   </div>
                                   <div class="content-product">
                                       <div class="text m-left"><!-- text Begin -->
                                           <p>
                                               <a href="{{route('detail',$p->productCode)}}">
                                                   {{$p->productName}}
                                               </a>
                                           </p>
                                           <p class="price">{{$p->productPrice}}đ</p>
                                       </div>
                                       <div class="list-btn m-left">
                                           <ul>
                                               <li id="detail"><a href="{{route('detail',$p->productCode)}}">View Details</a></li>
                                               <li id="add-cart"><a href="{{route('addcart',$p->productCode)}}">
                                                       <i class="fa fa-shopping-cart"></i><span  class="addtocart">Add to cart</span>
                                                   </a></li>
                                           </ul>

                                       </div>
                                   </div><!-- text Finish -->
                               </div><!-- product Finish -->
                           </div><!-- col-sm-4 single Finish -->
                @endforeach
                @endif
               
               </div><!-- row Finish -->
               
             
              
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
 @endsection()