<?php
/**
 * Created by PhpStorm.
 * User: wolfpack
 * Date: 12/17/16
 * Time: 9:02 PM
 */

namespace App\Http\Controllers;

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

}