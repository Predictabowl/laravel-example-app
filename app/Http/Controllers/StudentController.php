<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
   /**
     * type this is a repository
     *
     * @var StudentRepository
     */
    protected $students;
    
    // this is Dependency Injection
    public function __construct(StudentRepository $students) {
        $this->students = $students;
    }
    
    /**
     * Show the profile for the given user
     * 
     * @param int $id
     * @return Response
     */
    
    public function show(int $id): Response {
        $student = $this->students->find($id);
        
        /* In this case I assume student.profile is pointing for a view file
         * taht should be named student.profile.php. Possibily a blade file.
        */
        return view("student.profile", ['student' => $student]);
    }
}
