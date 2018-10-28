<?php

$dir = "/";


if (is_dir($dir)) {
	$linhas = scandir($dir);

	foreach ($linhas as $linha) {
		print( $linha . "<br>" . PHP_EOL);
	}
}


?>