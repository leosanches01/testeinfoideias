<?php

echo SeculoAno(1);
echo "<br>";
echo SeculoAno(2);
echo SeculoAno(-10);
echo "<br>";
echo SeculoAno(100);
echo SeculoAno(101);
echo SeculoAno(1000);
echo SeculoAno(1001);
echo SeculoAno(2001);
echo SeculoAno(3000);
echo SeculoAno(3001);

function SeculoAno($ano){

	if($ano == 1){ return 1; }

	if($ano < 1){ return "null"; }

	$seculo = ((($ano-1)/100) + 1 );
	return floor($seculo)."<br>";
	
}

?>
