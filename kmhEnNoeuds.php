<?php
	echo "Saisir la vitesse en km/h :\n" ;
	$vitessekm = fgets( STDIN ) ; 
	$vitesseh = $vitessekm / 1.852;
	echo "Resultat de la conversion: " , $vitesseh , " noeuds\n" ; 
?>
