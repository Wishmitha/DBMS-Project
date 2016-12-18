<?php
/**
 * Created by PhpStorm.
 * User: wolfpack
 * Date: 12/17/16
 * Time: 2:33 PM
 */

namespace App\Http\Controllers;

use App\DAO\StudentDAO;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class AdminViewController
{

    public function assignSupervisor(Request $request){

        $admin_id = $request->input()['adminID'];
        $sup_id = $request->input()['supervisorID'];
        $act_id = $request->input()['activityID'];

        if((DB::select("SELECT COUNT(sup_act_id) as num FROM supervisor_activity WHERE sup_id=$sup_id AND act_id=$act_id")[0])->num == 0) {

            DB::insert("INSERT INTO supervisor_activity (sup_id,act_id) VALUES ($sup_id,$act_id)");

            return redirect('admin/'.$admin_id);

        }else{

            return redirect('admin/'.$admin_id);
        }
    }

    public function deleteStudent(Request $request){

        $student_id = $request->input()['studentID'];

        $admin_id = $request->input()['adminID'];

        DB::delete("DELETE FROM students WHERE student_id=?",[$student_id]);

        return redirect('admin/'.$admin_id);

    }

    public function deleteSupervisorActivity(Request $request){

        $supervisor_id = $request->input()['supervisorID'];

        $admin_id = $request->input()['adminID'];

        $activity_id = $request->input()['activityID'];

        DB::delete("DELETE FROM supervisor_activity WHERE sup_id=$supervisor_id AND act_id=$activity_id");

        return redirect('admin/'.$admin_id);

    }

    public function addActivity(Request $request){

        $admin_id = $request->input()['adminID'];
        $type = $request->input()['type'];
        $act = $request->input()['activity'];

        $actType = "'".$type."'";
        $activity = "'".$act."'";
        $logo = "'".$request->input()['logo']."'";
        $division = "'".$request->input()['division']."'";
        $effort = $request->input()['effort'];
        $description = "'".$request->input()['description']."'";



        if($type=="Sport"){
            DB::insert("INSERT INTO sports (sport_name,logo,team,description) VALUES ($activity,$logo,$division,$description)");

            $sport_id = DB::select("SELECT sport_id FROM sports WHERE sport_name = ?",[$act])[0]->sport_id;

            DB::insert("INSERT INTO extra_curricular_activities (type,sp_id,defined_effort) VALUES ($actType,$sport_id,$effort)");

            return redirect('admin/'.$admin_id);

        } elseif($type=="Club"){
            DB::insert("INSERT INTO clubs (club_name,logo,division,description) VALUES ($activity,$logo,$division,$description)");

            $club_id = DB::select("SELECT club_id FROM clubs WHERE club_name = ?",[$act])[0]->club_id;

            DB::insert("INSERT INTO extra_curricular_activities (type,clb_id,defined_effort) VALUES ($actType,$club_id,$effort)");

            return redirect('admin/'.$admin_id);

        }else{

            DB::insert("INSERT INTO competitions (competition_name,logo,host,description) VALUES ($activity,$logo,$division,$description)");

            $comp_id = DB::select("SELECT competition_id FROM competitions WHERE competition_name = ?",[$act])[0]->competition_id;

            DB::insert("INSERT INTO extra_curricular_activities (type,comp_id,defined_effort) VALUES ($actType,$comp_id,$effort)");

            return redirect('admin/'.$admin_id);

        }

    }

    public function createStudentReport(Request$request){

        $type = $request->input()['type'];
        $student_id = intval($request->input()['studentID']);

        if($type == "Ind"){

            $studentDAO = new StudentDAO();
            $student = $studentDAO->create($student_id);

            //return var_dump($student);

            return view('admin/reports/student_individual')->with(['student' => $student]);

        }



    }

}