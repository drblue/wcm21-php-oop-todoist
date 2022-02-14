@extends('layouts/app')

@section('content')
	<h1>{{ $todo->title }}</h1>

	@if($todo->description)
		<h2 class="h4">Description</h2>
		<p>{{ $todo->description }}</p>
	@endif

	<h2 class="h4">Status</h2>
	@if($todo->completed)
		<p>Completed</p>
	@else
		<p>Incomplete</p>
	@endif

	<div class="mt-4">
		<a href="{{ route('todos.index') }}" class="btn btn-secondary">&laquo; Back</a>
	</div>
@endsection
