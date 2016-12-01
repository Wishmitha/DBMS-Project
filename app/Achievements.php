<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use Illuminate\Database\Eloquent\SoftDeletes;

class Achievements extends Model {

    /*================================
	protected $table = 'achievements';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
    ==================================*/

    // attributes

    private $ach_id;
    private $act_id;
    private $stu_id;
    private $position;
    private $description;

    // set attributes

    public function setID($ach_id){
        $this->ach_id = $ach_id;
    }

    public function setActivityID($act_id){
        $this->act_id = $act_id;
    }

    public function setStudentID($stu_id){
        $this->stu_id = $stu_id;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    // get attributes

    public function getID(){
        return $this->ach_id;
    }

    public function getActivityID(){
        return $this->act_id;
    }

    public function getStudentID(){
        return $this->stu_id;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getDescription()
    {
        return $this->description;
    }

    // other models

	public function getActivity()
	{
		return $this->hasMany('Extra_curricular_activity', 'act_id');
	}

	public function getStudent()
	{
		return $this->belongsTo('Student', 'stu_id');
	}

}