@extends('layouts.frontLayouts.master')
@section('content')
    @include('layouts.frontLayouts.sidebar')

    <div id="advantages"><!-- #advantages Begin -->

        <div class="container"><!-- container Begin -->

            <div class="same-height-row"><!-- same-height-row Begin -->

                <div class="col-sm-4"><!-- col-sm-4 Begin -->

                    <div class="box same-height"><!-- box same-height Begin -->

                        <div class="icon"><!-- icon Begin -->

                            <i class="fa fa-heart"></i>

                        </div><!-- icon Finish -->

                        <h3><a href="{{url('detail/4')}}">Popular</a></h3>
                        <p>The most popular product</p>

                    </div><!-- box same-height Finish -->

                </div><!-- col-sm-4 Finish -->

                <div class="col-sm-4"><!-- col-sm-4 Begin -->

                    <div class="box same-height"><!-- box same-height Begin -->

                        <div class="icon"><!-- icon Begin -->

                            <i class="fa fa-tag"></i>

                        </div><!-- icon Finish -->

                        <h3><a href="{{url('detail/7')}}">Classic</a></h3>

                        <p>products with classic qualities</p>

                    </div><!-- box same-height Finish -->

                </div><!-- col-sm-4 Finish -->

                <div class="col-sm-4"><!-- col-sm-4 Begin -->

                    <div class="box same-height"><!-- box same-height Begin -->

                        <div class="icon"><!-- icon Begin -->

                            <i class="fa fa-thumbs-up"></i>

                        </div><!-- icon Finish -->

                        <h3><a href="{{url('detail/8')}}">Nice</a></h3>

                        <p>Very beautiful product</p>

                    </div><!-- box same-height Finish -->

                </div><!-- col-sm-4 Finish -->

            </div><!-- same-height-row Finish -->

        </div><!-- container Finish -->

    </div><!-- #advantages Finish -->

    <div id="hot"><!-- #hot Begin -->

        <div class="box"><!-- box Begin -->

            <div class="container"><!-- container Begin -->

                <div class="col-md-12"><!-- col-md-12 Begin -->

                    <h2>
                        Our Latest Products
                    </h2>

                </div><!-- col-md-12 Finish -->

            </div><!-- container Finish -->

        </div><!-- box Finish -->

    </div><!-- #hot Finish -->

    <div id="content" class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            @foreach($product as $p)
                <div class="col-sm-3 single"><!-- col-sm-4 col-sm-6 single Begin -->
                    <div class="product"><!-- product Begin -->
                        <div class="img">
                            <a href="{{route('detail',$p->productCode)}}">
                                <img class="img-responsive" src="images/frontend_image/products/{{$p->productImg1}}" alt="Product 1">
                            </a>
                        </div>
                        <div class="content-product">
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
            <center>
                <div class="btn-group">
                    <div class="row">{{$product->links()}}</div>
                </div>
            </center>

        </div><!-- row Finish -->

    </div><!-- container Finish -->
@endsection()
