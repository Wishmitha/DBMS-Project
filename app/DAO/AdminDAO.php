<?php
/**
 * Created by PhpStorm.
 * User: wolfpack
 * Date: 12/13/16
 * Time: 10:51 PM
 */

namespace App\DAO;

use App\Admin;
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

        return $admin;
    }

    public function getAllStudents(){
        $queryStudents = DB::select("SELECT student_id FROM students WHERE TRUE");

        return $queryStudents;
    }

    public function getAllSupervisors(){
        $querySupervisors = DB::select("SELECT supervisor_id FROM supervisors WHERE TRUE");

        return $querySupervisors;
    }
}