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
   * Show the form for editing t;he specified resource.
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

      $queryStudentActivities = DB::select("SELECT * FROM student_activity WHERE stu_id=?",[$stu_id]);
      $activities=[];

      for($i=0;$i<count($queryStudentActivities);$i++){

          $activity = [];
          $activityClass=[];

          $actID = $queryStudentActivities[$i]->act_id;

          $queryActivities = DB::select("SELECT * FROM extra_curricular_activities WHERE activity_id=?",[$actID]);


          if($queryActivities[0]->type == "Sport"){

              $queryActivityClass = DB::select("SELECT * FROM sports WHERE sport_id=?",[$queryActivities[0]->sp_id]);

              array_push($activityClass,
                  $queryActivityClass[0]->sport_name,
                  $queryActivityClass[0]->logo,
                  $queryActivityClass[0]->team,
                  $queryActivityClass[0]->description);

          }elseif ($queryActivities[0]->type == "Club"){

              $queryActivityClass = DB::select("SELECT * FROM clubs WHERE club_id=?",[$queryActivities[0]->clb_id]);

              array_push($activityClass,
                  $queryActivityClass[0]->club_name,
                  $queryActivityClass[0]->logo,
                  $queryActivityClass[0]->division,
                  $queryActivityClass[0]->description);

          }else{

              $queryActivityClass = DB::select("SELECT * FROM competitions WHERE competition_id=?",[$queryActivities[0]->comp_id]);

              array_push($activityClass,
                  $queryActivityClass[0]->competetiopn_name,
                  $queryActivityClass[0]->logo,
                  $queryActivityClass[0]->host,
                  $queryActivityClass[0]->description);

          }

          array_push($activity,
              [$queryStudentActivities[$i]->role,
              $queryStudentActivities[$i]->effort,
              $queryStudentActivities[$i]->joined,
              $queryStudentActivities[$i]->is_validated]);

          array_push($activity,$activityClass);
          $activity=array_flatten($activity);


          array_push($activities,$activity);

      }

      return $activities;
  }

}

?>