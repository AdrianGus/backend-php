<?php
class Conta
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
    echo "Detalhes da conta: Agência: {$this->agencia} | Conta: {$this->numero} | Saldo atual: B$ {$this->saldo} <br />";
  }

  public function depositar($valor) {
    if($valor > 0) {
      $this->saldo += $valor;
      echo "Depósito de B$ {$valor} realizado com sucesso! <br />";
      echo "Saldo atual: B$ {$this->saldo} <br />";
    }
    else {
      echo "Depósito não realizado! O valor mínimo de depósito é B$ 1,00";
    }
  }

  public function transferencia($valor, $contaDestino) {
    if($this->saldo > 0 && $this->saldo > $valor) {
      $this->saldo -= $valor;
      if($contaDestino != $this->numero) {
        $numContaDestino = $contaDestino;
        // Como o sistema não têm integração com BD, esse script cria uma conta de destino temporária com o número e os valor de transferência enviado.
        $contaDestino = new Conta(100, $numContaDestino, $valor);
        echo "Transferência de B$ {$valor} realizada com sucesso para a conta de número {$numContaDestino}! <br />";

        // Exibe o saldo atual da conta de destino (em um caso real esse script pode ser desconsiderado) 
        echo "Dados da conta de destino:";
        echo $contaDestino->getDetalhes();
      }
      else {
        echo "Transferência não realizada! O número das contas não podem ser iguais. <br />";
      }
    }
    else {
      echo "Transferência não realizada! Saldo insuficiente. <br />";
    }
  }
}
?>
