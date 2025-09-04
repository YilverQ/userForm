@extends('login.layout')

@section('title', 'Control de Asistencia')

@section('content')
	<div class="boxCentered">
		<h1 class="titleCenter">Bienvenido al Control de Asistencia</h1>
		<div class="boxCentered__img">
			<img src="{{ asset('img/wall-login.jpg') }}">
		</div>
		<div class="boxCentered__links">
			<a href="{{ route('login.signup') }}" class="boxCentered__button">
				<i class="fi fi-rs-login"></i>
				Registrarse
			</a>
			<a href="{{ route('login.login') }}" class="boxCentered__button">
				<i class="fi fi-rs-user"></i>
				Ingresar
			</a>
		</div>
	</div>
@endsection