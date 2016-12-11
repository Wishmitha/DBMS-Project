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
        for($i=0;$i<count($activities);$i++){

            $activity = new Supervisor_activity();

            $activity->setActivity($activities[$i][0]);
            $activity->setLogo($activities[$i][1]);
            $activity->setDiv($activities[$i][2]);
            $activity->setDescription($activities[$i][3]);
            $activity->setStudents($activities[$i][4]);

            array_push($this->activities,$activity);
        }

    }

    public function setLogin($loginDat)
    {
        $login = new Supervisor_login();

        $login->setUsername($loginDat[0]->username);
        $login->setPassword($loginDat[0]->password);
        $login->setCreateDate($loginDat[0]->created_at);
        $login->setUpdateDate($loginDat[0]->updated_at);

        $this->login=$login;

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