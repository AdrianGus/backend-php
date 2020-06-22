<?php
require_once __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/src/ContaCorrente.php';
include __DIR__ . '/src/ContaPoupanca.php';

echo "<h3>Operações em Conta Corrente:</h3>";
$contaCorrente = new Corrente(100, 200, 300);
$contaCorrente->getDetalhes();
$contaCorrente->sacar(100);
$contaCorrente->depositar(200);

echo "<br>";

echo "<h3>Operações em Conta Poupança:</h3>";
$contaPoupanca = new Poupanca(100, 200, 500);
$contaPoupanca->getDetalhes();
$contaPoupanca->sacar(100);
$contaPoupanca->depositar(200);
