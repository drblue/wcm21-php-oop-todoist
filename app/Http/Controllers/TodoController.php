<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
	public function index() {
		$todos = Todo::all();
		// ddd($todos);   // Dump, Debug and Die

		return view('todos/index', [
			'todos' => $todos
		]);
	}

	public function show(Project $project, Todo $todo) {
		return view('todos/show', [
			'project' => $project,
			'todo' => $todo
		]);
	}
}
