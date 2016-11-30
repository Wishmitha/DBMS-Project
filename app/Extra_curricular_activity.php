<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Extra_curricular_activity extends Model {

	protected $table = 'extra_curricular_activities';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function getStudent()
	{
		return $this->hasMany('Student_activity');
	}

	public function getSupervisor()
	{
		return $this->hasMany('Supervisor_activity');
	}

	public function getClub()
	{
		return $this->hasMany('Club', 'clb_id');
	}

	public function getSport()
	{
		return $this->hasOne('Sport', 'sp_id');
	}

	public function getCompettetion()
	{
		return $this->hasOne('Competition', 'comp_id');
	}

	public function getAchievement()
	{
		return $this->hasMany('Achievements');
	}

}