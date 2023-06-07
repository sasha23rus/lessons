<?php

namespace Lib\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $fillable = [
		'name',
		'text'
	];
}
