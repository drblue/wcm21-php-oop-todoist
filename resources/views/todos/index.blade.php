@extends('layouts/app')

@section('content')
	<h1>Todos</h1>

	@if(count($todos) > 0)
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
				@foreach($todos as $todo)
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
							<a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm">
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
@endsection
