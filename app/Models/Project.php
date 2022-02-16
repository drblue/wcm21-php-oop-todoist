<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title'];

	/**
	 * Get all todos for this project.
	 */
	public function todos() {
		return $this->hasMany(Todo::class);
	}
}
