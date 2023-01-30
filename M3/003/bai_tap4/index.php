<?php
include_once 'Shape.php';
include_once 'Triangle.php';

$triangle = new Triangle('Hình tam giác',1.0,1.0,1.0);
echo $triangle->toString() . '<br/>';
echo 'Chu vi hình tam giác là: ' . $triangle->getPerimeter();