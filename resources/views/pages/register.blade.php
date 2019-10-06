@extends('layouts.frontLayouts.master')
@section('content')
<div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="{{url('/')}}">Home</a>
                   </li>
                   <li>
                       Register
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           <div class="col-md-2"> </div>
           <div class="col-md-8">
               <div class="row register">
                   <div class="col-sm-6 register-form">
                       <h2 id="signup-register">Sign Up</h2>
                       <form action="">
                           @csrf
                           <div class="username">
                               <label for="username"><i class="fa fa-envelope"></i></label>
                               <input type="text" placeholder="Your Name" name="fullname" id="fullname">
                           </div>
                           <div class="email">
                               <label for="email"><i class="fa fa-envelope"></i></label>
                               <input type="email" placeholder="Your Email" name="email" id="email">
                           </div>
                           <div class="password">
                               <label for="password"><i class="fa fa-lock"></i></label>
                               <input type="password" placeholder="Password" name="password" id="password">
                           </div>
                           <div class="password">
                               <label for="password"><i class="fa fa-lock"></i></label>
                               <input type="password" placeholder="Re-password" name="repassword" id="repassword">
                           </div>
                           <input type="submit" value="Register">
                       </form>
                   </div>
                   <div class="col-sm-6 register-img">
                       <img src="{{asset('images/frontend_image/register/signup-image.jpg')}}" alt="">
                   </div>
               </div>

               
           </div><!-- col-md-8 Finish -->
           <div class="col-md-2"> </div>
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
@endsection()