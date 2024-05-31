<?php

// Definição da classe
class Conta {
    // Atributos
    public $numero;
    public $banco;
    public $saldo;

    // Construtor para inicializar os atributos
    
    public function __construct($numero, $banco, $saldo) {
        $this->numero = $numero;
        $this->banco = $banco;
        $this->saldo = $saldo;
    }

    // Método para depositar
    public function depositar($valor) {
        $this->saldo += $valor;  // Incrementa o saldo com o valor do depósito
    }

    // Método para obter o saldo
    public function obterSaldo() {
        return $this->saldo;
    }
}

?>