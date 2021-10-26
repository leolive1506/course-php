<?php 

class Endereco {
    
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($log, $num, $cid){
        
        $this->logradouro = $log;
        $this->numero = $num;
        $this->cidade = $cid;

    }

    public function __destruct()
    {
        // var_dump("DESTRUIR");
    }

    public function __toString() {
        return $this->logradouro. ", ". $this->numero." - ". $this->cidade;
    }
}


$meuEnd = new Endereco("Rua Veridiano Teodoro dos Santos", "1244", "UDI");

// echo precisa de uma string

echo $meuEnd;


// var_dump($meuEnd);

// unset($meuEnd)
?>