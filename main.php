<?php
require_once __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/src/ContaCorrente.php';
include __DIR__ . '/src/ContaPoupanca.php';

echo "<h3>Operações em Conta Corrente:</h3>";
$contaCorrente->getDetalhes();
$contaCorrente = new Corrente(100, 200, 300);
$contaCorrente->sacar(100);
$contaCorrente->depositar(200);

echo "<br>";

$contaPoupanca->getDetalhes();
echo "<h3>Operações em Conta Poupança:</h3>";
$contaPoupanca = new Poupanca(100, 200, 500);
$contaPoupanca->sacar(100);
$contaPoupanca->depositar(200);
