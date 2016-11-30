<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supervisor_activity extends Model {

	protected $table = 'supervisor_activity';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function mapActivity()
	{
		return $this->hasOne('Extra_curricular_activity', 'act_id');
	}

	public function mapSupervisor()
	{
		return $this->belongsTo('Supervisor', 'sup_id');
	}

}