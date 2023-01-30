<?php
include_once 'Shape.php';
include_once 'Circle.php';
include_once 'Cylinder.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $radius = $_REQUEST['radius'];
        $color = $_REQUEST['color'];


 

$circle = new Circle('Hình tròn', $radius, $color);
echo 'Bán kính là : ' . $circle->toString(). '<br/>';
echo 'Diện tích hình tròn: ' . $circle->calculateArea()  . '<br/>';
echo 'Chu vi hình tròn: ' . $circle->calculatePerimeter(). '<br/>';

// $cylinder = new Cylinder('Hình trụ',3,'black',4);
// echo 'Bán kính là: ' . $cylinder->toString() . '<br/>';
// echo 'Diện tích hình trụ: ' . $cylinder->calculateArea() . '<br/>';
// echo 'Chu vi hình trụ: ' . $cylinder->calculatePerimeter() . '<br/>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       <table>
        <h2>Hình tròn</h2>
        <tr>
            <td>Bán kính</td>
            <td><input type="text" name="radius" placeholder="Nhập bán kính"></td>
        </tr>
        <tr>
            <td>Màu sắc</td>
            <td><input type="text" name="color" placeholder="Nhập màu sắc"></td>
        </tr>
        <tr>
            <td><input type="submit" name="" value="Tính"></td>
        </tr>
       </table>
    </form>
</body>
</html>