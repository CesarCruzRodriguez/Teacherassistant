@extends('layout.master')

@section('content')
<div class="row">
	<div class="small-12 medium-8 large-6 columns">
		{{ Form::open(array('url' => 'teachers/comprueba', 'method' => 'POST')) }}

		<fieldset>
	    <legend>Teachers</legend>
	    
	    {{ Form::label('nombre_label', 'nombre') }}
	    {{ Form::text('nombre') }}

	    {{ Form::label('email_label', 'email') }}
	    {{ Form::text('email') }}
		
		{{ Form::submit('Enviar', array('class' => 'button small')) }}
		
		</fieldset>

		{{ Form::close() }}
		
		@if(Session::has('error_message'))
		<span class="[success alert secondary] label">{{ Session::get('error_message') }}</span>
		@endif
				
	</div>
</div>


@stop