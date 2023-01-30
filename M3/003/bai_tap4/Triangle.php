<?php
class Triangle extends Shape {
    public float $side1 ;
    public float $side2 ;
    public float $side3 ;

    public function __construct(string $name,$side1,$side2,$side3){
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    public function getSide1(){
        return $this->side1;
    }
    public function getSide2(){
        return $this->side2;
    }
    public function getSide3(){
        return $this->side3;
    }
    public function setSide1($ts_side1){
        $this->side1 = $ts_side1;
    }
    public function setSide2($ts_side2){
        $this->side2 = $ts_side2;
    }
    public function setSide3($ts_side3){
        $this->side3 = $ts_side3;
    }
    public function getArea(){
       
    }
    public function getPerimeter(){
        return $this->side1 + $this->side2 + $this->side3;
    }
    public function toString() {
        return 'Cạnh 1 là: ' . $this->side1 . 'Cạnh 2 là: ' . $this->side2 . 'Cạnh 3 là: ' . $this->side3;
    }
    
}