<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$nome = $_POST['nome'];
$data = date('d/m/Y');
$imc = $peso / (($altura/100)**2);
$id = ($peso*$altura);

$linha ='ID:'. $id . ';' .'Nome:'. $nome .';' .'Peso:' . $peso  .';'.'Altura:'. $altura .';' .'IMC:'. $imc . ';' . 'Data:'. $data . ';' . PHP_EOL;

file_put_contents('IMC.csv', $linha, FILE_APPEND);

header('Location: /sucesso.html');
