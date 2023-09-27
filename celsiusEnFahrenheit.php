<?php
     echo "Saisir la température en °C : \n" ;
     $celsius = rtrim( fgets (  STDIN  ) ) ;
     $fahrenheit = 1.8 * $celsius + 32 ;
     echo "Température en °F : " , $fahrenheit , "\n" ;
?>
