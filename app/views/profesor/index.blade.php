@extends('layout.master')

@section('content')
<div class="row">
	<div class="small-12 medium-8 large-6 columns">
		
		<br><br>
		<h1>Index de profesor</h1>
		<ul>
			@foreach($profesores as $profesor)
				<li><a href="profesor/{{ $profesor->id }}"> {{ $profesor->nombre }}</a>, {{ $profesor->email }}</li>

			@endforeach
		</ul>
		
		<fieldset>
	    <legend>Profesor</legend>
	    
		<a href="profesor/create" class="button radius">Login</a>
		<a href="profesor" class="button radius">Profesor</a>
		
		</fieldset>
			
	</div>
</div>


@stop