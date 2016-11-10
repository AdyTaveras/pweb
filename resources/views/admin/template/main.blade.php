<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script src="{{asset('plugins/jquery/jquery-1.12.0.js')}}"></script>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap-3.3.7-dist/css/bootstrap.css') }}">    
    <script src="{{ asset('plugins/bootstrap-3.3.7-dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/requests.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert/dist/sweetalert.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/sweetalert/dist/sweetalert.css') }}">    
	<title>@yield('title', 'Default')</title>
    @yield('scripts')
</head>
<body>
    @include('admin.partials.nav')

    <div class="container">
	   @yield('content')
	</div>
</body>
</html>