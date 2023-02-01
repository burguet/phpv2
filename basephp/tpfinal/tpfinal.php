<?php 
	session_start();

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


if ( isset($_POST["val"]) && isset($_POST['login']) && isset($_POST["password"])) { // si l'on a cliqué sur OK et rempli les champs
	
	$_SESSION['login']=$_POST['login'];
	$_SESSION['password']= $_POST['password'];

	if ( $_SESSION['login'] === "Julien" ) {
		if ( md5($_SESSION['password']) === "81dc9bdb52d04dc20036dbd8313ed055" ){ // 1234
			echo "Bienvenue";
			$_SESSION["form"]=true;
		}
		else {
			echo "Le mot de passe est incorrect <br/>";
			$_SESSION["form"]=false;
		}

	}
	else {
		echo "Le login est inconnu <br/>";
		$_SESSION["form"]=false;
		if ( md5($_SESSION['password']) != "81dc9bdb52d04dc20036dbd8313ed055" ){
			echo "Le mot de passe est incorrect <br/>";
		}
	}

}

else {
		if ( isset($_POST["vid"]) ){
			session_unset();
			session_destroy();
			
			//echo "session :";
			//print_r($_SESSION);
		}
	}


?>
	</p>
<?php
		if ( $_SESSION["form"] == false ) 
        { // si la session n'est pas ouverte on affiche le formulaire de connexion

?>
			Login : <input type="text" name="login" value="" /><br/><br/>
			Mot de passe :	<input type="password" name="password" > <br/><br/>
			<input type="submit" value="Connexion" name="val" />
<?php 
	    } 
        else {  // sinon on affiche le bouton de déconnexion
?>

			<input type="submit" value="Déconnexion" name="vid">
<?php 
	            } 
?>
</body>
</html>