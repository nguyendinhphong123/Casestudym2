<?php
class Animal {
    protected $name = '';
    private $color = '';
    public function say($nd) {
        echo $nd;
    }
    public function getName() {
        return $this->name;
    }
    public function getColor() {
        return $this->color;
    }
    public function setName($ts_name){
        $this->name = $ts_name;
    }
    public function setColor($ts_color){
        $this->color = $ts_color;
    }
}
// Khoi tao doi tuong
// $animal = new Animal();
// // thiet lap cac gia tri thuoc tinh
// $animal->setName('animal1');
// $animal->setColor('red');

// // Truy xuat cac thuoc tinh
// echo '<br>' . $animal->getName();
// echo '<br>' . $animal->getColor();
// // In ra doi tuong
// echo '<pre>';
// print_r($animal);
// echo '</pre>';