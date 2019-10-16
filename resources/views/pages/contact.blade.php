@extends('layouts.frontLayouts.master')
@section('content')
<div id="content">
       <div class="container">
           <div class="col-md-12">
               
               <ul class="breadcrumb">
                   <li>
                       <a href={{url('/')}}>Home</a>
                   </li>
                   <li>
                       Contact Us
                   </li>
               </ul>
               
           </div>
           
           <div class="col-md-3">
    		@include('layouts.frontLayouts.leftmenu')
               
           </div>
           
           <div class="col-md-9">
               
               <div class="box">
                   
                   <div class="box-header">
                       
                       <center>
                           
                           <img src="{{asset('images/frontend_image/logo/logo1.png')}}" alt="wolfshop Logo" class="hidden-xs">
                           
                           <p class="text-muted">
                               
                               Nếu bạn có bất kì câu hỏi nào !
                               
                           </p>
                           
                       </center>
                       
                       <form id="contact" action="{!! url('contact') !!}" method="post">
                          <input type= "hidden" name= "_token" value= "{!! csrf_token() !!}" />
                          <fieldset>
                            <input name= "name" class="form-control" placeholder="Tên của bạn" type="text" tabindex="1" required autofocus>
                          </fieldset>

                          <br>

                          <fieldset>
                            <input name= "email" class="form-control" placeholder="Email của bạn" type="email" tabindex="2" required>
                          </fieldset>

                          <br>

                          <fieldset>
                            <textarea name= "subject" class="form-control" placeholder="Nội dung...." tabindex="5" required></textarea>
                          </fieldset>

                          <br>

                          <div class="text-center">
                            <fieldset>
                              <button name="submit" class="btn btn-primary" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                            </fieldset>
                          </div>
                        </form>
                         
                   </div>
                   
               </div>
               
           </div>
           
       </div>
   </div>
   @endsection()