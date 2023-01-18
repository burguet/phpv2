<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href= 'exo1.css' rel='stylesheet' type='text/css'>
    <title>Document</title>
</head>
<body>
    <?php
        $NombreAleatoire = rand ( 0 , 100 );
        if($NombreAleatoire%2 == 0)
        {
           echo "<p class='pair'> le nombre aleatoire  $NombreAleatoire est pair </p>" ;
        }
        else{
            echo "<p class='impair'> le nombre aleatoire  $NombreAleatoire est impair </p>"; 
        }
    ?>
</body>
</html>