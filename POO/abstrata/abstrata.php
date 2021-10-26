<?php 

interface Veiculo {
    public function acelerar($vel);
    public function freiar($vel);
    public function trocarMarcha($marcha);
}

// não pode intanciar um Automovel, tem que falar que Automovel que é
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

class DelRey extends Automovel {

    public function empurra() {
        echo "empurra";
    }

}

$carro = new DelRey();
$carro->acelerar(200);
$carro->empurra();
?>