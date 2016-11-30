<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supervisor_login extends Model {

	protected $table = 'supervisor_login';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function getSupervisor()
	{
		return $this->belongsTo('Supervisor', 'sup_id');
	}

}