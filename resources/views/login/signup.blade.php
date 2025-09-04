@extends('login.layout')

@section('title', 'Registro de Participante')

@section('content')
	<form action="{{ route('login.createUser') }}" method="POST" class="formCentered">
		@csrf
		<h1 class="titleCenter">Ingresa los datos</h1>

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

				<div class="boxInput">
					<label for="first_name" class="messageInput">
						Primer Nombre
						<span class="messageInput__required">*</span>
					</label>
					<input type="text" 
						   name="first_name"
						   id="first_name" 
						   required
						   class="input">
				</div>
				
				<div class="boxInput">
					<label for="second_name" class="messageInput">
						Segundo Nombre
					</label>
					<input type="text" 
						   name="second_name" 
						   id="second_name"
						   class="input">
				</div>

				<div class="boxInput">
					<label for="first_lastname" class="messageInput">
						Primer Apellido
						<span class="messageInput__required">*</span>
					</label>
					<input type="text" 
						   name="first_lastname" 
						   id="first_lastname" 
						   required
						   class="input">
				</div>

				<div class="boxInput">
					<label for="second_lastname" class="messageInput">
						Segundo Apellido
					</label>
					<input type="text" 
						   name="second_lastname" 
						   id="second_name"
						   class="input">
				</div>

				<div class="boxInput">
					<label for="gender" class="messageInput">
						Género
						<span class="messageInput__required">*</span>
					</label>
					<select name="gender" id="gender" class="input">
						<option value="Femenino" selected>Femenino</option>
						<option value="Masculino">Masculino</option>
					</select>
				</div>

				<div class="boxInput">
					<label for="birthdate" class="messageInput">
						Fecha de Nacimiento
						<span class="messageInput__required">*</span>
					</label>
					<input type="date" 
						   name="birthdate" 
						   id="birthdate" 
						   required
						   class="input">
				</div>

				<div class="boxInput">
					<label for="organization" class="messageInput">
						Organización
						<span class="messageInput__required">*</span>
					</label>
					<input type="text" 
						   name="organization" 
						   id="organization" 
						   required
						   class="input">
				</div>

				<div class="boxInput">
					<label for="job_title" class="messageInput">
						Cargo
						<span class="messageInput__required">*</span>
					</label>
					<input type="text" 
						   name="job_title" 
						   id="job_title" 
						   required
						   class="input">
				</div>

				<div class="boxInput">
					<label for="email" class="messageInput">
						Correo Electrónico
						<span class="messageInput__required">*</span>
					</label>
					<input type="email" 
						   name="email" 
						   id="email" 
						   required
						   class="input">
				</div>

				<div class="boxInput">
					<label for="phone" class="messageInput">
						Número de Teléfono
						<span class="messageInput__required">*</span>
					</label>
					<input type="text" 
						   name="phone" 
						   id="phone"
						   minlength="11"
						   maxlength="11" 
						   required
						   class="input">
				</div>
				<button class="buttonSend">Enviar Datos</button>
			</div>
			<div class="boxWallSignup">
				
			</div>
		</div>
	</form>
@endsection