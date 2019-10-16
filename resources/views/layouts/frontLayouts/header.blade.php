<div id="top">

    <div class="container">

        <div class="col-md-6 offer">

            <a href="#" class="btn btn-success btn-sm">Xin chào</a>
            @if(Session::has('Cart'))
               <a style="margin-left: 10px" href={{url('/cart')}}>{{Session('Cart')->totalQuantity}} sản phẩm trong giỏi hàng | Tổng tiền: $ {{Session('Cart')->totalPrice}} </a>
            @else
               <a href={{url('/cart')}}>Chưa có sản phẩm trong giỏ hàng | Total Price: $ 0</a>
            @endif

        </div>

        <div class="col-md-6">

            <ul class="menu">
              <!--  <li>
                    <a href={{route('cart')}}>Giỏ hàng</a>
                </li>-->
                @if(Auth::check())
                    <li>
                        <a href="#">{{Auth::user()->name}}</a>
                    </li>
                    <li>
                        <a href={{route('logout')}}>Đăng xuất</a>
                    </li>
                @else
                    <li>
                        <a href={{route('login')}}>Đăng nhập</a>
                    </li>
                    <li>
                        <a href={{route('register')}}>Đăng ký</a>
                    </li>
                @endif

            </ul>

        </div>

    </div>

</div>

<div id="navbar" class="navbar navbar-default">

    <div class="container">

        <div class="navbar-header">
            <a href={{route('index')}} class="navbar-brand">
                <img src="{{asset('images/frontend_image/logo/logo1.png')}}" alt="M-dev-Store Logo" class="hidden-xs">
                <!--<img src="{{asset('images/frontend_image/logo/logo1.png')}}" alt="M-dev-Store Logo Mobile" class="visible-xs">-->

            </a><!-- navbar-brand home Finish -->

            <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                <span class="sr-only">Toggle Navigation</span>

                <i class="fa fa-align-justify"></i>

            </button>

            <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

                <span class="sr-only">Toggle Search</span>

                <i class="fa fa-search"></i>

            </button>

        </div>

        <div class="navbar-collapse collapse" id="navigation">

            <div class="padding-nav">

                <ul class="nav navbar-nav left">

                    <li>
                        <a href={{route('index')}}>TRANG CHỦ</a>
                    </li>
                    <li>
                        <a href={{route('shop')}}>Mặt HÀNG</a>
                    </li>
                    <li>
                        <a href={{route('cart')}}>GIỎ HÀNG</a>
                    </li>
                    <li>
                        <a href={{route('postContact')}}>LIÊN HỆ</a>
                    </li>

                </ul>

            </div>

            <a href="{{url('/cart')}}" class="btn navbar-btn btn-primary right">

               <i class="fa fa-shopping-cart"></i>
                @if(Session::has('Cart'))
                    <span>{{Session('Cart')->totalQuantity}} sản phẩm trong giỏ hàng</span>
                @else
                    <span>Giỏ hàng trống</span>
                @endif

            </a>

            <div class="navbar-collapse collapse right">

                <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->

                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search"></i>

                </button>

            </div>

            <div class="collapse clearfix" id="search">

                <form method="get" action="{{url('/pSearch')}}" class="navbar-form">

                    <div class="input-group">

                        <input type="text" class="form-control" placeholder="Search" name="pSearch" required>

                        <span class="input-group-btn">

                           <button type="submit" name="search" value="Search" class="btn btn-primary">

                               <i class="fa fa-search"></i>

                           </button>

                           </span>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>