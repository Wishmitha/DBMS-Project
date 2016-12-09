<?php
/**
 * Created by PhpStorm.
 * User: wolfpack
 * Date: 12/9/16
 * Time: 5:19 PM
 */

namespace App\DAO;

use App\Achievements;
use App\Supervisor;
use Illuminate\Support\Facades\DB;

class SupervisorDAO
{
    public function create($id)
    {
        $querySupervisor = DB::select("SELECT * FROM supervisors WHERE supervisor_id=?",[$id]);

        if($querySupervisor != null) {

            $supervisor = new Supervisor();

            // basic attributes of the students
            $supervisor->setID($querySupervisor[0]->supervisor_id);
            $supervisor->setFirstName($querySupervisor[0]->first_name);
            $supervisor->setLastName($querySupervisor[0]->last_name);
            $supervisor->setField($querySupervisor[0]->field);

            // set activity list
            //$supervisor->setActivities($this->getActivities($supervisor->getID()));

            // set login
            //$student->setLogin($this->getLogin($student->getID()));

            return $this->getActivities($supervisor->getID());
        }else{
            return null;
        }

    }

    public function getActivities($sup_id){

        $querySupervisorActivities = DB::select("SELECT * FROM supervisor_activity WHERE sup_id=?",[$sup_id]);

        $activities=[];

        for($i=0;$i<count($querySupervisorActivities);$i++){

            $activity = [];
            $activityClass=[];

            $actID = $querySupervisorActivities[$i]->act_id;

            $queryActivities = DB::select("SELECT * FROM extra_curricular_activities WHERE activity_id=?",[$actID]);

            if($queryActivities[0]->type == "Sport"){

                $queryActivityClass = DB::select("SELECT * FROM sports WHERE sport_id=?",[$queryActivities[0]->sp_id]);

                array_push($activityClass,
                    $queryActivityClass[0]->sport_name,
                    $queryActivityClass[0]->logo,
                    $queryActivityClass[0]->team,
                    $queryActivityClass[0]->description);

            }elseif ($queryActivities[0]->type == "Club"){

                $queryActivityClass = DB::select("SELECT * FROM clubs WHERE club_id=?",[$queryActivities[0]->clb_id]);

                array_push($activityClass,
                    $queryActivityClass[0]->club_name,
                    $queryActivityClass[0]->logo,
                    $queryActivityClass[0]->division,
                    $queryActivityClass[0]->description);

            }else{

                $queryActivityClass = DB::select("SELECT * FROM competitions WHERE competition_id=?",[$queryActivities[0]->comp_id]);

                array_push($activityClass,
                    $queryActivityClass[0]->competetiopn_name,
                    $queryActivityClass[0]->logo,
                    $queryActivityClass[0]->host,
                    $queryActivityClass[0]->description);

            }

            array_push($activity,
                [$queryActivities[0]->defined_effort,
                    $queryActivities[0]->defined_effort]);

            array_push($activity,$activityClass);
            $activity=array_flatten($activity);

            array_push($activities,$activity);

        }

        return $activities;
    }
}