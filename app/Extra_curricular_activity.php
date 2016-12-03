<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use Illuminate\Database\Eloquent\SoftDeletes;

class Extra_curricular_activity extends Model {

    /*================================================
	protected $table = 'extra_curricular_activities';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
    =================================================*/

    //attributes

    public $timestamps = true;

    private $activity_id;
    private $type;
    private $sp_id;
    private $comp_id;
    private $clb_id;
    private $defined_effort;

    //other attributes

    private $students; // students doing this activity
    private $supervisors; // supervisors related to the activity
    private $achivements; // achievemnts of this activity

    // set attributes

    public function setID($activity_id){
        $this->activity_id = $activity_id;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function setSportID($sp_id){
        $this->sp_id = $sp_id;
    }

    public function setCompetitionID($comp_id)
    {
        $this->comp_id = $comp_id;
    }

    public function setClubID($clb_id)
    {
        $this->clb_id = $clb_id;
    }

    public function setDefinedEffort($defined_effort)
    {
        $this->defined_effort = $defined_effort;
    }

    // get attributes

    public function getID(){
        return $this->activity_id;
    }

    public function getType(){
        return $this->type;
    }

    public function getSportID(){
        return $this->sp_id;
    }

    public function getCompetitionID()
    {
        return $this->comp_id;
    }

    public function getClubID()
    {
        return $this->clb_id;
    }

    public function getDefinedEffort()
    {
        return $this->defined_effort;
    }

    // other models
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