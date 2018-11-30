<?php

require __DIR__."/Funcionario.php";
require __DIR__."/data.php";


$dani = new Funcionario();

$dani->nome = "Jacózinho";
$dani->departamento = "Financeiro";
$dani->salario = 10000;
$dani->cpf = "080.339.639-21";
$dani->recebeAumento();

$dataEntrada = new Data();
$dataEntrada->dia = 15;
$dataEntrada->mes = 01;
$dataEntrada->ano = 2002;

$dani->dataEntrada = $dataEntrada;

$aumento = $dani->recebeAumento();
$ganhoAnual = $dani->calculaGanhoAnual();
print_r($dani);

$fran = new Funcionario();

$fran->nome = "Claudinho";
$fran->departamento = "administrativo";
$fran->salario = 7000; 
$fran->cpf = "488.695.629-72";
$fran->recebeAumento();

$dataEntrada = new Data();
$dataEntrada->dia = 29;
$dataEntrada->mes = 01;
$dataEntrada->ano = 1999;

$fran->dataEntrada = $dataEntrada;

$aumento = $fran->recebeAumento();
$ganhoAnual = $fran->calculaGanhoAnual();
print_r($fran);


