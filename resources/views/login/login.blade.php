@extends('login.layout')

@section('title', 'Ingresa con tu Cédula')

@section('content')
	<form action="{{ route('login.loginCheck') }}" method="POST" class="formCentered">
		@csrf
		<h1 class="titleCenter">Ingresa tu cédula</h1>

		<div class="boxTwo">
			<div class="formInputs">
				<div class="boxInput">
					<label for="identification_card" class="messageInput">
						Número de Cédula
						<span class="messageInput__required">*</span>
					</label>
					<input type="text" 
						   name="identification_card" 
						   id="identification_card"
						   minlength="7"
						   maxlength="8" 
						   required
						   class="input">
				</div>
				
				<button class="buttonSend">Entrar</button>
			</div>
			<div class="boxWallSignup boxWallSignup--imgMody">
				
			</div>
		</div>
	</form>
@endsection