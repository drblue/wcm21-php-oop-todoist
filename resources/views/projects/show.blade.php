@extends('layouts/app')

@section('content')
	<h1>{{ $project->title }}</h1>

	<div class="mt-4">
		<a href="{{ route('projects.index') }}" class="btn btn-secondary">&laquo; Back</a>
	</div>
@endsection
