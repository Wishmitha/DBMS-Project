<?php
/**
 * Created by PhpStorm.
 * User: wolfpack
 * Date: 12/9/16
 * Time: 5:19 PM
 */

namespace App\DAO;

use App\Student;
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

            //set activity list
            $supervisor->setActivities($this->getActivities($supervisor->getID()));

            // set login
            $supervisor->setLogin($this->getLogin($supervisor->getID()));

            return $supervisor;

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
            $students=[];

            $actID = $querySupervisorActivities[$i]->act_id;

            $queryActivities = DB::select("SELECT * FROM extra_curricular_activities WHERE activity_id=?",[$actID]);

            // students who are doing a particular activity

            $queryStudentIDS=DB::select("SELECT stu_id FROM student_activity WHERE act_id=?",[$actID]);

            for ($j=0;$j<count($queryStudentIDS);$j++){

                $student = $this->createStudentInstance($queryStudentIDS[$j]->stu_id,$actID);

                array_push($students,$student);
            }

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



            /*array_push($activity,
                [$queryStudentActivities[$i]->role,
                    $queryStudentActivities[$i]->effort,
                    $queryActivities[0]->defined_effort,
                    $queryStudentActivities[$i]->joined,
                    $queryStudentActivities[$i]->is_validated]);*/

            array_push($activity,$activityClass);
            $activity=array_flatten($activity);
            array_push($activity,$students);


            array_push($activities,$activity);

        }

        return $activities;
    }

    public function getLogin($sup_id){

        $querySupervisorLogin = DB::select("SELECT * FROM supervisor_login WHERE sup_id=?",[$sup_id]);

        return $querySupervisorLogin;

    }

    public  function  getID($username){
        $querySupID = DB::select("SELECT sup_id FROM supervisor_login WHERE username=?",[$username]);

        if(count($querySupID)!=0) {
            return $querySupID[0]->sup_id;
        }else{
            return null;
        }

    }






    public function createStudentInstance($stu_id,$act_id)
    {
        $queryStudent = DB::select("SELECT * FROM students WHERE student_id=?",[$stu_id]);

        if($queryStudent != null) {

            $student = new Student();

            // basic attributes of the students
            $student->setID($queryStudent[0]->student_id);
            $student->setFirstName($queryStudent[0]->first_name);
            $student->setLastName($queryStudent[0]->last_name);
            $student->setBatchID($queryStudent[0]->batch_id);

            // set activity list
            $student->setActivities($this->getStudentActivities($student->getID(),$act_id));

            // set login
            //$student->setLogin($this->getLogin($student->getID()));

            return $student;

        }else{

            return null;
        }

    }

    public function getStudentActivities($stu_id,$act_id){

        $queryStudentActivities = DB::select("SELECT * FROM student_activity WHERE stu_id=? AND act_id=?",[$stu_id,$act_id]);
        $activities=[];

        for($i=0;$i<count($queryStudentActivities);$i++){

            $activity = [];
            $activityClass=[];
            $achievements=[];

            $actID = $queryStudentActivities[$i]->act_id;

            $queryActivities = DB::select("SELECT * FROM extra_curricular_activities WHERE activity_id=?",[$actID]);

            $queryAchievements=DB::select("SELECT * FROM achievements WHERE act_id=? AND stu_id=?",[$actID,$stu_id]);

            for ($j=0;$j<count($queryAchievements);$j++){
                array_push($achievements,
                    [$queryAchievements[$j]->position,
                        $queryAchievements[$j]->description,
                        $queryAchievements[$j]->date]);
            }


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
                [$queryStudentActivities[$i]->role,
                    $queryStudentActivities[$i]->effort,
                    $queryActivities[0]->defined_effort,
                    $queryStudentActivities[$i]->joined,
                    $queryStudentActivities[$i]->is_validated,
                    $queryStudentActivities[$i]->description]);

            array_push($activity,$activityClass);
            $activity=array_flatten($activity);
            array_push($activity,$achievements);


            array_push($activities,$activity);

        }

        return $activities;
    }

}