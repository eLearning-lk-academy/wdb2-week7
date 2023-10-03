<?php
include 'helpers.php';
abstract class CarTemp{
    public $brand;

    abstract public function setBrand();
}

class Car extends CarTemp{
    public function setBrand(){
        $this->brand = 'BMW';
    }
}

$car = new Car;
$car->setBrand();
d($car);

interface Vehicle{
    public function setNumOfWheels();
}

class Bicycle implements Vehicle{
    public function setNumOfWheels(){
        p('2 wheels');
    }
}

class truck implements Vehicle{
    public function setNumOfWheels(){
        p('10 wheels');
    }
}

$bike = new Bicycle;
$bike->setNumOfWheels();

$truck = new Truck;
$truck->setNumOfWheels();


trait LivingThings{
    public $dna;

    public function living(){
        echo 'I am living';
    }
}

trait Animal{
    public $numOfLegs;
}

trait MicroOrganism{
    public $numOfCells;
}

class Human{
    use LivingThings;
    use Animal;

    public function __construct(){
        $this->dna = 'ATCG';
        $this->numOfLegs = 2;
    }
}

class Bacteria{
    use LivingThings;
    use MicroOrganism;

    public function __construct(){
        $this->dna = 'ATCG';
        $this->numOfCells = 1;
    }
}

$human = new Human;
d($human);
$human->living();

$bacteria = new Bacteria;
d($bacteria);

