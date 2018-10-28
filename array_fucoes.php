<?php 

$fruta = array();

$fruta['cor'] = 'vermelho';
$fruta['sabor'] = 'doce';
$fruta['nome'] = 'maça';

$carros = array();

$carros['Palio']['cor'] = 'Azul';
$carros['Palio']['potência'] = '1.0';
$carros['Palio']['opcionais'] = 'Ar Cond.';
$carros['Corsa']['cor'] = 'Vermelho';
$carros['Corsa']['potência'] = '1.2';
$carros['Corsa']['opcionais'] = 'mp3';

$mesclar = array_merge($carros, $fruta);
print_r($mesclar);
 ?>
