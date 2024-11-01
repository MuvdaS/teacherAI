<!doctype hmtl>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	      content="width=device-width, user-scalabe=no, initial-scale=1.0, maximun-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

	<title>{{ $title }}</title>

	@vite(['resources/sass/app.scss','resources/js/app.js'])

</head>
<body class="{{ $backgroundClass ?? '' }}" style="display: grid; grid-template-columns: auto 1fr;">

	<x-sidebar></x-sidebar>

	

	<div class="container">
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		{{ $slot }}
	</div>
</body>
</html>