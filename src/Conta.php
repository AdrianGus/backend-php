<?php
namespace Classes;

abstract class Conta
{
  public $agencia;
  public $numero;
  public $saldo;

  public function __construct($agencia, $numero, $saldo)
  {
    $this->agencia = $agencia;
    $this->numero = $numero;
    $this->saldo = $saldo;
  }

  public function getDetalhes()
  {
    echo "Agência: {$this->agencia} | Conta: {$this->numero} | Saldo atual: B$ {$this->saldo} <br />";
  }

  public function depositar($valor) {
    $this->saldo += $valor;
    echo "Depósito de B$ {$valor} realizado com sucesso! <br />";
  }
  
}
?>
