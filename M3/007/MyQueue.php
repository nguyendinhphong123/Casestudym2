<?php
class MyQueue {
    private $elements = [];
    private $limit;

    public function __construct($limit){
        $this->limit = $limit;
    }

    // them phan tu vao hang doi
    public function enqueue($item){
        array_push($this->elements, $item);
    }
    // Xoa phan tu tu hang doi
    public function dequeue(){
        return array_shift($this->elements);
    }
    // Xem phan tu dau tien cua ngan xep
    public function peek(){
        return current($this->elements);
    }
    // Kiem tra rong
    public function isEmpty(){
        if(count($this->elements) == 0){
            return true;
        }
        return false;
    }
}
// Khoi tao khoi tuong
$myqueque = new MyQueue(5);
// Them lan luot Huyen, Nho, Phong
$myqueque->enqueue('Huyen');
$myqueque->enqueue('Nho');
$myqueque->enqueue('Phong');
$myqueque->enqueue('Tam');
//Xoa phan tu tu hang doi
echo $myqueque->dequeue();
// Lay ra phan tu tren cung ma khong xoa
echo $myqueque->peek();
// Xem danh sach co rong khong
var_dump($myqueque->isEmpty());

// In doi tuong ra
echo '<pre>';
print_r($myqueque);
echo '</pre>';