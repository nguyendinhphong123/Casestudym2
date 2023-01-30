<?php
include_once 'Animal.php';
class Cat extends Animal {
    public function __construct($ts_name) {
        echo '<br>' .__METHOD__;
        $this->name = $ts_name;
    }
    public function say($nd,$name ="") {
        echo '<br>' .__METHOD__;
        // Tai su dung phuong thuc lop cha
        // parent::say($nd);
        // if($name){
        //     echo $name;
        // }else{
        //     echo $this->name;
        // }
        // echo '<br> Cat: ' . $nd;
    }
    public function __destruct() {
        echo '<br>'.__METHOD__;
        $this->name = '';
    }
}
// Khoi tao doi tuong
$cat = new Cat('jjhj');
// $cat->setName('miumiu');
// // Goi phuong thuc
// $cat->say('meomeo','miule');
// __destruct
