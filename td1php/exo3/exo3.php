<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><table border="1">
<?php
        $tableau[1][1]="nom";
        $tableau[1][2]="prenom";
        $tableau[1][3]="MDP";
       
            echo '<tr>';

            for ($i = 1; $i <= 3; $i++)
                {
            echo "<th>".$tableau[1][$i]."</th>";
            
            }

           echo "</tr>";
?>
<?php

 $tableau[2][1]="BURGUET";
 $tableau[2][2]="LUCAS";
 $tableau[2][3]="MDP1";
 echo '<tr>';
 for ($i = 1; $i <= 3; $i++)
 {

echo "<th>".$tableau[2][$i]."</th>";
}

echo "</tr>";
?>
<?php

$tableau[3][1]="FLANDRE";
$tableau[3][2]="VICTOR";
$tableau[3][3]="MDP2";
echo '<tr>';
for ($i = 1; $i <= 3; $i++)
{

echo "<th>".$tableau[3][$i]."</th>";
}

echo "</tr>";
?>
<?php

$tableau[4][1]="BLANGUERIN";
$tableau[4][2]="JORDAN";
$tableau[4][3]="MDP3";
echo '<tr>';
for ($i = 1; $i <= 3; $i++)
{

echo "<th>".$tableau[4][$i]."</th>";
}

echo "</tr>";
?>
</table>
</body>
</html>