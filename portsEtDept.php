<?php
	echo "Saisir le nom du port \n";
	$nomport = rtrim( fgets( STDIN) );
	
	if string( $nomport  <0 ) {
		echo "Vitesse : 0 noeuds\n";
	}
	elseif( $nomport  >=0 ) {
			echo "Vitesse :", "$nomport ", " noeuds\n";
	}
?>
