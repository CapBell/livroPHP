<?php

$arquivo = "abrir_arquivo.txt";


if (is_file($arquivo)) {
	echo "é um arquivo";
}else{
	echo "Não é um arquivo";
}


?>