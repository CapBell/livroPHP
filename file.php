<?php

// abre um arquivo 
$arquivo = file("objeto.php");
foreach ($arquivo as $linha) {
	print $linha;
}


?>