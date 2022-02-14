<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
	public function index() {
		$todos = Todo::all();
		// ddd($todos);   // Dump, Debug and Die

		return view('todos/index', [
			'todos' => $todos
		]);
	}
}
