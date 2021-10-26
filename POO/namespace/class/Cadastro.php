<?php

class Cadastro {
    private $nome;
    private $email;
    private $senha;

    // getters
    public function getNome():string {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }



    // setters
    public function setNome($name) {
        $this->nome = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($password) {
        $this->senha = $password;
    }


    // metodo magico __toString()
    // echo não mostra obj, transforma em array pra visualizar
    public function __toString() {
        return json_encode(array(
            "nome"=>$this->getNome(),
            "e-mail"=>$this->getEmail(),
            "senha"=>$this->getSenha(),
        ));
    }
}

?>
