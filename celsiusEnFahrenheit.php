<?php
	echo "Saisir la température en °C :\n" ;
	$C = fgets( STDIN ) ; 
	$F = 1.8 * $C + 32;
	echo "La température en °F : " , $F , "\n" ; 
?>
