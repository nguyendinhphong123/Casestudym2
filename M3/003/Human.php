<?php
include_once 'Animal.php';

class Human extends Animal {
    public function relax(){
        echo 'relax';
    }
}

// Khoi tao doi tuong
$human1 = new Human();
// thiet lap cac gia tri thuoc tinh
$human1->setName('nguyen van a');
$human1->relax();

// In doi tuong ra
echo '<pre>';
print_r($human1);
echo '</pre>';