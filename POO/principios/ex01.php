<?php 

class Pessoa {
    
    public $nome; // Atributo

    public function falar() { // método
        
        return "O meu nome é " .$this->nome;
    }

}

$leo = new Pessoa();
$leo->nome = "Leo";
echo $leo->falar();

?>
