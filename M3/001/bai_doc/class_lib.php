<?php
class Person {
    public $name;
    public $height;
    protected $socialInsurance;
    private $pinNumber;


    function __construct($personsName){
        $this->name = $personsName;
    }
    private function getPinNumber(){
        return $this->pinNumber;
    }
}