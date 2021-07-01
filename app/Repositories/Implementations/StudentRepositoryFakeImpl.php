<?php

namespace App\Repositories\Implementations;

use \App\Repositories\Interfaces\StudentRepository;
use App\Models\Student;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserRepositoryImpl
 *
 * @author piero
 */
class StudentRepositoryFakeImpl implements StudentRepository{
    //put your code here
    public function find(int $id): Student{
        $student = new Student();
        $student->setId(1);
        $student->setName("Mario");
        return $student;
    }

}
