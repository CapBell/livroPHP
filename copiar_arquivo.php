<?php

$origem = "abrir_arquivo.txt";
$destino = "abrir_arquivo2.txt";

if (copy($origem, $destino)) {
	echo "Cópia efetuado com sucesso";
}else{
	echo "Cópia não efetuada ";
}


?>