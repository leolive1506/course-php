<?php 

interface Veiculo {
    public function acelerar($vel);
    public function freiar($vel);
    public function trocarMarcha($marcha);
}


abstract class Automovel implements Veiculo {

    public function acelerar($velocidade) {
        echo "o veículo acelerou até {$velocidade} Km/h </br>";
    }
    
    public function freiar($vel) {
        echo "O veículo freiou até " . $vel . "Km/h </br>";
    }
    public function trocarMarcha($marcha) {
        echo "O veículo engatou a marcha </br>" . $marcha;
    }
    
    }

?>