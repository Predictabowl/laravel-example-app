<?php

namespace App\Repositories\Interfaces;

use App\Models\Student;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserRepository
 *
 * @author piero
 */
interface StudentRepository {
    //put your code here
    public function find(int $id): Student;
}
