<?php

// informar que essa classe está em um namespace
// qual o namespace desse arquivo
namespace Cliente;


// se colocar so Cadastro ele extende da própria pasta
// pra voltar pra raiz (pasta class) da aplicação "\"
class Cadastro extends \Cadastro {

  public function registrarVenda() {

    echo "Foi registrada uma venda para o cliente " .$this->getNome();

  }
}

?>
