<?php

$dir = "php";


if (rmdir($dir)) {
	echo "Diretorio apagado com sucesso";
}else{
	echo "Diretorio não apagado";
}


?>