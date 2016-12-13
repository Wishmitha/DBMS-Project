<?php

namespace App;

use App\DAO\StudentDAO;
use App\DAO\SupervisorDAO;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model {

    /*protected $table = 'supervisors';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];*/

    //attributes

    private $admin_id;
    private $first_name;
    private $last_name;
    // other attributes

    private $login;
    private $students = [];
    private $supervisors = [];
    private $activities = [];

    // set attributes

    public function setID($admin_id)
    {
        $this->admin_id=$admin_id;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function setLogin($loginDat)
    {
        $this->login = $loginDat;
    }

    public function setStudents($students)
    {
        for($i=0;$i<count($students);$i++){

            $studentDAO = new StudentDAO();
            $student = $studentDAO->create($students[$i]->student_id);

            array_push($this->students,$student);
        }
    }

    public function setSupervisors($supervisors)
    {
        for($i=0;$i<count($supervisors);$i++){

            $supervisorDAO = new SupervisorDAO();
            $supervisor = $supervisorDAO->create($supervisors[$i]->supervisor_id);

            array_push($this->supervisors,$supervisor);
        }
    }

    public function setActivities($activities)
    {
        $this->activities=$activities;
    }

    // get attributes

    public function getID()
    {
        return $this->admin_id;
    }

    public function getName()
    {
        return $this->first_name." ".$this->last_name;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function getSupervisors()
    {
        return $this->supervisors;
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