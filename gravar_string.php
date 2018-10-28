<?php

$fp = fopen("abrir_arquivo.txt","w");// abre o arquivo para gravação

//escreve no arquivo
fwrite($fp, "linha 1" . PHP_EOL);
fwrite($fp, "linha 2" . PHP_EOL);
fwrite($fp, "linha 3" . PHP_EOL);

fclose($fp);


?>