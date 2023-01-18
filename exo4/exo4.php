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
        $a= rand ( 1 , 100 );;
        $b= rand (-100,100);
        $c= rand (-100,100);
        $delta=$b**2-4*$a*$c; 
        echo "<p>l'équation de second degre a résoudre est".$a."x²".$b."x".$c."=0 </p>";

        echo "<p> Donc A=".$a." B= ".$b." c= ".$c."</p>";

        echo"<p>le résultat est ".$delta."</p>";

        if($delta>0)
        {
            echo "delta est suppérieur a 0 de se fait il y a 2 solution";
            $delta1= -$b-sqrt($delta)/2*$a;
            $delta2= -$b+sqrt($delta)/2*$a;
            echo"<p>R1 est égale a ".$delta1." R2 et égale a ".$delta2."</p>";
        }
        if($delta==0)
        {
            echo "delta est égale a 0 de se fait il y a 1 solution";
            $delta1= -$b/2*$a;
           
            echo"<p>R1 est égale a ".$delta1."</p>";
        }
        if($delta<0)
        {
            echo "<p>delta est inférieur a 0 de se fait il n'y a pas de solution</p>";
        }
    
    ?>
</body>
</html>