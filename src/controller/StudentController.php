<?php

namespace src\controller;

use src\service\StudentService;

class StudentController
{
    public function __construct(private StudentService $service){}

    public function displayStudents(){
        $students = $this->service->getStudents();
        include __DIR__ . "/../view/home.php";
    }
}