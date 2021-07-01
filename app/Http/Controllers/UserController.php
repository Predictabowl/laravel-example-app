<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\Interfaces\StudentRepository;

class UserController extends Controller
{
    /**
     * type this is a repository
     *
     * @var StudentRepository
     */
    protected $users;
    
    // this is Dependency Injection
    public function __construct(StudentRepository $users) {
        $this->users = $users;
    }
    
    /**
     * Show the profile for the given user
     * 
     * @param int $id
     * @return Response
     */
    
    public function show(int $id): Response {
        $user = $this->users->find($id);
        
        return view("user.profile", ['user' => $user]);
    }

}
