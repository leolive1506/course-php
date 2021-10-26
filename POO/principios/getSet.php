<?php 

// geters e seters
class Carro {

    private $modelo;
    private $motor; 
    private $ano;
    
    // pra cada atributo
    // dois metodos, um pra pegar o valor
    public function getModelo() {
        return $this->modelo;
    }
    
    // outro pra definir valor
    public function setModelo($modelValue) {
        $this->modelo = $modelValue;
        // atributo($modelo) recebe o valor do parametro($modelValue)
    }

    // cast - moldagem de tipo, neses caso de string->int
    public function getMotor():float {
        return $this->motor;
    }

    public function setMotor($motorValue) {
        $this->motor = $motorValue;
    }

    // cast - moldagem de tipo, neses caso de string->int
    public function getAno():int {
        return $this->ano;
    }

    // return so tem quando devolve o atributo pra ser exibido, manipulado pelo objeto que instancia a class
    public function setAno($anoValue) {
        $this->ano = $anoValue;
    }

    public function valueTotal() {
        return array(
            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
        );
    }

}

$gol = new Carro();
$gol->setModelo("Model");
$gol -> setMotor("1.6");
$gol->setAno("2017");
var_dump($gol->valueTotal())

?>