@extends('layouts/app')

@section('content')
	<h1>Create a new Project</h1>

	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<div class="card">
		<div class="card-body">
			<form method="POST" action="{{ route('projects.store') }}">
				@csrf

				<div class="mb-3">
					<label for="title" class="form-label">Title</label>
					<input type="text" class="form-control" id="title" name="title" required>
				</div>

				<button type="submit" class="btn btn-success">Create</button>
			</form>
		</div>
	</div>

	<div class="mt-4">
		<a href="{{ route('projects.index') }}" class="btn btn-secondary">&laquo; Back</a>
	</div>
@endsection
