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

    public $timestamps = true;


    private $position;
    private $description;
    private $date;

    // set attributes


    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    // get attributes


    public function getPosition()
    {
        return $this->position;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDate()
    {
        return $this->date;
    }


    // other models

	public function getActivity()
	{
		return $this->hasMany('Extra_curricular_activity', 'act_id');
	}

	public function getStudent()
	{
		return $this->belongsTo('Student', 'stu_id');
	}

}