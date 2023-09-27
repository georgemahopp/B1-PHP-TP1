<?php
     define( "PRIX_PAR_GROUPES" , 15 ) ;
     define( "PRIX_PAR_ADULTES" , 15 )  ;
     define( "NBR_DE_PERSONNES" , 7 )  ;
     echo " saisir le nombre d'adultes : \n" ;
     $nbAdultes = fgets ( STDIN ) ;
     $supAsept = $nbAdultes - NBR_DE_PERSONNES ;
     $calculePrixReduit =  $nbAdultes + PRIX_PAR_ADULTES ;
     $calculePrixReduitcumuler = $calculePrixReduit + ( $supAsept * NBR_PAR_GROUPES ) ;
     if "NBR_DE_PERSONNES" >= 7 ;
		 echo "Le montant de la traversée est de " , $calculePrix , " € pour tous les adultes. \n" ;
	 else
	     echo "Le montant de la traversée est de " , $calculePrixReduitcumuler, " € pour tous les adultes. \n" ;
?>
     
