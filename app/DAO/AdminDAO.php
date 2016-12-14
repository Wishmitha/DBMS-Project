<?php
/**
 * Created by PhpStorm.
 * User: wolfpack
 * Date: 12/13/16
 * Time: 10:51 PM
 */

namespace App\DAO;

use App\Admin;
use App\Extra_curricular_activity;
use Illuminate\Support\Facades\DB;

class AdminDAO
{
    public function create($id){

        $queryAdmin = DB::select("SELECT * FROM admins WHERE admin_id=?",[$id]);

        $admin = new Admin();

        $admin->setID($queryAdmin[0]->admin_id);
        $admin->setFirstName($queryAdmin[0]->first_name);
        $admin->setLastName($queryAdmin[0]->last_name);

        $admin->setStudents($this->getAllStudents());

        $admin->setSupervisors($this->getAllSupervisors());

        $admin->setActivities($this->getAllActivities());

        return var_dump($admin->getStudents()[0]->getName());
    }

    public function getAllStudents(){

        $queryStudents = DB::select("SELECT student_id FROM students WHERE TRUE");

        return $queryStudents;
    }

    public function getAllSupervisors(){
        $querySupervisors = DB::select("SELECT supervisor_id FROM supervisors WHERE TRUE");

        return $querySupervisors;
    }

    public function getAllActivities(){

        /*$allSports=[];

        $querySports = DB::select("SELECT * FROM sports WHERE TRUE");
        $sportIDS=[];

        for($i=0;$i<count($querySports);$i++){
            array_push($sportIDS,$querySports[$i]->sport_id);
        }

        array_push($allSports,$sportIDS);

        $sportsActIDS=[];

        for($j=0;$j<count($sportIDS);$j++){
            $querySportsActID = DB::select("SELECT activity_id FROM extra_curricular_activities WHERE sp_id = ?",[$sportIDS[$j]]);
            array_push($sportsActIDS,$querySportsActID[0]->activity_id);
        }

        array_push($allSports,$sportsActIDS);

        for($k=0;$k<count($sportsActIDS);$k++){
            $querySportsActID = DB::select("SELECT activity_id FROM extra_curricular_activities WHERE sp_id = ?",[$sportIDS[$j]]);
            array_push($sportsActIDS,$querySportsActID[0]->activity_id);
        }*/


        $queryActivities = DB::select("SELECT * FROM extra_curricular_activities WHERE TRUE");


        $allActivities=[];
        $allSports=[];
        $allClubs=[];
        $allCompetitions=[];

        for($i=0;$i<count($queryActivities);$i++){

            if($queryActivities[$i]->type=='Sport'){

                $activity = new Extra_curricular_activity();
                $activity->setID($queryActivities[$i]->activity_id);
                $activity->setType($queryActivities[$i]->type);
                $activity->setSportID($queryActivities[$i]->sp_id);

                $querySport = DB::select("SELECT * FROM sports WHERE sport_id = ?",[$activity->getSportID()]);

                $activity->setActivity($querySport[0]->sport_name);
                $activity->setLogo($querySport[0]->logo);
                $activity->setDivision($querySport[0]->team);
                $activity->setDescription($querySport[0]->description);
                $activity->setDefinedEffort($queryActivities[$i]->defined_effort);

                $supervisorIDS = DB::select("SELECT sup_id FROM supervisor_activity WHERE act_id = ?",[$activity->getID()]);

                $activity->setSupervisors($supervisorIDS);

                array_push($allSports,$activity);
            }

            if($queryActivities[$i]->type=='Club'){

                $activity = new Extra_curricular_activity();
                $activity->setID($queryActivities[$i]->activity_id);
                $activity->setType($queryActivities[$i]->type);
                $activity->setClubID($queryActivities[$i]->clb_id);

                $queryClub = DB::select("SELECT * FROM clubs WHERE club_id = ?",[$activity->getClubID()]);

                $activity->setActivity($queryClub[0]->club_name);
                $activity->setLogo($queryClub[0]->logo);
                $activity->setDivision($queryClub[0]->division);
                $activity->setDescription($queryClub[0]->description);
                $activity->setDefinedEffort($queryActivities[$i]->defined_effort);

                $supervisorIDS = DB::select("SELECT sup_id FROM supervisor_activity WHERE act_id = ?",[$activity->getID()]);

                $activity->setSupervisors($supervisorIDS);

                array_push($allClubs,$activity);
            }

            if($queryActivities[$i]->type=='Competition'){

                $activity = new Extra_curricular_activity();
                $activity->setID($queryActivities[$i]->activity_id);
                $activity->setType($queryActivities[$i]->type);
                $activity->setCompetitionID($queryActivities[$i]->comp_id);

                $queryCompetition = DB::select("SELECT * FROM competitions WHERE competition_id = ?",[$activity->getCompetitionID()]);

                $activity->setActivity($queryCompetition[0]->competition_name);
                $activity->setLogo($queryCompetition[0]->logo);
                $activity->setDivision($queryCompetition[0]->host);
                $activity->setDescription($queryCompetition[0]->description);
                $activity->setDefinedEffort($queryActivities[$i]->defined_effort);

                $supervisorIDS = DB::select("SELECT sup_id FROM supervisor_activity WHERE act_id = ?",[$activity->getID()]);

                $activity->setSupervisors($supervisorIDS);

                array_push($allCompetitions,$activity);
            }
        }

        array_push($allActivities,$allSports,$allClubs,$allCompetitions);

        return $allActivities;
    }
}