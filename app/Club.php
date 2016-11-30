<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Club extends Model {

	protected $table = 'clubs';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function getActivity()
	{
		return $this->hasOne('Extra_curricular_activity');
	}

}