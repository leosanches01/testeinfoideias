<?php

	$array = [];

	for($i=1;$i<=20;$i++){
		$array[$i]= mt_rand(1,10);
	}

	print("<pre>".print_r($array,true)."</pre>");
	echo "<br>";

	$count = array_count_values($array);
	arsort($count);
	$keys = array_keys($count);

	echo "O número que mais se repete é o ".$keys[0].".<br>";
	echo "Ele se repete ".$count[$keys[0]]." vezes.";
	
?>
