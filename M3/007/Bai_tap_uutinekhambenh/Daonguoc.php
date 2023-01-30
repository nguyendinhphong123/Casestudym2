<?php
class Stack {
    private $stack = [];
    private $limit;

    public function __construct($limit){
        $this->limit = $limit;
    }
    // dua phan tu vao danh sach
    public function push($element){
       array_unshift($this->stack, $element);
    }
    // Lay phan tu ra khoi ngan xep
    public function pop(){
        $getElement = array_unshift($this->stack);
       array_push($this->stack, $getElement);
       return $this->stack;
    }
}

$test = new Stack(10);
$test->push(1);
$test->push(2);
$test->push(3);
$test->push(4);
$test->push(5);

var_dump($test->pop());
var_dump($test->pop());
var_dump($test->pop());
var_dump($test->pop());
echo "<pre>";
var_dump($test->pop());
echo "<pre>";