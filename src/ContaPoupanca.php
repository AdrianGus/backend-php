<?php
require_once("Conta.php");

class Poupanca extends Conta
{
  private $limite = 1000;
  private $taxa = 0.80;

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
        echo "O Valor excede o limite de saque! <br />";
      }
    }
    else {
      echo "Saldo insuficiente! <br />";
    }
  }
}
?>