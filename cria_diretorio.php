<?php

$dir = "php";


if (mkdir($dir, 0777)) {
	echo "Diretorio Criado com sucesso";
}else{
	echo "Diretorio não Criado";
}


?>