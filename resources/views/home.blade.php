@extends('layouts/app')

@section('content')
	<h1>Welcome to Todoist</h1>

	<p>The ultimate place for all your todos! Add adding your todos to this todo site as a todo.</p>

	<a href="{{ route('projects.index') }}" class="btn btn-primary">View projects &raquo;</a>
@endsection
