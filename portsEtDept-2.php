<?php
	echo "Saisir le nom du port :\n";
	$nomPort = strtolower( rtrim( fgets( STDIN) ));
	
	if ($nomPort== "quiberon" || $nomPort ==  "sauzon" || $nomPort == "lepalais") {
			$nomDept = " Morbihan " ;
			echo "Departement : ", "$nomDept", "\n";
	}	
	elseif ($nomPort == "concarneau" || $nomPort == "douarnenez" ) {
				$nomDept = " Finistere " ;
				echo "Departement : " , "$nomDept", "\n";
	}
	elseif ($nomPort == "piriac-sur-Mer" || $nomPort == "pornic" ) { 
				$nomDept = " Loire-Atlantique " ;
				echo "Departement : " , "$nomDept", "\n";				
	}
	elseif ($nomPort == "ile-d'Yeu") {
				$nomDept = " Vendée" ;
				echo "Departement : " , "$nomDept", "\n";
	}
	else {
		echo " Port non recensé \n" ;
	} 
			
?>
