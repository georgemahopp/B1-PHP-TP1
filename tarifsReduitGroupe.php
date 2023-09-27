<?php
     define( "PRIX_PAR_GROUPE" , 18 ) ;
     define( "PRIX_REDUIT_GROUPE" , 15 )  ;
     echo " saisir le nombre d'adultes : \n" ;
     $nombreAdultes = fgets ( STDIN ) ;
     
     $nbAdultesReduit = min($nombreAdultes, 7); 
     
     $nbAdultesNormal = $nombreAdultes - $nbAdultesReduit;
     
     $montantApplique = ($nbAdultesReduit * PRIX_REDUIT_GROUPE) + ($nbAdultesNormal * PRIX_PAR_GROUPE);
     
     echo "Montant à régler est de : ", $montantApplique, " €\n";
?>
