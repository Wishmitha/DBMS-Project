<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supervisor extends Model {

	/*protected $table = 'supervisors';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];*/

	//attributes

    private $supervisor_id;
    private $first_name;
    private $last_name;
    private $field;

    // other attributes

    private $login;
    private $activities =[];

    // set attributes

    public function setID($supervisor_id)
    {
        $this->supervisor_id = $supervisor_id;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function setField($field)
    {
        $this->field=$field;
    }

    public function setActivities($activities)
    {


    }

    public function setLogin($loginDat)
    {


    }

    // get attributes

    public function getID()
    {
        return $this->supervisor_id;
    }

    public function getName()
    {
        return $this->first_name." ".$this->last_name;
    }

    public function getField()
    {
        return $this->field;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getActivities()
    {
        return $this->activities;
    }


	/*public function getLogin()
	{
		return $this->hasOne('Supervisor_login');
	}

	public function getActivity()
	{
		return $this->hasMany('Supervisor_activity');
	}*/

}