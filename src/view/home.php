
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Formulaire étudiant   -->
    <!--  Incluant bouton ajouter et bouton modifier  -->

    <!--  input id pour suppression + bouton suppression  -->


    <?php if(isset($_GET['page']) && $_GET['page'] === 'displayByName'): ?>
        <!-- Afficher résulat unique  -->
    <?php else: ?>
        <h1>Affichage de tout les étudiants : </h1>
        <?php foreach($students as $student): ?>
            <p><?= $student->__toString() ?></p>
        <?php endforeach; ?>
    <?php endif;?>
</body>
</html>