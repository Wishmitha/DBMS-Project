<?php
/**
 * Created by PhpStorm.
 * User: wolfpack
 * Date: 12/17/16
 * Time: 9:02 PM
 */

namespace App\Http\Controllers;

use App\Extra_curricular_activity;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class SupervisorViewController
{

    public function validateActivity(Request $request){

        $is_validated = $request->input()['verification'];

        $stu_act_id = $request->input()['studentActivityID'];

        $sup_id = $request->input()['supervisorID'];

        if($is_validated == 0){
            DB::update ("UPDATE student_activity SET is_validated = 1 WHERE stu_act_id = ?",[$stu_act_id]);

            return redirect('supervisor/'.$sup_id);

        }else{
            DB::update ("UPDATE student_activity SET is_validated = 0 WHERE stu_act_id = ?",[$stu_act_id]);

            return redirect('supervisor/'.$sup_id);
        }

    }

    public function supervisorRegister(Request $request){

        //$sup_id = $request->input(['sup_id']);
        $f_name = $request->input(['f_name']);
        $l_name = $request->input(['l_name']);
        $field = $request->input(['field']);
        $username = $request->input(['username']);
        $pwd = $request->input(['password']);
        $repwd = $request->input(['repassword']);


        if($pwd == $repwd) {

            DB::insert("INSERT INTO supervisors (first_name,last_name,field) VALUES (?,?,?)", [$f_name, $l_name, $field]);

            $sup_id = DB::select("SELECT MAX(supervisor_id) as latestID FROM supervisors")[0]->latestID;

            DB::insert("INSERT INTO supervisor_login (sup_id,username,password) VALUES (?,?,?)", [$sup_id, $username, hash('ripemd160', $pwd)]);

            $status = "Registration Successful";

            return view('logins/supervisor_login')->with(['status' => $status]);

        }else{

            $status = "Registration Failed : Make sure you repeated your password correctly";

            return view('logins/supervisor_login')->with(['status' => $status]);
        }

    }

    public static function getSupActivities($sup_id){
        $queryActivities = DB::select("SELECT activity_id,type,clb_id,sp_id,comp_id FROM extra_curricular_activities JOIN supervisor_activity on (act_id=activity_id) WHERE sup_id=$sup_id");

        $allActivities = [];

        for ($i = 0; $i < count($queryActivities); $i++) {
            if ($queryActivities[$i]->type == "Club") {

                $activity = new Extra_curricular_activity();
                $activity->setID($queryActivities[$i]->activity_id);
                $activity->setType($queryActivities[$i]->type);
                $activity->setClubID($queryActivities[$i]->clb_id);

                $queryClub = DB::select("SELECT club_name FROM clubs WHERE club_id=?", [$activity->getClubID()]);

                if ($queryClub != null){
                    $activity->setActivity($queryClub[0]->club_name);

                    array_push($allActivities, $activity);
                }


            } else if ($queryActivities[$i]->type== "Sport") {

                $activity = new Extra_curricular_activity();
                $activity->setID($queryActivities[$i]->activity_id);
                $activity->setType($queryActivities[$i]->type);
                $activity->setSportID($queryActivities[$i]->sp_id);

                $querySport = DB::select("SELECT sport_name FROM sports WHERE sport_id=?", [$activity->getSportID()]);

                if ($querySport != null){
                    $activity->setActivity($querySport[0]->sport_name);

                    array_push($allActivities, $activity);
                }
            } else if ($queryActivities[$i]->type == "Competition") {

                $activity = new Extra_curricular_activity();
                $activity->setID($queryActivities[$i]->activity_id);
                $activity->setType($queryActivities[$i]->type);
                $activity->setCompetitionID($queryActivities[$i]->comp_id);

                $queryComp = DB::select("SELECT competition_name FROM competitions WHERE competition_id=?", [$activity->getCompetitionID()]);

                if ($queryComp != null){
                    $activity->setActivity($queryComp[0]->competition_name);

                    array_push($allActivities, $activity);
                }
            }
        }

        return $allActivities;
    }

    public function updateActivity(Request$request){

        $deifined_effort = $request->input(['effort']);

        $activity = $request->input(['activityList']);

        DB::update("UPDATE extra_curricular_activities SET defined_effort=? WHERE activity_id=?",[$deifined_effort,$activity]);
        echo "Record inserted successfully.<br/>";

    }

}