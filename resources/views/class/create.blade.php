@extends('admin.layout')

@section('title', 'Crear una Clase')

@section('content')
	<form action="{{ route('class.store') }}" method="POST">
		@csrf

      	<div class="boxInput">
			<label for="name" class="messageInput">
				Nombre de la clase
				<span class="messageInput__required">*</span>
			</label>
			<input type="text" 
				   name="name"
				   id="name"
				   required>
		</div>
		<div class="boxInput">
			<label for="description" class="messageInput">
				Descripción de la clase
				<span class="messageInput__required">*</span>
			</label>
			<textarea name="description" 
					  id="description"
					  rows="4"
					  cols="50">
			</textarea>
		</div>
		<div class="boxInput">
			<label for="class_day" class="messageInput">
				Día de la Clase
				<span class="messageInput__required">*</span>
			</label>
			<input type="date" 
				   name="class_day"
				   id="class_day"
				   required>
		</div>
		<div class="boxInput">
			<label for="start_time" class="messageInput">
				Hora de Inicio
				<span class="messageInput__required">*</span>
			</label>
			<input type="time" 
				   name="start_time"
				   id="start_time"
				   required>
		</div>
		<div class="boxInput">
			<label for="end_time" class="messageInput">
				Hora que termina la clase
				<span class="messageInput__required">*</span>
			</label>
			<input type="time" 
				   name="end_time"
				   id="end_time"
				   required>
		</div>

		<button>Crear Clase</button>
	</form>
@endsection