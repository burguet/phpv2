<?php
class Personnage { //création fonction
    private $vie = 100;
    private $pseudo;
    
    public function __construct($Pseudo) {
        $this->pseudo = $Pseudo;
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