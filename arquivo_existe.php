<?php

$arquivo = "abrir_arquivo2.txt";


if (file_exists($arquivo)) {
	echo "Arquivo existe";
}else{
	echo "Arquivo não existe ";
}


?>