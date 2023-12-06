<?php
	echo "Saisir la devise : " ;
	$deviseSaisie = strtoupper(rtrim( fgets( STDIN ) ) );
    $devise = strtoupper( $deviseSaisie  ) ;
	
	switch ($devise) {
	
		case "USD" :
			$tauxChange = 0.883 ;
			echo " Le taux de change est ", $tauxChange, "\n" ;
			break;
		
		case "CAD" : 
			$tauxChange = 0.686 ;
			echo " Le taux de change est ", $tauxChange, "\n" ;
			break;
			
		case "GBP" :
			$tauxChange = 1.154 ;
			echo " Le taux de change est ", $tauxChange, "\n" ;
			break;
			
		case "RUB" :
			$tauxChange = 0.013 ;
			echo " Le taux de change est ", $tauxChange, "\n" ; 
			break; 
		
		default :
			$tauxChange = 0 ;
			echo " Devise inconnue ", "\n" ;
			
	}
		
		echo " Saisir le prix en " , $devise , ": " ; 
		$prix = rtrim(fgets(STDIN) ) ; 
		
		if ( is_numeric ($prix) ) {
			
			$prixEuros = $prix * $tauxChange ; 
			echo "Prix en euros : ", $prixEuros , "£.\n" ; 
		}
		
		else {
			echo "La valeur saisie ne correspond pas à un prix.\N" ; 
		}
			
		
	
?>
