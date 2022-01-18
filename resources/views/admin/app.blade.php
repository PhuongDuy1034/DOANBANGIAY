<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="{{ asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('backend/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{ asset('backend/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{ asset('backend/css/styles.css')}}" rel="stylesheet">

	<title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/fonts/fontawesome-webfont.eot') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/fonts/fontawesome-webfont.svg') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/fonts/fontawesome-webfont.ttf') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/fonts/fontawesome-webfont.woff') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/fonts/fontawesome-webfont.woff2') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/fonts/FontAwesome.otf') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/fonts/glyphicons-halflings-regular.eot') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/fonts/glyphicons-halflings-regular.ttf') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/fonts/glyphicons-halflings-regular.woff2') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/fonts/glyphicons-halflings-regular.woff') }}"/>
</head>
<body>
@include('admin.partials.header')
@include('admin.partials.sidebar')
<main >
    <div class="container">

        @yield('content')
            </div>



</main>
<script src="{{ asset('backend/js/jquery-1.11.1.min.js')}} "></script>
<script src="{{ asset('backend/js/bootstrap.min.js')}} "></script>
<script src="{{ asset('backend/js/chart.min.js')}} "></script>
<script src="{{ asset('backend/js/chart-data.js')}} "></script>
<script src="{{ asset('backend/js/easypiechart.js')}} "></script>
<script src="{{ asset('backend/js/easypiechart-data.js')}} "></script>
<script src="{{ asset('backend/js/bootstrap-datepicker.js')}} "></script>
<script src="{{ asset('backend/js/custom.js')}} "></script>


</body>
</html>
