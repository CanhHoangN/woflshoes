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
    @include('layouts.frontLayouts.sidebar')

    <div id="advantages">

        <div class="container">

            <div class="same-height-row">

                <div class="col-sm-4">

                    <div class="box same-height">

                        <div class="icon">

                            <i class="fa fa-heart"></i>

                        </div><!-- icon Finish -->

                        <h3><a href="{{url('detail/4')}}">Popular</a></h3>
                        <p>Sản phẩm phổ biến nhất</p>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="box same-height">

                        <div class="icon">

                            <i class="fa fa-tag"></i>

                        </div>

                        <h3><a href="{{url('detail/7')}}">Classic</a></h3>

                        <p>sản phẩm có phẩm chất cổ điển</p>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="box same-height">

                        <div class="icon"><!-- icon Begin -->

                            <i class="fa fa-thumbs-up"></i>

                        </div><!-- icon Finish -->

                        <h3><a href="{{url('detail/8')}}">Nice</a></h3>

                        <p>Sản phẩm độc đáo</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div id="hot">

        <div class="box">

            <div class="container">

                <div class="col-md-12">

                    <h2>
                        Một số sản phẩm mới
                    </h2>

                </div>

            </div>

        </div>

    </div>

    <div id="content" class="container">
        <div class="row"><!-- row Begin -->
            @foreach($product as $p)
                <div class="col-sm-3">
                    <div class="card">
                        <a href="{{route('detail',$p->productCode)}}">
                            <img class="img-responsive" src="images/frontend_image/products/{{$p->productImg1}}" alt="Product 1">
                        </a>
                        <h4>{{$p->productName}}</h4>
                        <p class="price">{{number_format($p->productPrice)}} VND</p>
                        <p id="description">{{limit_text($p->productDescription, 55)}}</p>
                        <p><button onclick="window.location='{{route('addcart',$p->productCode)}}';"  href="{{route('addcart',$p->productCode)}}"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button></p>
                    </div>
                </div>

            @endforeach
            <center>
                <div class="btn-group">
                    <div class="row">{{$product->links()}}</div>
                </div>
            </center>

        </div>

    </div>
@endsection()
