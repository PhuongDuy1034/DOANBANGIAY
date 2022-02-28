<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')  {{ config('app.name') }}</title>
    <link href="{{ asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('backend/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{ asset('backend/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{ asset('backend/css/styles.css')}}" rel="stylesheet">
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
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">{{ config('app.name') }}</div>
				<div class="panel-body">
					<form  action="{{ route('admin.login.post') }}" method="POST" role="form">
                    @csrf
                     <fieldset>
							<div class="form-group">
								<input class="form-control" type="email" id="email" name="email" placeholder="Email address" autofocus value="{{ old('email') }}">
							</div>
							<div class="form-group">
								<input class="form-control" type="password" id="password" name="password" placeholder="Password">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
								{{-- <a href="{{ route('admin.register')}}" > Register</a> --}}
							</div>
							<button class="btn btn-primary">Login</button></fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


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
