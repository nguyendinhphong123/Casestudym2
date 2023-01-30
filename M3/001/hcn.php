<?php
class Rectangle {
    public $width;
    public $height;
    // Phuong thuc khoi tao dung de thiet lap cac gia tri thuoc
    public function __construct($width,$height){
        $this->width = $width;
        $this->height = $height;
    }
    // Tinh dien tich
    public function getArea(){
        return $this->width * $this->height;
    }
    // Tinh chu vi
    public function getPerimeter(){
        return (($this->width + $this->height) * 2);
    }
    public function display(){
        return "Rectangle{" . "widtd=" . $this->width . ", height=" . $this->height . "}";
    }
}
$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo $rectangle->width;
echo $rectangle->height;

$rectangle->height = 30;
$rectangle->width = 20;

echo $rectangle->width;
echo $rectangle->height;
echo $rectangle->getPerimeter();
echo $rectangle->getArea();
echo ("Your Rectangle" . $rectangle->display());