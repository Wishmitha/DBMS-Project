<?php 

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller {

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
  public function create($id)
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

      $queryStudent = DB::select("SELECT * FROM students WHERE student_id=?",[$id]);

      $student = new Student();

      $student->setID($queryStudent[0]->student_id);
      $student->setFirstName($queryStudent[0]->first_name);
      $student->setLastName($queryStudent[0]->last_name);
      $student->setBatchID($queryStudent[0]->batch_id);

      $student->setActivities($this->getActivities($student->getID()));



      return $student->getName()." ".$student->getID()." ".$student->getBatchID()." ".var_dump($student->getActivities());


    
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

  public function getActivities($stu_id){

      $queryActivities = DB::select("SELECT act_id FROM student_activity WHERE stu_id=?",[$stu_id]);
      $activities=[];

      for($i=0;$i<count($queryActivities);$i++){
          array_push($activities,$queryActivities[$i]->act_id);
      }

      return $activities;
  }

}

?>