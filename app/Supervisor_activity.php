<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supervisor_activity extends Model {

	/**protected $table = 'supervisor_activity';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];*/

    public $timestamps = true;

    private $activity;
    private $logo;
    private $div;
    private $description;

    private $students=[];

    // set attributes


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

    public function setStudents($students)
    {
        for($i=0;$i<count($students);$i++){

            array_push($this->students,$students[$i]);
        }

    }

    //get attributes

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

    public function getStudents()
    {
        return $this->students;

    }

	/*public function mapActivity()
	{
		return $this->hasOne('Extra_curricular_activity', 'act_id');
	}

	public function mapSupervisor()
	{
		return $this->belongsTo('Supervisor', 'sup_id');
	}*/

}