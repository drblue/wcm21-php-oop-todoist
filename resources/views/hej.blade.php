@extends('layouts/app')

@section('content')
	<h1>{{ $title }}</h1>

	<p>{{ $content }}</p>

	<hr />

	@if(count($todos) > 0)
		<ul>
			@foreach($todos as $todo)
				<li>{{ $todo }}</li>
			@endforeach
		</ul>
	@else
		<em>Yay, no todos 4 u! 🥳</em>
	@endif
@endsection
