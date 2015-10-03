<?php

  $numero=mt_rand(1,10);

?>


<html>

<?php  

  if($numero%2==0){
  	echo $numero." es par";
  }
  else{
  	echo $numero." es impar";
  }

  ?>


</html>