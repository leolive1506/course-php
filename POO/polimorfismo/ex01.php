<?php 

// não precisa ser abstrata
abstract class Animal {
    public function falar () {
        return "som";
    }

    public function mover() {
        return "Anda";
    }
}

class Cachorro extends Animal {
    // polimorfismo abaixo
    public function falar() {
        return "Late";
    }
    // irá retornar o mover na class pai (animal)
}

class Passaro extends Animal {
    public function falar() {
        return "Mia <br>";
    }

    public function mover() {
        return "Voa" . " e " . parent::mover();
    }
}


$dog = new Cachorro();
echo $dog->falar() . "<br>";
echo $dog->mover();

echo "<br> <hr> <br>";

$bird = new Passaro();
echo $bird->falar();
echo $bird->mover();
?>