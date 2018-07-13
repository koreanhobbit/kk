<!DOCTYPE HTML>
<html>
	<head>
		<title>Kios Korea</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('frontend/css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				@yield('nav')
				@yield('flashmessage')
				@yield('section')

				<!-- Footer -->
					@yield('footer')
			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="{{ asset('frontend/js/app.js') }}"></script>
			<script src="{{ asset('frontend/js/browser.min.js') }}"></script>
			<script src="{{ asset('frontend/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('frontend/js/util.js') }}"></script>
			<script src="{{ asset('frontend/js/main.js') }}"></script>
			<script src="{{ asset('frontend/js/accordion.js') }}"></script>
	</body>
</html>
