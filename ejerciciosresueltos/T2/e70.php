<?php
  
  $a=-100;
  $b=100;
  $c=1;
  $d=10;
  $numero1=$a+mt_rand()/mt_getrandmax()*($b-$a);
  $numero2=$c+mt_rand()/mt_getrandmax()*($d-$c);

?>

 <body>
    <b><?php $suma=$numero1+$numero2; 
    echo $numero1." + ".$numero2." = ".$suma ?></b><br>  

     <b><?php $resta=$numero1-$numero2; 
    echo $numero1." - ".$numero2." = ".$resta ?></b><br>  

     <b><?php $prod=$numero1*$numero2; 
    echo $numero1." * ".$numero2." = ".$prod ?></b><br>  

     <b><?php $div=$numero1/$numero2; 
    echo $numero1." / ".$numero2." = ".$div ?></b><br>

     <b><?php $resto=$numero1%$numero2; 
    echo $numero1." % ".$numero2." = ".$resto ?></b><br>  

     <b><?php
    echo "El opuesto de ".$numero1." es ".-$numero1 ?></b><br> 

     <b><?php $numero1++;
     $crec=$numero1;
    echo --$numero1."++ vale ".$crec ?></b><br> 

     <b><?php $decrec=--$numero1;
    $numero1++;
    echo $numero1."-- vale ".$decrec ?></b><br>  
    </body>
    </html>