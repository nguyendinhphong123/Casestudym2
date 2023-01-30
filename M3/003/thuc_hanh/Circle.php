<?php

class Circle extends Shape {
    public int|float $radius;
    
    public function __construct(string $name, int|float $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea
}