<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model{

    //====================================================
    //use SoftDeletes;

	//protected $table = 'students';
	//public $timestamps = true;

	//protected $dates = ['deleted_at'];
	//protected $guarded = array('student_id');
    //====================================================

    //attributes

    private $student_id;
    private $first_name;
    private $last_name;
    private $batch_id;

    //other attributes

    private $activities; // activities done by a paticular student
    //private $achivements; // achievemnts of a paticular student

    // set attributes

    public function setID($student_id){
        $this->student_id = $student_id;
    }

    public function setFirstName($first_name){
        $this->first_name = $first_name;
    }

    public function setLastName($last_name){
        $this->last_name = $last_name;
    }

    public function setBatchID($batch_id)
    {
        $this->batch_id = $batch_id;
    }

    public function setActivities($activities)
    {
        $this->activities=$activities;
    }

    // get attributes

    public function getName(){
        return $this->first_name." ".$this->last_name;
    }

	public function getID()
	{
		return $this->student_id;
	}

    public function getBatchID()
    {
        return $this->batch_id;
    }

    public function getActivities()
    {
        return $this->activities;
    }

    // other models

    /*public function getActivities($id)
    {
        return $this->hasMany('App\Student_activity')->first()->act_id;
    }*/

	public function getLogin()
	{
		return $this->hasOne('Student_login');
	}

	public function getAchievement()
	{
		return $this->hasMany('Achievements');
	}

}