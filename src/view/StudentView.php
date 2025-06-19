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

?>

<h2>Formulaire Étudiant</h2>
<form method="post">
    <input type="hidden" name="action" value="save">
    <label>ID (pour modification) : <input type="number" name="id"></label><br>
    <label>Nom : <input type="text" name="nom" required></label><br>
    <label>Prénom : <input type="text" name="prenom" required></label><br>
    <label>Date de naissance : <input type="date" name="date_naissance" required></label><br>
    <label>Email : <input type="email" name="email" required></label><br>
    <button type="submit" name="submit" value="add">Ajouter</button>
    <button type="submit" name="submit" value="update">Modifier</button>
</form>
