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
        public $Pseudo;
        public $Vie;
      
        public function __construct() 
        {
            echo "bonjour";
            $this->Vie = 100;
        }
      }
      
    ?>
</body>
</html>