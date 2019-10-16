<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Categories</h3>
    </div>

    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
            @foreach($sp as $a)
                <li><a href="{{route('categories',$a['productLineID'])}}">{{$a['productLineName']}}</a></li>

            @endforeach
        </ul>
    </div>

</div>

<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Price</h3>
    </div>

    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
            <li><a href="{{route('price',1)}}">< 500.000VND</a></li>
            <li><a href="{{route('price',2)}}">500.000VND -> 1.000.000VND</a></li>
            <li><a href="{{route('price',3)}}">1.000.000VND -> 2.000.000VND</a></li>
            <li><a href="{{route('price',4)}}">2.000.000VND -> 3.000.000VND</a></li>
            <li><a href="{{route('price',5)}}">> 3.000.000VND</a></li>
        </ul>
    </div>

</div>