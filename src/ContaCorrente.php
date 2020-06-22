<?php
require_once("Conta.php");

class Corrente extends Conta
{
  private $limite = 600;
  private $taxa = 2.50;

  public function __construct($agencia, $numero, $saldo)
  {
      parent::__construct($agencia, $numero, $saldo);
  }

  public function sacar($valor) {
    if($valor <= ($this->saldo - $this->taxa)) {
      if($valor <= $this->limite) {
        $this->saldo -= $valor;
        $this->saldo -= $this->taxa;
        echo "Saque de B$ {$valor} realizado com sucesso! <br />";
        echo "Saldo atual: B$ {$this->saldo} <br />";
      }
      else {
        echo "Saque não realizado! O Valor excede o limite de saque. <br />";
      }
    }
    else {
      echo "Saque não realizado! Saldo insuficiente. <br />";
    }
  }
}
?>