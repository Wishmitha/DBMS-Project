<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model{

    //====================================================
    //use SoftDeletes;

	//protected $table = 'students';
	//public $timestamps = true;



	//protected $dates = ['deleted_at'];
	//protected $guarded = array('student_id');
    //====================================================

    private $first_name;
    private $last_name;
    private $batch_id;

    // set attributes

    function _construct(){

    }

    public function setFirstName($first_name){
        this.$first_name = $first_name;
    }

    public function setLastName($last_name){
        this.$last_name = $last_name;
    }

    public function setID()
    {
        return $this->student_id;
    }

    public function setBatchID()
    {
        return $this->batch_id;
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

    // other models

    public function getActivities($id)
    {
        return $this->hasMany('App\Student_activity')->first()->act_id;
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