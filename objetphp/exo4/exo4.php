<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require("objet4.php"); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $personnage1 = new Personnage("Julien");
    $personnage2 = new Personnage("Marie");
    
    echo "<p>Avant l'attaque :</p>";
    $personnage1->afficherInfos();
    $personnage2->afficherInfos();
    
    $personnage1->attaquer($personnage2);
    
    echo "<p> Après l'attaque : </p>";
    $personnage1->afficherInfos();
    $personnage2->afficherInfos();
    
    ?>
</body>
</html>