<?php
include 'helpers.php';

class Car {
    public $brand;
    private $model;
    public $color;
    const WHEELS = 4;

    public function __construct($brand="BMW",$model=null,$color=null){
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }
    public function __destruct(){
        echo 'Bye bye '.$this->color.' color '.$this->brand.' '.$this->model.'.<br>';
    }
    
    public function setModel($model){
        $this->model = $model;
    }

    protected function getModel(){
        return $this->model;
    }

    function setColor($color){
        $this->color = $color;
    }

    function sayHello(){
        echo 'Say hello to '.$this->color.' color '.$this->brand.' '.$this->getModel().'.';
    }

}

/*
$car1 = new Car("BMW");
d($car1->brand);
d($car1->setModel('i3'));
// d($car1->getModel());

$car2 = new Car;
$car2->setModel('7 series');
// d($car2->getModel());
$car2->setColor('Black');
d($car2);
$car2->sayHello();

$car2->brand = 'Toyota';
$car2->color = 'red';
d($car2);
$car2->sayHello();

d($car1 instanceof Car);

hr();

$car3 = new Car('Toyota','Camry','White');
$car3->sayHello();
d($car3->color);
// d($car3->model);
hr();
*/


class SportCar extends Car{
    public $speed;

    public function __construct($brand="BMW",$model=null,$color=null,$speed=0){
        parent::__construct($brand,$model,$color);
        $this->speed = $speed;
    }

    public function sayHello(){
        echo 'Say hello to '.$this->color.' color '.$this->brand.' '.$this->getModel().' with '.$this->speed.' km/h speed and has '.self::WHEELS.' wheels.<br>';
    }
}

p(Car::WHEELS);

$car4 = new SportCar('Ferrari','F8','Red',340);
$car4->sayHello();
d($car4::WHEELS);
hr();
