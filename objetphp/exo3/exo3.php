<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require("objet3.php"); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $personnage1 = new Personnage("Julien");
        $personnage1->afficherInfos();
    ?>
</body>
</html>