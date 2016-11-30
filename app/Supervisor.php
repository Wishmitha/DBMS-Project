<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supervisor extends Model {

	protected $table = 'supervisors';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function getLogin()
	{
		return $this->hasOne('Supervisor_login');
	}

	public function getActivity()
	{
		return $this->hasMany('Supervisor_activity');
	}

}