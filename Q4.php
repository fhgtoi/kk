<?php
class Aeroporto{
public $nome;
public $cidade;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($e){
        $this->nome = $e;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($s){
        $this->cidade = $s;
    }
}
?>