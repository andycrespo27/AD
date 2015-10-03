<?php 
	

    $a=-1000;
    $b=1000;
	$numero1=mt_rand()/mt_getrandmax();

    $numero2=$a+mt_rand()/mt_getrandmax()*($b-$a);
    ?>
    

<html>

<b><?php echo "Numero real aleatorio entre 0 y 1: " ?></b><?php echo $numero1  ?><br><br>

<b><?php echo "Numero real aleatorio entre -1000 y 1000: " ?></b><?php echo $numero2  ?><br><br>

<b><?php echo "Segundo numero truncado a las milesimas: " ?></b> <?php echo round(($numero2>0)?$numero2-0.0005:$numero2+0.0005,3) ?> <br><br>

<b><?php echo "Segundo numero truncado a las decenas: " ?></b> <?php echo round(($numero2>0)?$numero2-5:$numero2+5,-1) ?> <br><br>



</html>