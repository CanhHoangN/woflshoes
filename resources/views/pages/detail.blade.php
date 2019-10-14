@extends('layouts.frontLayouts.master')
@section('content')
<div id="content">
    <!-- #content Begin -->
    <div class="container">
        <!-- container Begin -->
        <div class="col-md-12">
            <!-- col-md-12 Begin -->

            <ul class="breadcrumb">
                <!-- breadcrumb Begin -->
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
            </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->
        <div class="col-md-12">
            <!-- col-md-9 Begin -->
            <div id="productMain" class="row">
                <!-- row Begin -->
                <div class="col-sm-6">
                    <!-- col-sm-6 Begin -->
                    <div id="mainImage">
                        <!-- #mainImage Begin -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- carousel slide Begin -->
                            <ol class="carousel-indicators">
                                <!-- carousel-indicators Begin -->
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol><!-- carousel-indicators Finish -->

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
                                <!-- left carousel-control Begin -->
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a><!-- left carousel-control Finish -->

                            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                <!-- right carousel-control Begin -->
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Previous</span>
                            </a><!-- right carousel-control Finish -->

                        </div><!-- carousel slide Finish -->
                    </div><!-- mainImage Finish -->
                </div><!-- col-sm-6 Finish -->
                <div class="col-sm-6">
                    <!-- col-sm-6 Begin -->
                    <div class="box">
                        <!-- box Begin -->
                        <h1 class="text-center"> {{$productDetail->productName}} </h1>

                        <!--add_cart()-->

                        <form action="{{url('/addCart2').'/'.$productDetail->productCode}}" class="form-horizontal" method="get">
                            <!-- form-horizontal Begin -->
                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label for="qty" class="col-md-5 control-label">Số lượng đặt hàng</label>

                                <div class="col-md-7">
                                    <!-- col-md-7 Begin -->
                                    <select name="product_qty" id="qty" class="form-control">
                                        <!-- select Begin -->
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select><!-- select Finish -->

                                </div><!-- col-md-7 Finish -->
                            </div><!-- form-group Finish -->
                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label class="col-md-5 control-label">Kích cỡ</label>

                                <div class="col-md-7">
                                    <!-- col-md-7 Begin -->

                                    <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product')">
                                        <!-- form-control Begin -->

                                        <option disabled selected>Chọn một kích cỡ</option>



                                        <option value='$size'> 38 </option>
                                        <option value='$size'> 39 </option>
                                        <option value='$size'> 40 </option>
                                        <option value='$size'> 41 </option>
                                        <option value='$size'> 42 </option>
                                        <option value='$size'> 43 </option>
                                        <option value='$size'> 44 </option>


                                    </select><!-- form-control Finish -->

                                </div><!-- col-md-7 Finish -->
                            </div><!-- form-group Finish -->
                            <p class="price-detail">{{number_format($productDetail->productPrice)}} VND</p>
                            <button class="btn-primary add-detail"><i style="margin-right: 5px" class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
                        </form><!-- form-horizontal Finish -->


                        <!-- update -->
                    </div>

                    <div class="form-group">


                        <div class="row" id="thumbs">
                            <!-- row Begin -->

                            <div class="col-xs-4">
                                <!-- col-xs-4 Begin -->
                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                    <!-- thumb Begin -->
                                    <img src="{{asset('images/frontend_image/products').'/'.$productDetail->productImg1}}" alt="product 1" class="img-responsive">
                                </a><!-- thumb Finish -->
                            </div><!-- col-xs-4 Finish -->

                            <div class="col-xs-4">
                                <!-- col-xs-4 Begin -->
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                    <!-- thumb Begin -->
                                    <img src="{{asset('images/frontend_image/products').'/'.$productDetail->productImg2}}" alt="product 2" class="img-responsive">
                                </a><!-- thumb Finish -->
                            </div><!-- col-xs-4 Finish -->

                            <div class="col-xs-4">
                                <!-- col-xs-4 Begin -->
                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                    <!-- thumb Begin -->
                                    <img src="{{asset('images/frontend_image/products').'/'.$productDetail->productImg3}}" alt="product 3" class="img-responsive">
                                </a><!-- thumb Finish -->
                            </div><!-- col-xs-4 Finish -->

                        </div><!-- row Finish -->

                    </div><!-- form-group Finish -->

                    <!-- end update -->

                </div><!-- box Finish -->

            </div>

        </div><!-- row Finish -->
        <div class="box" id="details">
            <!-- box Begin -->
            <h4>Chi tiết sản phẩm</h4>
            <p>
                {{$productDetail->productDescription}}
            </p>
        </div><!-- box Finish -->

    </div><!-- col-md-9 Finish -->
</div><!-- container Finish -->
</div><!-- #content Finish -->

@endsection()