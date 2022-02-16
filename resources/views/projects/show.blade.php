@extends('layouts/app')

@section('content')
	<h1>{{ $project->title }}</h1>

	<!-- show this project's todos -->
	@if(count($project->todos) > 0)
		<table class="table table-striped table-hover table-responsive">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Completed</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($project->todos as $todo)
					<tr>
						<td>{{ $todo->id }}</td>
						<td>{{ $todo->title }}</td>
						<td>
							@if($todo->completed)
								🥳
							@else
								🥵
							@endif
						</td>
						<td>
							<a href="/projects/{{ $project->id }}/todos/{{ $todo->id }}" class="btn btn-primary btn-sm">
								View
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p>No todos left! 🥳</p>
	@endif
	<!-- end show this project's todos -->

	<div class="mt-4">
		<a href="{{ route('projects.index') }}" class="btn btn-secondary">&laquo; Back</a>
	</div>
@endsection
