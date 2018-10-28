<?php

$arquivo = "abrir_arquivo3.txt";


if (unlink($arquivo)) {
	echo "Arquivo apagado com sucesso";
}else{
	echo "Arquivo não Apagado ";
}


?>