<?php
/**
 * Created by PhpStorm.
 * User: wolfpack
 * Date: 12/20/16
 * Time: 11:18 AM
 */

namespace App\Http\Controllers;


use App\Extra_curricular_activity;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class StudentViewController
{

    public function insertActivity(Request $request){
        $index = $request->input(['index']);
        $activity = $request->input(['activityList']);
        $role = $request->input(['role']);
        $effort = $request->input(['effort']);
        $joined = $request->input(['joined']);
        $description = $request->input(['description']);

        DB::insert("INSERT INTO student_activity (stu_id,act_id,role,effort,joined,is_validated,description) VALUES (?,?,?,?,?,?,?)",[$index,$activity,$role,$effort,$joined,0,$description]);

        return redirect('student/'.$index);
    }

    public static function getActivityData()
    {

        $queryActivities = DB::select("SELECT * FROM extra_curricular_activities WHERE TRUE");
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

    public function insertAchievement(Request $request){
        $index = $request->input(['index']);
        $activity = $request->input(['activityList']);
        $date = $request->input(['date']);
        $position = $request->input(['position']);
        $description = $request->input(['description']);

        DB::insert("INSERT INTO achievements (stu_id,act_id,description,date,position) VALUES (?,?,?,?,?)",[$index,$activity,$description,$date,$position]);
        echo "Record inserted successfully.<br/>";
    }

    public static function getStudentActivity($index)
    {
        $queryActivities = DB::select("SELECT act_id,stu_act_id,clb_id,sp_id,comp_id FROM student_activity JOIN extra_curricular_activities ON (act_id=activity_id) WHERE stu_id=$index");

        $allActivities = [];

        for ($i = 0; $i < count($queryActivities); $i++) {
            if ($queryActivities[$i]->clb_id != null) {

                $activity = new Extra_curricular_activity();
                $activity->setID($queryActivities[$i]->act_id);
                $activity->setClubID($queryActivities[$i]->clb_id);

                $queryClub = DB::select("SELECT club_name FROM clubs WHERE club_id=?", [$activity->getClubID()]);

                if ($queryClub != null) {
                    $activity->setActivity($queryClub[0]->club_name);

                    array_push($allActivities, $activity);
                }

            } else if ($queryActivities[$i]->sp_id != null) {

                $activity = new Extra_curricular_activity();
                $activity->setID($queryActivities[$i]->act_id);
                $activity->setClubID($queryActivities[$i]->sp_id);

                $querySport = DB::select("SELECT sport_name FROM sports WHERE sport_id=?", [$activity->getSportID()]);

                if ($querySport != null) {
                    $activity->setActivity($querySport[0]->sport_name);

                    array_push($allActivities, $activity);
                }
            } else if ($queryActivities[$i]->comp_id != null) {

                $activity = new Extra_curricular_activity();
                $activity->setID($queryActivities[$i]->act_id);
                $activity->setClubID($queryActivities[$i]->comp_id);

                $queryComp = DB::select("SELECT competition_name FROM competitions WHERE competition_id=?", [$activity->getCompetitionID()]);

                if ($queryComp != null) {
                    $activity->setActivity($queryComp[0]->competition_name);

                    array_push($allActivities, $activity);
                }
            }

        }

        return $allActivities;
    }


}