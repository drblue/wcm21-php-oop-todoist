@extends('layouts/app')

@section('content')
	<h1>Edit project: {{ $project->title }}</h1>

	@include('partials/validation_errors')

	<div class="card">
		<div class="card-body">
			<form method="POST" action="{{ route('projects.update', ['project' => $project]) }}">
				@csrf
				@method('PUT')

				<div class="mb-3">
					<label for="title" class="form-label">Title</label>
					<input
						type="text"
						class="form-control"
						id="title"
						name="title"
						value="{{ old('title') ?: $project->title }}"
						required
					/>
				</div>

				<button type="submit" class="btn btn-success">Save</button>
			</form>
		</div>
	</div>

	<div class="mt-4">
		<a href="{{ route('projects.show', ['project' => $project]) }}" class="btn btn-secondary">&laquo; Back</a>
	</div>
@endsection
