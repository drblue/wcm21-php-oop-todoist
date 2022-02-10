<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('/hej', function () {
	$hipsum = "I'm baby retro la croix godard pork belly DIY truffaut kickstarter. Knausgaard kinfolk lo-fi taxidermy chambray cray try-hard freegan actually fashion axe tumblr XOXO. Bespoke PBR&B mixtape shabby chic skateboard offal. DIY everyday carry taxidermy iceland master cleanse, tumblr sriracha cornhole pitchfork twee. Cornhole chartreuse kombucha pop-up ethical meggings ramps, poutine kickstarter normcore chambray irony 8-bit bespoke gochujang.";

	return view('hej', [
		'title' => 'Hipstah heading',	// $title
		'content' => $hipsum,			// $content
		'todos' => [
			'Learn PHP',
			'Learn Laravel',
			'Take over the world',
		],
	]);
});

Route::get('/todos', [App\Http\Controllers\TodosController::class, 'index']);
