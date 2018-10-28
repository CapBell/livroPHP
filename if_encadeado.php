<?php 
	$salario = 1020;
	$tempo_servico = 12;
	$tem_reclamacoes = false;

	if($salario > 1000){
		if($tempo_servico >= 12){
			if ($tem_reclamacoes != true) {
				echo 'Parabéns, você foi promovido <br>'. PHP_EOL;
			}
		}
	}

	if(($salario > 1000) and ($tempo_servico >=12) and ($tem_reclamacoes != true)){
		echo 'Parabéns, você foi promovido <br>'. PHP_EOL;
	}
 ?>
