<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href= 'exo5.css' rel='stylesheet' type='text/css'>
    <title>Document</title>
</head>
<body>
<form action="" method="post">

        Text : <input type ="text" name="texte">
        <input type="submit" name="envoyer">   
</form>

   <?php
        if (isset($_POST['texte']))
        {
            echo"<p class='retour'>".$_POST['texte']."</p>";
        }
        if(empty($_POST['texte']))
        {
            
            echo"<p>Aucun texte n'a été saisi</p>";
        }
    ?>
    
</body>
</html>