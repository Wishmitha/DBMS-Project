<?php 

namespace App\Http\Controllers;

use App\DAO\SupervisorDAO;

class SupervisorController extends Controller {

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
      $supervisorDAO = new SupervisorDAO();
      $supervisor = $supervisorDAO -> create($id);

      //return $supervisor->getID()." ".$supervisor->getName()." ".$supervisor->getField();

      /*return $supervisor->getActivities()[0]->getStudents()[1]->getName()." ".$supervisor->getActivities()[0]->getStudents()[1]->getActivities()[0]->getRole()." ".$supervisor->getActivities()[0]->getStudents()[1]->getActivities()[0]->getActivity()
          .'<br>'.$supervisor->getActivities()[1]->getStudents()[1]->getName()." ".$supervisor->getActivities()[1]->getStudents()[1]->getActivities()[0]->getRole()." ".$supervisor->getActivities()[1]->getStudents()[1]->getActivities()[0]->getActivity();*/

      return var_dump($supervisor);
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
  
}

?>