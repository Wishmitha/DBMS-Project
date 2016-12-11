<?php 

namespace App\Http\Controllers;

use App\Student;
use App\DAO\StudentDAO;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Request;


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


      $studentDAO = new StudentDAO();
      $student = $studentDAO->create($id);
      //return $student->getName()." ".$student->getID()." ".$student->getLogin()->getUsername()." ".$student->getLogin()->getPassword()." ".$student->getActivities()[0]->getAchievements()[0]->getDescription();

      return view('student/main')->with(['student' => $student]);

      return var_dump((array)$student);

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


  public function login(Request $request){

      $username = $request->input()['username'];
      $password = $request->input()['password'];

      $studentDAO = new StudentDAO();
      $student = $studentDAO->create($username);

      if($student != null) {

          if ($student->getlogin()->getPassword() == $password) {
              return Redirect::to(Route('student', [$username]));
              //return 'True';
          } else {
              return Redirect::to(Route('login_form'));
          }
      }else{
          return Redirect::to(Route('login_form'));
      }
  }

}

?>