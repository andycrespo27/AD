<?php 
	$numero=mt_rand(1,100);

	?>

	 <html>
    
    <p><b><u>Numero aleatorio entre 1 y 100 ambos incluidos</u></b></p>
    
    <h1><?php echo $numero ?>, 
	 <?php printf("%o",$numero) ?>, 
	 <?php printf("%b",$numero) ?>, 
	 <?php printf("%X",$numero) ?></h1>   
    
    </html>