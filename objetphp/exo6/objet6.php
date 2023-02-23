<?php

class Personnage {
    private $id;
    private $vie;
    private $pseudo;
    

    public function __construct($id) 
    {
       
        $my_db=new PDO('mysql:host=192.168.1.28; dbname=objet; charset=utf8','root', 'root');
        $data_perso = $my_db->query("SELECT nom, vie FROM `personnage` WHERE id=".$id.";");
        $t_perso = $data_perso->fetch();
        print_r($t_perso);
        $this->pseudo = $t_perso['nom'];
        $this->vie = $t_perso['vie'];
        $this->id=$id;
        $data_perso ->closeCursor();
    }
    
    public function attaquer(Personnage $personnage) {
        echo"<p>".$this->pseudo . " attaque " . $personnage->getPseudo() . "</p>";
        $personnage->defense(1,);
    }
    
    public function defense($degats)
    {
        echo "<p>".$this->pseudo . " se défend contre une attaque de " . $degats . " dégâts</p>";

        $this->vie -= $degats;

        $my_db=new PDO('mysql:host=192.168.1.28; dbname=objet; charset=utf8','root', 'root');
        $data_perso = $my_db->query("UPDATE `personnage` SET vie=".$this->vie." WHERE id=".$this->getId().";");
        $data_perso ->closeCursor();
        

        if ($this->vie <= 0)
        {
            echo "<p>".$this->pseudo . " est mort</p>";
        } 

        else {
            echo "<p>".$this->pseudo . " a " . $this->vie . " points de vie restants </p>";
        }
    }
    
    public function soins()
    {
     $this->vie =100;
     
     $my_db=new PDO('mysql:host=192.168.1.28; dbname=objet; charset=utf8','root', 'root');
     $data_perso = $my_db->query("UPDATE `personnage` SET vie=".$this->vie." WHERE id=".$this->getId().";");
     $data_perso ->closeCursor();
        echo "<p>".$this->vie."</p>";
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function getId()
    {
        return $this->id;
    }
    
    
    public function afficherInfos()
    {
        echo "<p> Pseudo : " . $this->pseudo . ", Points de vie : " . $this->vie . "</p>";
    }
}


    
?>
