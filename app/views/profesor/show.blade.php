@extends('layout.master')

@section('content')
<div class="row">
	<div class="small-12 medium-8 large-6 columns">
		
		<br><br>
		<h2>Datos del profesor</h2>  <h4>{{ $profesor->nombre }}:</h4>

		
		<fieldset>
	    <legend>Profesor</legend>
	    	<table>
	    		<tr>
	    			<th>nombre</th>
	    			<th>email</th>
	    		</tr>
	    		<tr>
	    			<td>{{ $profesor->nombre }}</td>
	    			<td>{{ $profesor->email }}</td>
	    		</tr>
	    	</table>
		<a href="#" class="button radius">actualizar</a>
		<a href="#" class="button radius">borrar</a>
		
		</fieldset>
			
	</div>
</div>


@stop