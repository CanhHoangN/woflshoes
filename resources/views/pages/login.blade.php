@extends('layouts.frontLayouts.master')
@section('content')
<div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="{{route('index')}}">Home</a>
                   </li>
                   <li>
                       Login
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->

    @include('layouts.frontLayouts.leftmenu')
               
        </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9 login"><!-- col-md-9 Begin -->
            <div class="row">
                <div class="col-sm-6 img-login">
                    <img class="img-responsive" src="{{asset('images/frontend_image/login/signin-image.jpg')}}" alt="">
                </div>
                <div class="col-sm-6">
                    <form method="post" action="{!! url('login') !!}">
                        @csrf
                        <h2 id="signup">Sign Up</h2>
                        @if(Session::has('flag'))
                            <div class="alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                        @endif
                        <div class="email">
                            <label for="email"><i class="fa fa-envelope"></i></label>
                            <input type="email" placeholder="Your Email" name="email" id="email" required>
                        </div>
                        <div class="password">
                            <label for="password"><i class="fa fa-lock"></i></label>
                            <input type="password" placeholder="Password" name="password" id="password" required>
                        </div>
                        <div class="remember">
                            <input type="checkbox" name="remember" id="remember"><label for="remember"><span>Remember me</span></label>
                        </div>
                        <input type="submit" value="Login">

                    </form>
                </div>
            </div>


           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
@endsection