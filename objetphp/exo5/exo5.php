<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require("objet5.php"); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $personnage1 = new Personnage("1");
    $personnage2 = new Personnage("2");
    
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