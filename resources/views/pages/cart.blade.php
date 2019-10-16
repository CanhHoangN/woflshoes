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
                       Cart
                   </li>
               </ul>

           </div>

           <div id="cart" class="col-md-9">

               <div class="box">

                   <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form Begin -->

                       <h1>Giỏ hàng</h1>
                       @if(Session::has('Cart'))
                       <p class="text-muted">Bạn đang có {{Session('Cart')->totalQuantity}} sản phẩm trong giỏ hàng.</p>
                       @else
                       <p class="text-muted">Bạn đang có 0 sản phẩm trong giỏ hàng.</p>
                       @endif
                       <div class="table-responsive">

                           <table class="table">
                               <thead>
                                   <tr>
                                       <th>Sản phẩm</th>
                                       <th>Số lượng</th>
                                       <th>Giá hiện tại</th>
                                       <th>Miễn phí vận chuyển</th>
                                       <th>Tổng tiền</th>
                                   </tr>
                               </thead>

                               <tbody>
                                @if(Session::has('Cart'))
                                @foreach($product_cart as $prd)
                                   <tr>
                                       <td><img class="img-responsive" src="images/frontend_image/products/{{$prd['item']['productImg1']}}" alt="Product 3a"></td>
                                       <!-- <td><a href="{{route('detail',$prd['item']['productCode'])}}"></a></td> -->
                                       <td>{{$prd['quantity']}}</td>
                                       <td>{{$prd['item']['productPrice']}}</td>
                                       <td><i class="glyphicon glyphicon-thumbs-up"></i></td>
                                       <td>{{$prd['quantity']}} * {{$prd['item']['productPrice']}}</td>
                                   </tr>
                                @endforeach


                               </tbody>

                               <tfoot>

                                   <tr>

                                       <th>Tổng</th>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                       <th class="totalPrice" colspan="5">{{number_format(Session('Cart')->totalPrice)}}</th>

                                   </tr>

                               </tfoot>


                           </table>

                       </div>

                       <div class="box-footer">

                           <div class="pull-left">

                               <a href="{{asset('/')}}" class="btn btn-default">

                                   <i class="fa fa-chevron-left"></i> Tiếp tục mua sắm

                               </a>

                           </div>

                           <div class="pull-right">
                               <a href="{{url('/checkout')}}" class="btn btn-primary">

                                   Hoàn thành đặt hàng. <i class="fa fa-chevron-right"></i>
                               </a>

                           </div>

                       </div>

                   </form>

               </div>


           </div>

           <div class="col-md-3">

               <div id="order-summary" class="box">

                   <div class="box-header">

                       <h3>Order Summary</h3>

                   </div>

                   <p class="text-muted">

                       Vận chuyển và chi phí bổ sung được tính dựa trên giá trị bạn đã nhập

                   </p>

                   <div class="table-responsive">

                       <table class="table">

                           <tbody>

                               <tr>

                                   <td>Số lượng</td>
                                   <th> {{Session('Cart')->totalQuantity}} </th>

                               </tr>

                               <tr>

                                   <td> Thuế </td>
                                   <th> $0 </th>

                               </tr>

                               <tr class="total">

                                   <td> Tổng tiền </td>
                                   <th class="totalPrice"> {{number_format(Session('Cart')->totalPrice)}} </th>

                               </tr>

                           </tbody>
                           @endif

                       </table>

                   </div>

               </div>

           </div>

       </div>
   </div>
@endsection()