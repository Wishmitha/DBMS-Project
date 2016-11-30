<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student_login extends Model {

	protected $table = 'student_login';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $guarded = array('password');
	protected $hidden = array('password');

	public function getStudent()
	{
		return $this->belongsTo('Student', 'stu_id');
	}

}