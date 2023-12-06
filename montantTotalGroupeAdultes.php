<?php
	echo "Saisir le nombre d'adultes:\n" ;
	$nbradlt = fgets( STDIN ) ; 
	$nbradlt = $nbradlt* 17;
	echo "Montant a payer par le groupe: " , $nbradlt , " €/n" ; 
?>
