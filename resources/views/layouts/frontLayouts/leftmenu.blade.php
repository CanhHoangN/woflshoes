<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
    <div class="panel-heading"><!-- panel-heading Begin -->
        <h3 class="panel-title">Categories</h3>
    </div><!-- panel-heading Finish -->

    <div class="panel-body"><!-- panel-body Begin -->
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->
            @foreach($sp as $a)
                <li><a href="{{route('categories',$a['productLineID'])}}">{{$a['productLineName']}}</a></li>

            @endforeach
        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
    </div><!-- panel-body Finish -->

</div><!-- panel panel-default sidebar-menu Finish -->

<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
    <div class="panel-heading"><!-- panel-heading Begin -->
        <h3 class="panel-title">Price</h3>
    </div><!-- panel-heading Finish -->

    <div class="panel-body"><!-- panel-body Begin -->
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->   
            <li><a href="{{route('price',1)}}">< 500.000VND</a></li>
            <li><a href="{{route('price',2)}}">500.000VND -> 1.000.000VND</a></li>
            <li><a href="{{route('price',3)}}">1.000.000VND -> 2.000.000VND</a></li>
            <li><a href="{{route('price',4)}}">2.000.000VND -> 3.000.000VND</a></li>
            <li><a href="{{route('price',5)}}">> 3.000.000VND</a></li>
        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
    </div><!-- panel-body Finish -->

</div><!-- panel panel-default sidebar-menu Finish -->