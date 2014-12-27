@extends('layout.master')

@section('content')
<div class="row">
	<div class="small-12 medium-8 large-6 columns">
		<br><br>
		
		@if($dato)
			
			<table>
				<th>Nombre</th>
				<th>Email</th>
			@foreach ($dato as $d)
				<tr>
					<td>{{ $d->nombre }}</td>
					<td>{{ $d->email }}</td>
				</tr>
			@endforeach
			</table>
			

		@else
			<p>No hay dato</p>
		@endif	

		<a href="{{ URL::route('teach') }}">ver</a>	
	</div>
			
</div>


@stop