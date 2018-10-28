<?php 
	$carro = new stdClass;
	$carro->modelo = 'Palio';
	$carro->ano = '2002';
	$carro->cor = 'Azul';

	print_r($carro);

	print $carro->modelo . ' ';
	print $carro->ano . ' ';
	print $carro->cor . ' ';


 ?>