<?php 

namespace App\Http\Controllers;

use App\Extra_curricular_activity;
use Illuminate\Support\Facades\DB;

class Extra_curricular_activityController extends Controller {

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
  public function show($id) // show activities of a given student
  {
      $query = DB::select("SELECT * FROM extra_curricular_activities WHERE activity_id=?",[$id]);

      $activity = new Extra_curricular_activity();

      $activity->setID($query[0]->activity_id);
      $activity->setType($query[0]->type);

      if($activity->getType()=="Sport"){
          $activity->setSportID($query[0]->sp_id);
      }elseif ($activity->getType()=="Club"){
          $activity->setClubID($query[0]->clb_id);
      }else{
          $activity->setCompetitionID($query[0]->comp_id);
      }

      $activity->setDefinedEffort($query[0]->defined_effort);

      return $activity->getID()." ".$activity->getType()." ".$activity->getClubID()." ".$activity->getDefinedEffort();
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