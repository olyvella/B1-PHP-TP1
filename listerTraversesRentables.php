<?php 

	$nbPassagers =array (35,10,22,52,15,58,8,73) ;
	$nbTotal = 0 ; 
	$n = 0 ; 

	for($i = 0 ; $i < count($nbPassagers) ; $i = $i +1 ) {
		
		if ( $nbPassagers[$i] >= 20 ) {
			
			 $n = $i + 1 ; 
			 
			 echo $n ;
			
		  
		} 
			
	}
	
?>
