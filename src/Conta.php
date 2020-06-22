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
    if($valor > 0) {
      $this->saldo += $valor;
      echo "Depósito de B$ {$valor} realizado com sucesso! <br />";
    }
    else {
      echo "Depósito não realizado! O valor mínimo de depósito é B$ 1,00";
    }
  }
  
}
?>
