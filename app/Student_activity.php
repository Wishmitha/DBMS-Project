<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student_activity extends Model {

	protected $table = 'student_activity';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function getStudent()
	{
		return $this->belongsTo('Student', 'stu_id');
	}

	public function getActivity()
	{
		return $this->belongsTo('Extra_curricular_activity', 'act_id');
	}

}