<?php

	$exemplos = [
		[1, 3, 2, 1], //false
		[1, 3, 2], //true
		[1, 2, 1, 2], //false
		[3, 6, 5, 8, 10, 20, 15], //false  
		[1, 1, 2, 3, 4, 4],  //false
		[1, 4, 10, 4, 2],  //false
		[10, 1, 2, 3, 4, 5], //true
		[1, 1, 1, 2, 3],  //false
		[0, -2, 5, 6], //true
		[1, 2, 3, 4, 5, 3, 5, 6],  //false
		[40, 50, 60, 10, 20, 30],  // false
		[1, 1], // true
		[1, 2, 5, 3, 5], //true 
		[1, 2, 5, 5, 5],  // false
		[10, 1, 2, 3, 4, 5, 6, 1], //false 
		[1, 2, 3, 4, 3, 6], // true
		[1, 2, 3, 4, 99, 5, 6], //true
		[123, -17, -5, 1, 2, 3, 12, 43, 45], //true
		[3, 5, 67, 98, 3] //true
	];


	foreach ($exemplos as $key => $value) {
		
		echo sequenciaCrescente($value);
		echo "<br>";
		
	}

	function sequenciaCrescente($array){
		
		$count_array = count($array);
		$temp_array = $array;
		$crescente = 0;
		

		for($i=0;$i<$count_array;$i++) {
			
			unset($temp_array[$i]);
			$temp_array2 = array_values($temp_array);
			$count_temp_array = count($temp_array);
			$verdadeiro = 0;
			
			for($j=0;$j<$count_temp_array-1;$j++){
				if($temp_array2[$j]<$temp_array2[$j+1]){
					$verdadeiro++;
				}
			}

			if($verdadeiro == $count_temp_array-1){
				$crescente++;
			}

			$temp_array = $array;	
		}

		if($crescente != 0){
			return "TRUE";
		}else{
			return "FALSE";
		}
	}
?>
