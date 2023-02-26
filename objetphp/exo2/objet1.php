<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Personnage 
    {
        private $Pseudo;
        private $Vie;
      
        public function __construct() 
        {
            $this->Vie = 100;
            echo "<p>".$this->Vie."</p>";
            
        }
      }
      
    ?>
</body>
</html>