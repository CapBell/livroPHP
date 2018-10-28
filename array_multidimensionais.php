<?php 

$carros = array();

$carros['Palio']['cor'] = 'Azul';
$carros['Palio']['potência'] = '1.0';
$carros['Palio']['opcionais'] = 'Ar Cond.';
$carros['Corsa']['cor'] = 'Vermelho';
$carros['Corsa']['potência'] = '1.2';
$carros['Corsa']['opcionais'] = 'mp3';

foreach ($carros as $modelo => $caracteristicas){
	echo "=> modelo $modelo<br>\n";
	foreach ($caracteristicas as $caracteristicas => $valor) {
		echo " - características $caracteristicas => $valor <br>\n";
	}
}

 ?>
