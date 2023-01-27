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
if (isset($_POST["Valider"]))
{
    echo "idMedecin = ".$_POST["idMedecin"]." id patient = ".$_POST["idPatient"]." date = ".$_POST["laDate"];
}
try {

    $ipserver ="192.168.65.167";
    $nomBase = "medecin";
    $loginPrivilege ="SiteWeb";
    $passPrivilege ="SiteWeb";

    $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

    $requete = "select * from Medecin";
    $requete2 = "select * from Patient";
    $resultat = $GLOBALS["pdo"]->query($requete);
    $resultat2 = $GLOBALS["pdo"]->query($requete2);
$tabMedecins = $resultat->fetchALL();
$tabPatient = $resultat2->fetchALL();
    ?>
    <form action="" method="post">
        <select name="idMedecin">
            <?php
            foreach ($tabMedecins as $Medecin) {
                ?>
                <option value="<?=$Medecin["id"]?>"><?=$Medecin["nom"]." ".$Medecin["prenom"]?></option>
                <?php
            }
          
            ?>
        </select>
        <select name="idPatient">
            <?php
           
            foreach ($tabPatient as $Patient) {
                ?>
                <option value="<?=$Patient["id"]?>"><?=$Patient["nom"]." ".$Patient["prenom"]?></option>
                <?php
            }
            ?>
        </select>
        <input type="datetime-local" name="laDate">
        <input type="submit" value="Saisir une consultation" name="Valider">
    </form>
   <?php
        $requete3 = "INSERT INTO `Consultation`( `Dateheure`, `idMedecin`, `idPatient`) VALUES ('" . $_POST['laDate'] . "','" . $_POST['idMedecin'] . "','" . $_POST['idPatient'] . "')";
        $resultat3 = $GLOBALS["pdo"]->query($requete3);


}
 catch (Exception  $error) {
    echo "error est : ".$error->getMessage();
}
?>
</body>
</html>