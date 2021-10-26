<?php 

interface Veiculo {
    public function acelerar($vel);
    public function freiar($vel);
    public function trocarMarcha($marcha);
}

// se não colocar todos os requisitos da interface, dará um erro
class Civic implements Veiculo {

    public function acelerar($velocidade) {
        echo "o veículo acelerou até {$velocidade} Km/h";
    }

    public function freiar($vel) {
        echo "O veículo freiou até " . $vel . "Km/h";
    }
    public function trocarMarcha($marcha) {
        echo "O veículo engatou a marcha" . $marcha;
    }
    
}

$carro = new Civic();
$carro->acelerar(100);
$carro->freiar(100);
$carro->trocarMarcha(2);

?>