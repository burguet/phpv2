<?php
function Moyenne ($tableau) {
    $somme=0;
    for ($i=0; $i<sizeof($tableau); $i++){
        $somme += $tableau[$i];
    }
    $moyenne=$somme/sizeof($tableau);
    return $moyenne;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$t=[28, 56, 98, 45, 48];
for ($i=0; $i<sizeof($t); $i++){
    echo"<p>".$t[$i]."</p>";
}

echo "<p> la moyenne est :".Moyenne($t)."</p>";
    ?>
</body>
</html>