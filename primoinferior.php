<?php

echo PrimoInferior(30);
echo "<br>";

function PrimoInferior($numero){

	if($numero < 1) return 0;

	for($i = $numero; $i>0;$i--){
		
		$divisores= 0;
		
		for($j = $i; $j >= 1; $j--){
			if (($i % $j) == 0) {
	            $divisores++;
	        }
		}

		if ($divisores == 2){
	        return $i;
	    }
	}
}

?>
