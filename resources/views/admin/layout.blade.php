<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="description" content="Control de Asistencia para Cursos en el CENAMEC">
    <meta name="author" content="Colectivo de Ciencias del CENAMEC">

	<title>@yield('title', 'Registro de Asistencia') - CENAMEC</title>
	<link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/png">
	<link rel="icon" href="{{ asset('img/icon.png') }}" type="image/png">


	{{-- Estilos de la Web --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/config.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">


	{{-- Enlaces de otras fuentes --}}
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=abeezee:400|acme:400|roboto:400,700" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
</head>
<body>
	<header class="header">
		<a href="{{ route('login.index') }}">
			<h2>
				<i class="fi fi-rs-physics"></i>
				CENAMEC
				<i class="fi fi-rs-microscope-bacteria"></i>
			</h2>
		</a>
	</header>

	<div class="content">
		@yield('content')
	</div>

	@include('partials.footer')
</body>
</html>