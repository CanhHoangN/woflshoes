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
                       Cart
                   </li>
               </ul><!-- breadcrumb Finish -->

           </div><!-- col-md-12 Finish -->

           <div id="cart" class="col-md-9"><!-- col-md-9 Begin -->

               <div class="box"><!-- box Begin -->

                   <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form Begin -->

                       <h1>Giỏ hàng</h1>
                       @if(Session::has('Cart'))
                       <p class="text-muted">Bạn đang có {{Session('Cart')->totalQuantity}} sản phẩm trong giỏ hàng.</p>
                       @else
                       <p class="text-muted">Bạn đang có 0 sản phẩm trong giỏ hàng.</p>
                       @endif
                       <div class="table-responsive"><!-- table-responsive Begin -->

                           <table class="table"><!-- table Begin -->
                               <thead><!-- thead Begin -->
                                   <tr><!-- tr Begin -->
                                       <th>Sản phẩm</th>
                                       <th>Số lượng</th>
                                       <th>Giá hiện tại</th>
                                       <th>Miễn phí vận chuyển</th>
                                       <th>Tổng tiền</th>
                                   </tr><!-- tr Finish -->
                               </thead><!-- thead Finish -->

                               <tbody><!-- tbody Begin -->
                                @if(Session::has('Cart'))
                                @foreach($product_cart as $prd)
                                   <tr><!-- tr Begin -->
                                       <td><img class="img-responsive" src="images/frontend_image/products/{{$prd['item']['productImg1']}}" alt="Product 3a"></td>
                                       <!-- <td><a href="{{route('detail',$prd['item']['productCode'])}}"></a></td> -->
                                       <td>{{$prd['quantity']}}</td>
                                       <td>{{$prd['item']['productPrice']}}</td>
                                       <td><i class="glyphicon glyphicon-thumbs-up"></i></td>
                                       <td>{{$prd['quantity']}} * {{$prd['item']['productPrice']}}</td>
                                   </tr><!-- tr Finish -->
                                @endforeach


                               </tbody><!-- tbody Finish -->

                               <tfoot><!-- tfoot Begin -->

                                   <tr><!-- tr Begin -->

                                       <th>Tổng</th>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                       <th class="totalPrice" colspan="5">{{number_format(Session('Cart')->totalPrice)}}</th>

                                   </tr><!-- tr Finish -->

                               </tfoot><!-- tfoot Finish -->


                           </table><!-- table Finish -->

                       </div><!-- table-responsive Finish -->

                       <div class="box-footer"><!-- box-footer Begin -->

                           <div class="pull-left"><!-- pull-left Begin -->

                               <a href="{{asset('/')}}" class="btn btn-default"><!-- btn btn-default Begin -->

                                   <i class="fa fa-chevron-left"></i> Tiếp tục mua sắm

                               </a><!-- btn btn-default Finish -->

                           </div><!-- pull-left Finish -->

                           <div class="pull-right"><!-- pull-right Begin -->
                               <a href="{{url('/checkout')}}" class="btn btn-primary">

                                   Hoàn thành đặt hàng. <i class="fa fa-chevron-right"></i>
                               </a>

                           </div><!-- pull-right Finish -->

                       </div><!-- box-footer Finish -->

                   </form><!-- form Finish -->

               </div><!-- box Finish -->


           </div><!-- col-md-9 Finish -->

           <div class="col-md-3"><!-- col-md-3 Begin -->

               <div id="order-summary" class="box"><!-- box Begin -->

                   <div class="box-header"><!-- box-header Begin -->

                       <h3>Order Summary</h3>

                   </div><!-- box-header Finish -->

                   <p class="text-muted"><!-- text-muted Begin -->

                       Vận chuyển và chi phí bổ sung được tính dựa trên giá trị bạn đã nhập

                   </p><!-- text-muted Finish -->

                   <div class="table-responsive"><!-- table-responsive Begin -->

                       <table class="table"><!-- table Begin -->

                           <tbody><!-- tbody Begin -->

                               <tr><!-- tr Begin -->

                                   <td>Số lượng</td>
                                   <th> {{Session('Cart')->totalQuantity}} </th>

                               </tr><!-- tr Finish -->

                               <tr><!-- tr Begin -->

                                   <td> Thuế </td>
                                   <th> $0 </th>

                               </tr><!-- tr Finish -->

                               <tr class="total"><!-- tr Begin -->

                                   <td> Tổng tiền </td>
                                   <th class="totalPrice"> {{number_format(Session('Cart')->totalPrice)}} </th>

                               </tr><!-- tr Finish -->

                           </tbody><!-- tbody Finish -->
                           @endif

                       </table><!-- table Finish -->

                   </div><!-- table-responsive Finish -->

               </div><!-- box Finish -->

           </div><!-- col-md-3 Finish -->

       </div><!-- container Finish -->
   </div><!-- #content Finish -->
@endsection()