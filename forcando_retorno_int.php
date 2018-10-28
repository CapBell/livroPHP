<?php 
	function calcula_imc(float $peso, float $altura):int {
		var_dump($peso, $altura);
		return $peso / ($altura * $altura);
	}

	var_dump(calcula_imc(75, 1.85));
 ?>
