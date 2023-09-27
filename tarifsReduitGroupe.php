<?php
     define( "PRIX_PAR_ADULTES" , 17 ) ;
     define(  "prix_reduit" , 15 ) ;
     echo " saisir le nombre d'adultes : \n" ;
     $nbAdultes = fgets ( STDIN ) ;
     if ($nbAdultes > 7) {
		 $calculePrix = ceil(7);
		 
		 
		 
		 
	else {
		 echo "Le montant de la traversée est de " , $calculePrix , " € pour tous les adultes. \n" ;
?>
