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

}