@extends('layout.master')

@section('content')
<div class="row">
	<div class="small-12 medium-8 large-6 columns">
		{{ Form::open(array('route' => 'profesor.store', 'method' => 'POST')) }}

		<fieldset>
	    <legend>Profesor</legend>
	    
	    {{ Form::label('nombre_label', 'nombre') }}
	    {{ Form::text('nombre') }}

	    {{ Form::label('email_label', 'email') }}
	    {{ Form::text('email') }}
		
		{{ Form::submit('Enviar', array('class' => 'button small')) }}
		
		</fieldset>

		{{ Form::close() }}
		
		@if ($errors->any())
			@foreach ($errors->all() as $error)
				<span class="[success alert secondary] label">{{ $error }}</span>
			@endforeach	
		@endif
				
	</div>
</div>


@stop