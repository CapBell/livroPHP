<?php 
	$remove_acento = function($str){
		$a = array('Á', 'À', 'Â', 'Ã','Ç', 'É',
				   'È', 'Ê', 'Í', 'Ì','Ó', 'Ò',
				   'Ô', 'Õ', 'Ú', 'Ù', 'á', 'à',
				   'â', 'ã', 'ç', 'é', 'è', 'ê',
				   'í', 'ì', 'î', 'ó', 'ò', 'ô',
				   'õ', 'ú', 'ù', 'û');
		$b = array('A', 'A', 'A', 'A','C', 'E',
				   'E', 'E', 'I', 'I','O', 'O',
				   'O', 'O', 'U', 'U', 'a', 'a',
				   'a', 'a', 'c', 'e', 'e', 'e',
				   'i', 'i', 'i', 'o', 'o', 'o',
				   'o', 'u', 'u', 'u');

		return str_replace($a, $b, $str);
	};

	print $remove_acento('José da Conceição');
	print("<br>") . PHP_EOL;

	$palavras =  array ();

	$palavras[] = 'José da Conceição';
	$palavras[] = 'Jessé da Conceição';
	$palavras[] = 'Jéferson Araújo';
	$palavras[] = 'José da Conceição';

	$r = array_map(callback, arr1)
	//$r = array_map($remove_acento, $palavras);
	print_r($r);
 ?>
