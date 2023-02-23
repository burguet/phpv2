<?php

class Personnage {
    private $vie;
    private $pseudo;
    

    public function __construct($id) 
    {
       
        $my_db=new PDO('mysql:host=192.168.1.28; dbname=objet; charset=utf8','root', 'root'); //permet d'inialiter la connection a la base
        $data_perso = $my_db->query("SELECT nom, vie FROM `personnage` WHERE id=".$id.";");//récupération des résultat de la requête 
        $t_perso = $data_perso->fetch(); // mise en forme des information dans un tableau grâce aux fetch
        print_r($t_perso); // affichage du tableau de la ligne 13
        $this->pseudo = $t_perso['nom']; //stockage du nom récupérer dans $pseudo
        $this->vie = $t_perso['vie']; //stockage de la vie récupérer dans $vie
        $data_perso ->closeCursor(); //fermeture de la connexion
    }
    
    public function attaquer(Personnage $personnage) {
        echo"<p>".$this->pseudo . " attaque " . $personnage->getPseudo() . "</p>";
        $personnage->defense(50);
    }
    
    public function defense($degats)
    {
        echo "<p>".$this->pseudo . " se défend contre une attaque de " . $degats . " dégâts</p>";

        $this->vie -= $degats;

        if ($this->vie <= 0)
        {
            echo "<p>".$this->pseudo . " est mort</p>";
        } 

        else {
            echo "<p>".$this->pseudo . " a " . $this->vie . " points de vie restants </p>";
        }
    }
    
    public function getPseudo()
    {
        return $this->pseudo;
    }
    
    public function afficherInfos()
    {
        echo "<p> Pseudo : " . $this->pseudo . ", Points de vie : " . $this->vie . "</p>";
    }
}


    
?>
