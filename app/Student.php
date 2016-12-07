<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model{

    //====================================================
    //use SoftDeletes;

	//protected $table = 'students';
	//protected $dates = ['deleted_at'];
	//protected $guarded = array('student_id');
    //====================================================

    //attributes

    public $timestamps = true;

    private $student_id;
    private $first_name;
    private $last_name;
    private $batch_id;

    //other attributes

    private $login;
    private $activities = []; // activities done by a paticular student
    //private $achivements; // achievemnts of a paticular student

    // set attributes

    public function setID($student_id)
    {
        $this->student_id = $student_id;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function setBatchID($batch_id)
    {
        $this->batch_id = $batch_id;
    }

    public function setActivities($activities)
    {
        for($i=0;$i<count($activities);$i++){
            $activity = new Student_activity();

            $activity->setRole($activities[$i][0]);
            $activity->setActualEffort($activities[$i][1]);
            $activity->setDefinedEffort($activities[$i][2]);
            $activity->setJoinedDate($activities[$i][3]);
            $activity->setVerification($activities[$i][4]);
            $activity->setActivity($activities[$i][5]);
            $activity->setLogo($activities[$i][6]);
            $activity->setDiv($activities[$i][7]);
            $activity->setDescription($activities[$i][8]);
            $activity->setAchievements($activities[$i][9]);

            array_push($this->activities,$activity);
        }

    }

    public function setLogin($login){

    }

    // get attributes

    public function getName()
    {
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

    public function getLogin(){
        return $this->login;
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

	/*public function getLogin()
	{
		return $this->hasOne('Student_login');
	}*/

	public function getAchievement()
	{
		return $this->hasMany('Achievements');
	}

}