<?php
class QuadraticEquation{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getA(){
        return $this->a;
    }
    public function getB(){
        return $this->b;
    }
    public function getC(){
        return $this->c;
    }
    public function getDiscriminant(){
        return $delta = (($this->b * 2) - (4 * $this->a * $this->c));
    }
    public function getRoot(){
        if( $this->getDiscriminant()> 0 ){
           echo (-$this->getB()- sqrt($this->getDiscriminant()))/2*$this->getA() ." VÀ ". 
            (-$this->getB()+ sqrt($this->getDiscriminant()))/2*$this->getA();
        }else if( $this->getDiscriminant() ==0){
           echo -$this->getB()/ 2*$this->getA();
        }else {
           echo "phương trình vô nghiệm";
        }
    }
}
// Khoi tao doi tuong
$quadraticEquation = new QuadraticEquation(2,12,1);
// Goi phuong thuc thiêt lập giá trị thuoc tinh
// goi phuong thuc thiet lap gia tri 
echo $quadraticEquation->getA();
echo '<br>';
echo $quadraticEquation->getB();
echo '<br>';
echo $quadraticEquation->getC();
echo '<br>';
    
// goi phuong thuc thiet lap gia tri getDiscriminant 
echo $quadraticEquation->getDiscriminant();
echo '<br>';
// goi phuong thuc thiet lap gia tri  getroot
echo $quadraticEquation->getRoot();
