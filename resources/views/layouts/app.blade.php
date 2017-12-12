<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- csrf token -->
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>@yield('title','LaraBBS')-{{setting('site_name','Laravel进阶教程')}}</title>
	<meta name="description" content="@yield('description',setting('seo_description', 'LaraBBS 爱好者社区。'))" />
	<meta name="description" content="@yield('keyword', setting('seo_keyword', 'LaraBBS,社区,论坛,开发者论坛'))" />	
	<!-- styles -->
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
	@yield('styles')
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
	{{--  sudo-su用户切换工具  --}}
	@if (app()->isLocal())
        @include('sudosu::user-selector')
    @endif
    <!-- script-->
    <script src="{{asset('js/app.js')}}"></script>
	@yield('scripts')
</body>

</html>