<?php

$fd = fopen(__FILE__, "r");
$linha = 1;

while (!feof($fd)){
	$buffer = fgets($fd, 4096); //lê uma linha do arquivo
	if($linha > 1) {
		echo $buffer;
	}
	$linha ++;
}

fclose($fd);
	
?>