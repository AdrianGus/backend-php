<?php
require_once __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/src/ContaCorrente.php';
include __DIR__ . '/src/ContaPoupanca.php';

$contaCorrente = new Corrente(100, 200, 300);
$contaCorrente->getDetalhes();

$contaPoupanca = new Corrente(100, 200, 500);
$contaPoupanca->getDetalhes();
