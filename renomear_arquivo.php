<?php

$origem = "abrir_arquivo2.txt";
$destino = "abrir_arquivo3.txt";

if (rename($origem, $destino)) {
	echo "Renomeção efetuada";
}else{
	echo "Renomeção não efetuada ";
}


?>