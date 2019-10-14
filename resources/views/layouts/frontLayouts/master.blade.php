<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wolf Store</title>
    <link rel="stylesheet" href="{{asset('css/frontend_css/bootstrap-337.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('fonts/frontend_fonts/font-awsome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend_css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<!--Header-part-->
@include('layouts.frontLayouts.header')
<!--Content-part-->
@yield('content')
<!--Footer-part-->
@include('layouts.frontLayouts.footer')

<script src="{{asset('js/frontend_js/jquery-331.min.js')}}"></script>
<script src="{{asset('js/frontend_js/bootstrap-337.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>


</body>
</html>