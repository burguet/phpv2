<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo "<h1>coucou je suis pres et vous ?</h1>";

try {

    $ipserver ="192.168.65.193";
    $nomBase = "Medecin";
    $loginPrivilege ="SiteWeb";
    $passPrivilege ="SiteWeb";

    $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

    $requete = "select * from Medecin";
    $resultat = $GLOBALS["pdo"]->query($requete);
    //resultat est du coup un objet de type PDOStatement
    $tabMedecins = $resultat->fetchALL();
   
    ?>
    <form action="" method="post">
        <select name="idMedecin">
            <?php
            foreach ($tabMedecins as $Medecin) {
                ?>
                <option value="<?=$Medecin["id"]?>"><?=$Medecin["nom"]." ".$Medecin["prenom"]?>s</option>
                <?php
            }
          
            ?>
        </select>
    </form>
    <?php

     $requete2 = "select * from Patient";
     $resultat2 = $GLOBALS["pdo"]->query($requete2);
     $tabPatient = $resultat2->fetchALL();

    ?>
    <form action="" method="post">
        <select name="idPatient">
            <?php
           
            foreach ($tabPatient as $Patient) {
                ?>
                <option value="<?=$Patient["id"]?>"><?=$Patient["nom"]." ".$Patient["prenom"]?>s</option>
                <?php
            }
            ?>
        </select>
    </form>
   
    
<?php
} catch (Exception  $error) {
    echo "error est : ".$error->getMessage();
}
?>
</body>
</html>