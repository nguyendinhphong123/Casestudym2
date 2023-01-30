<?php
class Student {
    // Thuoc tinh
    public $name = "NVA";
    private $email = "";
    public static $class = "c10";

    // Phuong thuc
    private function work(){
        echo __METHOD__;
    }
    public static function getClass(){
        // echo __METHOD__;
        // In ra gia tri thuoc tinh cua class
        // echo Student::$class;
        echo self::$class;

        // in ra gia tri thuoc tinh email
        echo $this->name;
    }
}
// Khoi tạo đối tượng
$student = new Student();
// Truy cap thuoc tinh class
// echo Student::$class;
echo '<br/>';
// Truy cap phuong thuc getclass
Student::getClass();
