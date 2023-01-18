<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
<?php
           $array=
           [
            1=>5,
            2=>1,
            3=>7,
            4=>6,
            5=>2,
           ];  
           echo '<tr>';

            for ($i = 1; $i <= sizeof($array); $i++)
                {
            echo "<th>".$array[$i]."</th>";
            }

           echo "</tr>";
?>

<?php
           $nom=
           [
            1=>"nom",
            2=>"Prenom",
            3=>"MDP",
           ];  
           echo '<tr>';

            for ($i = 1; $i <= 3; $i++)
                {
            echo "<th>".$nom[$i]."</th>";
            }

           echo "</tr>";
?>
</table>
</body>
</html>