@extends('layouts.frontLayouts.master')
@section('content')
    <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="{{asset('/')}}">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
            @include('layouts.frontLayouts.leftmenu')
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->

               
               <div class="row"><!-- row Begin -->
               @foreach($products as $p)

                       <div class="col-sm-4 single"><!-- col-sm-4 col-sm-6 single Begin -->
                           <div class="product"><!-- product Begin -->
                               <div class="img-shop">
                                   <a href="{{route('detail',$p->productCode)}}">
                                       <img class="img-responsive" src="images/frontend_image/products/{{$p->productImg1}}" alt="Product 1">
                                   </a>
                               </div>
                               <div class="content-product-shop">
                                   <div class="text m-left textedit"><!-- text Begin -->
                                       <p>
                                           <a href="{{route('detail',$p->productCode)}}">
                                               {{$p->productName}}
                                           </a>
                                       </p>
                                       <p class="price">{{$p->productPrice}}đ</p>
                                   </div>
                                   <div class="list-btn m-left buttonedit">
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
               </div><!-- row Finish -->
               
               <center>
                  <div class="btn-group">
                      <div class="row">{{$products->links()}}</div>
                  </div> 
               </center>
                
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
@endsection()
