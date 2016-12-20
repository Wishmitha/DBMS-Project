<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student_activity extends Model {

	/*protected $table = 'student_activity';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];*/

	//attributes

    public $timestamps = true;

    private $id;
    private $role;
    private $actual_effort;
    private $defined_effort;
    private $joined_date;
    private $is_verified;
    private $student_description;
    private $activity;
    private $logo;
    private $div;
    private $description;

    private $achievements=[];

    // set attributes

    public function setID($id)
    {
        $this->id=$id;
    }

    public function setRole($role)
    {
        $this->role=$role;
    }

    public function setActualEffort($actual_effort)
    {
        $this->actual_effort=$actual_effort;
    }

    public function setDefinedEffort($defined_effort)
    {
        $this->defined_effort=$defined_effort;
    }

    public function setJoinedDate($joined_date)
    {
        $this->joined_date = $joined_date;
    }

    public function setVerification($is_verified)
    {
        $this->is_verified=$is_verified;
    }

    public function setStudentDescription($description)
    {
        $this->student_description=$description;
    }

    public function setActivity($activity)
    {
        $this->activity=$activity;
    }

    public function setLogo($logo)
    {
        $this->logo=$logo;
    }

    public function setDiv($div)
    {
        $this->div=$div;
    }

    public function setDescription($description)
    {
        $this->description=$description;
    }

    public function setAchievements($achievements)
    {
        for($i=0;$i<count($achievements);$i++){
            $achievement = new Achievements();
            $achievement->setPosition($achievements[$i][0]);
            $achievement->setDescription($achievements[$i][1]);
            $achievement->setDate($achievements[$i][2]);

            array_push($this->achievements,$achievement);
        }

    }

    //get attributes

    public function getID()
    {
        return $this->id;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getActualEffort()
    {
        return $this->actual_effort;
    }

    public function getDefinedEffort()
    {
        return $this->defined_effort;
    }

    public function getJoinedDate()
    {
        return $this->joined_date;
    }

    public function getVerification()
    {
        return $this->is_verified;
    }

    public function getStudentDescription()
    {
        return $this->student_description;
    }

    public function getActivity()
    {
        return $this->activity;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function getDiv()
    {
        return $this->div;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAchievements()
    {
        return $this->achievements;

    }




    // other models
	public function getStudent()
	{
		return $this->belongsTo('Student', 'stu_id');
	}

	/*public function getActivity()
	{
		return $this->belongsTo('Extra_curricular_activity', 'act_id');
	}*/

}