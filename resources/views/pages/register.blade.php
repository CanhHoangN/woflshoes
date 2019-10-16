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
                       Register
                   </li>
               </ul>
               
           </div>
           <div class="col-md-3">

    @include('layouts.frontLayouts.leftmenu')
               
        </div>

           <div class="col-md-9">
               <div class="row register">
                   <div class="col-sm-6 register-form">
                       <h2 id="signup-register">Đăng ký</h2>
                       <form action="{!! url('register') !!}" method="post" enctype="multipart/form-data">
                           @csrf
                           @if(count($errors)>0)
                               <div class='login-failed alert-danger'>
                                   @foreach($errors->all() as $err)
                                       {{$err}}<br>
                                   @endforeach
                               </div>
                           @endif
                           @if(Session::has('success'))
                               <div class='login-failed alert-success'>
                                   {{Session::get('success')}}
                               </div>
                           @endif
                           <div class="username">
                               <label for="username"><i class="fa fa-user"></i></label>
                               <input type="text" placeholder="Tên của bạn" name="fullname" id="fullname">
                           </div>
                           <div class="email">
                               <label for="email"><i class="fa fa-envelope"></i></label>
                               <input type="email" placeholder="Email" name="email" id="email">
                           </div>
                           <div class="password">
                               <label for="password"><i class="fa fa-lock"></i></label>
                               <input type="password" placeholder="Mật khẩu" name="password" id="password">
                           </div>
                           <div class="password">
                               <label for="password"><i class="fa fa-lock"></i></label>
                               <input type="password" placeholder="Nhập lại mật khẩu" name="repassword" id="repassword">
                           </div>
                           <input type="submit" value="Đăng kí">
                       </form>
                   </div>
                   <div class="col-sm-6 register-img">
                       <img src="{{asset('images/frontend_image/register/signup-image.jpg')}}" alt="">
                   </div>
               </div>

               
           </div>
           <div class="col-md-2"> </div>
           
       </div>
   </div>
@endsection()