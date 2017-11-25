<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- csrf token -->
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>@yield('title','LaraBBS')-Laravel进阶教程</title>
	<!-- styles -->
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>

<body>
	<div id="app" class="{{route_class()}}-page">
		@include('layouts._header')
		<div class="container">
			@include('layouts._message')
			@yield('content')
		</div>
        @include('layouts._footer')
	</div>
    <!-- script-->
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>