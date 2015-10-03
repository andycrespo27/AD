<?php 
	$numero1=mt_rand(-100,100);
    $numero2=mt_rand(1,100);
    ?>
    
    <html>
    
    
    <body>
    <?php $suma=$numero1+$numero2; 
    echo $numero1." + ".$numero2." = ".$suma ?><br>  

    <?php $resta=$numero1-$numero2; 
    echo $numero1." - ".$numero2." = ".$resta ?><br>  

    <?php $prod=$numero1*$numero2; 
    echo $numero1." * ".$numero2." = ".$prod ?><br>  

    <?php $div=$numero1/$numero2; 
    echo $numero1." / ".$numero2." = ".$div ?><br>

    <?php $resto=$numero1%$numero2; 
    echo $numero1." % ".$numero2." = ".$resto ?><br>  

    <?php
    echo "El opuesto de ".$numero1." es ".-$numero1 ?><br> 

    <?php $numero1++;
     $crec=$numero1;
    echo --$numero1."++ vale ".$crec ?><br> 

    <?php $decrec=--$numero1;
    $numero1++;
    echo $numero1."-- vale ".$decrec ?><br>  
    </body>
    </html>