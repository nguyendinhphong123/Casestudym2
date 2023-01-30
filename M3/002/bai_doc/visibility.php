<?php
class House {
    private string $color = '';
    private array $allowedColor = ['black', 'blue', 'red','green'];
    // thiet lap thuoc tinh
    public function setColor($color) {
        // Chuyen ve chu thuong
        $color = strtolower($color);
        // Kiem tra color co nam trong mang allowedColor hay không?
        if(in_array($color,$this->allowedColor)){
            $this->color = $color;
        }
    }// Tra ve gia tri thuoc tinh
    public function getColor(): string {
        if($this->color){
            return $this->color;
        }else{
            return 'No color is set. May be you have set a color which is not allowed';
        }
    }
}
// ví dụ 1
$house1 = new House();
$house1->setColor('black');
echo $house1->getColor();
echo '<br>';
$house2 = new House();
$house2->setColor('yellow');
echo $house2->getColor();