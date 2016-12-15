<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Extra_curricular_activity;

class StudentActivityInsertController extends Controller
{
    public static function getActivityData()
    {

        $queryActivities = DB::select("SELECT * FROM extra_curricular_activities WHERE TRUE");

        $allActivities = [];
        $allSports = [];
        $allClubs = [];
        $allCompetitions = [];

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
}
