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
class Personnage {
    private $vie = 100;
    private $pseudo;
    
    public function __construct($pseudo) {
        $this->pseudo = $pseudo;
    }
    
    public function afficherInfos() {
        echo "Pseudo : " . $this->pseudo . ", Points de vie : " . $this->vie . "\n";
    }
}

?>
</body>
</html>