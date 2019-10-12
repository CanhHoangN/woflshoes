<div class="box"><!-- box Begin -->

    <div class="box-header"><!-- box-header Begin -->

        <center><!-- center Begin -->

            <h1> Login </h1>

            <p class="lead"> Already have our account..? </p>

        </center><!-- center Finish -->

    </div><!-- box-header Finish -->

    <form method="post" action="{!! url('login') !!}"><!-- form Begin -->
        <input type= "hidden" name= "_token" value= "{!! csrf_token() !!}" />

        @if(Session::has('flag'))
            <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
        @endif

        <div class="form-group"><!-- form-group Begin -->

            <label> Email </label>

            <input name="email" type="text" class="form-control" required>

        </div><!-- form-group Finish -->

        <div class="form-group"><!-- form-group Begin -->

            <label> Password </label>

            <input name="password" type="password" class="form-control" required>

        </div><!-- form-group Finish -->

        <div class="text-center"><!-- text-center Begin -->

            <button name="login" value="Login" class="btn btn-primary">

                <i class="fa fa-sign-in"></i> Login

            </button>

        </div><!-- text-center Finish -->

    </form><!-- form Finish -->

</div><!-- box Finish -->



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



<div id="content"><!-- #content Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12 Begin -->

            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                <li>
                    <a href="{{url('/')}}" >Home</a>
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
        <div class="col-md-12"><!-- col-md-9 Begin -->
            <div id="productMain" class="row"><!-- row Begin -->
                <div class="col-sm-6"><!-- col-sm-6 Begin -->
                    <div id="mainImage"><!-- #mainImage Begin -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- carousel slide Begin -->
                            <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol><!-- carousel-indicators Finish -->

                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="img-responsive"
                                         src="{{asset('images/frontend_image/products').'/'.$productDetail->productImg1}}"
                                         alt="Product 3-a">
                                </div>
                                <div class="item">
                                    <img class="img-responsive"
                                         src="{{asset('images/frontend_image/products').'/'.$productDetail->productImg2}}"
                                         alt="Product 3-b">
                                </div>
                                <div class="item">
                                    <img class="img-responsive"
                                         src="{{asset('images/frontend_image/products').'/'.$productDetail->productImg3}}"
                                         alt="Product 3-c">
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
                <div class="col-sm-6"><!-- col-sm-6 Begin -->
                    <div class="box"><!-- box Begin -->
                        <h1 class="text-center"> {{$productDetail->productName}} </h1>

                        <!--add_cart()-->

                        <form action="{{url('/addCart2').'/'.$productDetail->productCode}}" class="form-horizontal" method="get"><!-- form-horizontal Begin -->
                            <div class="form-group"><!-- form-group Begin -->
                                <label for="qty" class="col-md-5 control-label">Products Quantity</label>

                                <div class="col-md-7"><!-- col-md-7 Begin -->
                                    <select name="product_qty" id="qty" class="form-control"><!-- select Begin -->
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select><!-- select Finish -->

                                </div><!-- col-md-7 Finish -->
                            </div><!-- form-group Finish -->
                            <p class="price">{{$productDetail->productPrice}} VND</p>
                            <button class="btn-primary add-detail"><i style="margin-right: 5px" class="fa fa-shopping-cart"></i>Add to cart</button>
                        </form><!-- form-horizontal Finish -->

                    </div><!-- box Finish -->
                </div>

            </div><!-- row Finish -->
            <div class="box" id="details"><!-- box Begin -->
                <h4>Product Details</h4>
                <p>
                    {{$productDetail->productDescription}}
                </p>
            </div><!-- box Finish -->

        </div><!-- col-md-9 Finish -->
    </div><!-- container Finish -->
</div><!-- #content Finish -->