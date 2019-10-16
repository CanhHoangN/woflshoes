<div class="container" id="slider">
       
       <div class="col-md-12">
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel">
               
               <ol class="carousel-indicators">
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol>
               
               <div class="carousel-inner">
                   
                   <div class="item active">

                       <a href="{{route('detail',9)}}"><img src="{{asset('images/frontend_image/slide/slide1.jpg')}}" alt="Slider Image 1"></a>
                       
                   </div>
                   
                   <div class="item">

                       <a href="{{route('detail',1)}}"><img src="{{asset('images/frontend_image/slide/slide2.jpg')}}" alt="Slider Image 2"></a>
                       
                   </div>
                   
                   <div class="item">

                       <a href="{{route('detail',8)}}"><img src="{{asset('images/frontend_image/slide/slide3.jpg')}}"></a>
                       
                   </div>                   
               </div>
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a>
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a>
               
           </div>
           
       </div>
       
   </div>
   