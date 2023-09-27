<?php
     echo " Saisir la vitesse en km\h : \n" ;
     $vitesse = fgets ( STDIN ) ;
     $vitesseEnNoeuds = $vitesse / 1.852 ;
     echo " résultat de la conversion : " , $vitesseEnNoeuds , " noueds\n" ;
?>
