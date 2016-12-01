<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use Illuminate\Database\Eloquent\SoftDeletes;

class Achievements extends Model {

    /*================================
	protected $table = 'achievements';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
    ==================================*/

    // attributes

    private $ach_id;
    private $act_id;
    private $stu_id;
    private $position;
    private $description;

    // set attributes

    public function setID($ach_id){
        return $this->ach_id = $ach_id;
    }

    public function setActivityID($act_id){
        $this->act_id = $act_id;
    }

    public function setLastName($last_name){
        $this->last_name = $last_name;
    }

    public function setBatchID($batch_id)
    {
        return $this->batch_id = $batch_id;
    }

	public function getActivity()
	{
		return $this->hasMany('Extra_curricular_activity', 'act_id');
	}

	public function getStudent()
	{
		return $this->belongsTo('Student', 'stu_id');
	}

}