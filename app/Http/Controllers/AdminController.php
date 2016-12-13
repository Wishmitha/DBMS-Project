<?php

namespace App\Http\Controllers;

use App\Admin;
use App\DAO\AdminDAO;
use App\DAO\SupervisorDAO;
use App\Student;
use App\DAO\StudentDAO;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $adminDAO = new AdminDAO();
        $admin = $adminDAO->create($id);

        return var_dump($admin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

    }

    public function login(Request $request){

        $username = $request->input()['username'];
        $password = $request->input()['password'];

        $supervisorDAO = new SupervisorDAO();
        //return $supervisorDAO->getID($username);

        $supID = $supervisorDAO->getID($username);

        if($supID!=null) {

            $supervisor = $supervisorDAO->create($supID);

            if ($supervisor != null) {

                if ($supervisor->getlogin()->getPassword() == $password) {
                    return Redirect::to(Route('supervisor', [$supID]));
                    //return 'True';
                } else {
                    return Redirect::to(Route('supervisor_login_form'));
                }
            } else {
                return Redirect::to(Route('supervisor_login_form'));
            }
        }else{
            return Redirect::to(Route('supervisor_login_form'));
        }
    }

}

?>