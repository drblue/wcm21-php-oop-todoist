<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
	public function index() {
		$todos = [
			'Learn PHP',
			'Learn Laravel',
			'Profit 💰',
		];

		return view('todos/index', [
			'todos' => $todos
		]);
	}
}
