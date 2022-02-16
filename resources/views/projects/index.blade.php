@extends('layouts/app')

@section('content')
	<h1>Projects</h1>

	@if(count($projects) > 0)
		<table class="table table-striped table-hover table-responsive">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Todos</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($projects as $project)
					<tr>
						<td>{{ $project->id }}</td>
						<td>{{ $project->title }}</td>
						<td>TBD</td>
						<td>
							<a href="/projects/{{ $project->id }}" class="btn btn-primary btn-sm">
								View
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p>No projects found, maybe create one?</p>
	@endif
@endsection
