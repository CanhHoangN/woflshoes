@extends('layouts.frontLayouts.master')
@section('content')
<div id="content">

    <div class="container">

        <div class="col-md-12">


            <ul class="breadcrumb">

                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a href="{{url('/shop')}}">Shop</a>
                </li>

                <li>
                    <a href="{{url('/categories').'/'.$productDetail->productLineID}}">{{$productLine->productLineName}}</a>
                </li>
                <li> {{$productDetail->productName}} </li>
            </ul>

        </div><!-- col-md-12 Finish -->
        <div class="col-md-12">

            <div id="productMain" class="row">

                <div class="col-sm-6">

                    <div id="mainImage">

                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">

                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="img-responsive" src="{{asset('images/frontend_image/products').'/'.$productDetail->productImg1}}" alt="Product 3-a">
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset('images/frontend_image/products').'/'.$productDetail->productImg2}}" alt="Product 3-b">
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset('images/frontend_image/products').'/'.$productDetail->productImg3}}" alt="Product 3-c">
                                </div>
                            </div>

                            <a href="#myCarousel" class="left carousel-control" data-slide="prev">

                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a href="#myCarousel" class="right carousel-control" data-slide="next">

                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Previous</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6">

                    <div class="box">
                        <h1 class="text-center"> {{$productDetail->productName}} </h1>

                        <form action="{{url('/addCart2').'/'.$productDetail->productCode}}" class="form-horizontal" method="get">

                            <div class="form-group">

                                <label for="qty" class="col-md-5 control-label">Số lượng đặt hàng</label>

                                <div class="col-md-7">

                                    <select name="product_qty" id="qty" class="form-control">

                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-md-5 control-label">Kích cỡ</label>

                                <div class="col-md-7">


                                    <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product')">


                                        <option disabled selected>Chọn một kích cỡ</option>



                                        <option value='$size'> 38 </option>
                                        <option value='$size'> 39 </option>
                                        <option value='$size'> 40 </option>
                                        <option value='$size'> 41 </option>
                                        <option value='$size'> 42 </option>
                                        <option value='$size'> 43 </option>
                                        <option value='$size'> 44 </option>


                                    </select>

                                </div>
                            </div>
                            <p class="price-detail">{{number_format($productDetail->productPrice)}} VND</p>
                            <button class="btn-primary add-detail"><i style="margin-right: 5px" class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
                        </form>



                    </div>

                    <div class="form-group">


                        <div class="row" id="thumbs">


                            <div class="col-xs-4">

                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">

                                    <img src="{{asset('images/frontend_image/products').'/'.$productDetail->productImg1}}" alt="product 1" class="img-responsive">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">

                                    <img src="{{asset('images/frontend_image/products').'/'.$productDetail->productImg2}}" alt="product 2" class="img-responsive">
                                </a>
                            </div>

                            <div class="col-xs-4">

                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">

                                    <img src="{{asset('images/frontend_image/products').'/'.$productDetail->productImg3}}" alt="product 3" class="img-responsive">
                                </a>
                            </div>

                        </div><!-- row Finish -->

                    </div><!-- form-group Finish -->

                    <!-- end update -->

                </div>

            </div>

        </div><!-- row Finish -->
        <div class="box" id="details">

            <h4>Chi tiết sản phẩm</h4>
            <p>
                {{$productDetail->productDescription}}
            </p>
        </div>

    </div>
</div>
</div>

@endsection()