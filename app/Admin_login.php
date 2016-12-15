<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin_login extends Model {

    /*protected $table = 'supervisor_login';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];*/

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

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getCreateDate()
    {
        return $this->created_at;
    }

    public function getUpdateDate()
    {
        return $this->updated_at;
    }

    // other models
    public function getSupervisor()
    {
        return $this->belongsTo('Supervisor', 'sup_id');
    }

}