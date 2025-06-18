<?php
require_once 'vendor/autoload.php';

use src\repository\StudentRepository;
use src\repository\LogRepository;
use src\service\StudentService;

$studentRepo = new StudentRepository();
$logRepo = new LogRepository();
$studentService = new StudentService($studentRepo, $logRepo);

$students = $studentService->getStudents();

include 'src/view/StudentView.php';