@extends('layouts/app')

@section('content')
	<h1>Todos</h1>

	<p>Warning! Here be todos!</p>

	@if(count($todos) > 0)
		<ol>
			@foreach($todos as $todo)
				<li>
					{{ $todo->title }}
					@if($todo->completed)
						🥳
					@endif
				</li>
			@endforeach
		</ol>
	@else
		<p>No todos left! 🥳</p>
	@endif
@endsection
