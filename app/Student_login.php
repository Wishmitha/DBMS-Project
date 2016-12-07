<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student_login extends Model {

    /*========================================
	protected $table = 'student_login';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $guarded = array('password');
	protected $hidden = array('password');
    =========================================*/

    //attributes

    private $username;
    private $password;
    private $created_at;
    private $updated_at;

    // set methods

    public function setUsername($username)
    {
        $this->username=$username;
    }

    public function setPassword($password)
    {
        $this->password=$password;
    }

    public function setCreateDate($created_at)
    {
        $this->created_at=$created_at;
    }

    public function setUpdateDate($updated_at)
    {
        $this->updated_at=$updated_at;
    }

    //get methods

    public function getUsername($username)
    {
        return $this->username;
    }

    public function getPassword($password)
    {
        return $this->password;
    }

    public function getCreateDate($created_at)
    {
        return $this->created_at;
    }

    public function getUpdateDate($updated_at)
    {
        return $this->updated_at;
    }

    // other models

	public function getStudent()
	{
		return $this->belongsTo('Student', 'stu_id');
	}

}