<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model {

	protected $table = 'students';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $guarded = array('student_id');

	public function getActivity()
	{
		return $this->hasMany('Student_activity');
	}

	public function getLogin()
	{
		return $this->hasOne('Student_login');
	}

	public function getAchievement()
	{
		return $this->hasMany('Achievements');
	}

}