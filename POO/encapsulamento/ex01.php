<?php 

class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados() {

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}


$obj = new Pessoa();
// echo $obj->nome;
// nao da pra acessar esses abaixos
// echo $obj->idade;
// echo $obj->senha;

$obj->verDados();
?>