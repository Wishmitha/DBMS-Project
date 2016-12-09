<?php

namespace App\DAO;

use App\Student;
//use function array_push;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: wolfpack
 * Date: 12/8/16
 * Time: 1:42 PM
 */
class StudentDAO
/*
 * A data access obeject which processes queries and return temperorary student object for data accessing
*/
{

    public function create($id)
    {
        $queryStudent = DB::select("SELECT * FROM students WHERE student_id=?",[$id]);

        if($queryStudent != null) {

            $student = new Student();

            // basic attributes of the students
            $student->setID($queryStudent[0]->student_id);
            $student->setFirstName($queryStudent[0]->first_name);
            $student->setLastName($queryStudent[0]->last_name);
            $student->setBatchID($queryStudent[0]->batch_id);

            // set activity list
            $student->setActivities($this->getActivities($student->getID()));

            // set login
            $student->setLogin($this->getLogin($student->getID()));

            return $student;
        }else{
            return null;
        }

    }

    public function getActivities($stu_id){

        $queryStudentActivities = DB::select("SELECT * FROM student_activity WHERE stu_id=?",[$stu_id]);
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
                        $queryAchievements[$j]->created_at]);
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
                    $queryStudentActivities[$i]->is_validated]);

            array_push($activity,$activityClass);
            $activity=array_flatten($activity);
            array_push($activity,$achievements);


            array_push($activities,$activity);

        }

        return $activities;
    }

    public function getLogin($stu_id){

        $queryStudentLogin = DB::select("SELECT * FROM student_login WHERE stu_id=?",[$stu_id]);

        return $queryStudentLogin;

    }

    /*public function login(Request $request){
        echo var_dump($request->input());
    }*/

}