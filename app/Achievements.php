<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Achievements extends Model {

	protected $table = 'achievements';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function getActivity()
	{
		return $this->hasMany('Extra_curricular_activity', 'act_id');
	}

	public function getStudent()
	{
		return $this->belongsTo('Student', 'stu_id');
	}

}