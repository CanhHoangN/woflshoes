@extends('layouts.frontLayouts.master')
@section('content')
<div id="content">
       <div class="container">
           <div class="col-md-12">
               
               <ul class="breadcrumb">
                   <li>
                       <a href="{{route('index')}}">Home</a>
                   </li>
                   <li>
                       Checkout
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
                           
                           <h2> Checkout </h2>
                           
                       </center>

                       <form action="{!! url('checkout') !!}" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       	<input type= "hidden" name= "_token" value= "{!! csrf_token() !!}" />
                       		@if(count($errors)>0)
                       			<div class='alert alert-danger'>
                       				@foreach($errors->all() as $err)
                       				{{$err}}
                       				@endforeach
                       			</div>
                       		@endif
                           @if(Session::has('success'))
                           		<div class='alert alert-success'>
                           			{{Session::get('success')}}
                           		</div>
                           @endif
                           <div class="form-group">
                               
                               <label>CustomerID</label>
                               
                               <input type="text" class="form-control" name="text" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>OrderID</label>
                               
                               <input type="text" class="form-control" name="text" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>ProductID</label>
                               
                               <input type="password" class="form-control" name="password" required>
                               
                           </div>

                           
                           <div class="text-center">
                               
                               <button type="submit" name="register" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> OK.
                               
                               </button>
                               
                           </div>
                           
                       </form>
                       
                   </div>
                   
               </div>
               
           </div>
           
       </div>
   </div>
@endsection()