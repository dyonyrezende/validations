<html>
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>Validations</title>
</head>

<body>
	<div class="container">
		<main role="main">
			@hassection('body')
			@yield('body')
			@endif
		</main>
	</div>
	<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
	
	@hasSection('javascript') 
	@yield('javascript') 
	@endif
	
</body>
	
</html>