<?php

class Square extends Rectangle implements Colorable
{
    public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }
//    public function resize($percent){
//       // $percen = rand(1,100)*0.01;
//       $AreaNew = $this->calculateArea()*$percent + $this->calculateArea();
//       $PerimeterNew = $this->calculatePerimeter()*$percent + $this->calculatePerimeter();
//       // TODO: Implement resize() method.
//       return "diện tích sau khi resize la: ".$PerimeterNew." -chu vi sau khi resize la : ".$AreaNew;
//    }
    public function howToColor(){
        echo 'Color all four sides..';
    }
}