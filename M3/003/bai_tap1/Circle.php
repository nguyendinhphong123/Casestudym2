<?php
class Circle extends Shape {
    public $radius;
    public $color = '';
    
    public function __construct(string $name, $radius, $color){
        parent::__construct($name);
        $this->radius = $radius;
        $this->color = $color;
    }
    public function getRadius() {
        return $this->radius;
    }
    public function getColor() {
        return $this->color;
    }
    public function setRadius($ts_radius) {
        $this->radius = $ts_radius;
    }
    public function setColor($ts_color) {
        $this->color = $ts_color;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
    public function toString() {
        return $this->radius.' màu:'.$this->color;
    }
}


