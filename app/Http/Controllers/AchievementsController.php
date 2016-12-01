<?php 

namespace App\Http\Controllers;

use App\Achievements;
use Illuminate\Support\Facades\DB;

class AchievementsController extends Controller {

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
      $query = DB::select("SELECT * FROM achievements WHERE ach_id=?",[$id]);

      $achievement = new Achievements();

      $achievement->setID($query[0]->ach_id);
      $achievement->setActivityID($query[0]->act_id);
      $achievement->setStudentID($query[0]->stu_id);
      $achievement->setPosition($query[0]->position);
      $achievement->setDescription($query[0]->description);

      //return $query[0]->stu_id;

      return $achievement->getID()." ".$achievement->getStudentID()." ".$achievement->getPosition()." ".$achievement->getDescription();
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