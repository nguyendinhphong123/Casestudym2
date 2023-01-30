<?php
class MyList {
    public $size;
    public array $elements = [];
    // public array $originArray;

    public function __construct($size){
        $this->size = $size;
       
    }
    // Them du lieu tại vị trí
    public function insert($index,$obj){
        return $this->elements[$index] = $obj;
    }
    // Them phan tu vao mang
    public function add($obj){
        array_push($this->elements,$obj);
    }
    // Xoa phan tu tai vi tri
    public function remove($index){
        if( isset($this->elements[$index])){
            array_splice($this->elements,$index,1);
        }else{
            echo 'Chi so khong ton tai';
        }
    }
    // Lay phan tu tai vi tri
    public function get($index){
        return $this->elements[$index];
    }
    // Lam rõng mảng
    public function clear(){
        $this->elements = [];
    }
    // Thêm tất cả phần tử vào mảng
    public function addAll($arr){
        $this->elements = array_merge($this->elements, $arr);
    }
    // Tim kiem mot phan tu trong mảng
    public function indexOf($obj){
        if(!$this->isEmpty()){
            return array_search($obj, $this->elements);
        }else{
            return -1;
        }
    }
    // Kiểm tra tồn tại rỗng hay không
    public function isEmpty(){
        if(empty($this->elements)){
            
            echo 'Mảng rỗng';
        }else{
            echo 'Mảng có phần tử';
            return false;
        }
    }
    // Sắp xếp các phần tử từ thấp đến cao
    public function sort(){
        if(!$this->isEmpty()){
            rsort($this->elements);
        }else{
            echo 'Mảng trống';
        }
    }
    // Đặt lại
    public function reset(){
        reset ($this->elements);
    }
    // Trả về độ dài
    public function size(){
        return count($this->elements);
    }
}

$mylist = new MyList(6);

//Goi phuong thuc add
$mylist->add('Phong');
$mylist->add('x');
// $mylist->add('x');

// Them du lieu
$mylist->insert(2,'Nho');

// Xoa phan tu tai vi tri
// $mylist->remove(1);
// Lay doi tuong tai vi tri
//  echo $mylist->get(1);
// Làm rỗng mảng
// $mylist->clear();
// Thêm tất cả các phần tử vào mảng
$mylist->addAll(['Phi','Khang','Huy']);
// Tim kiem mot phan tu trong mang
// echo $mylist->indexOf('Nho');
// Kiem tra ton tai rong hay khong
// $mylist->isEmpty();
// Sắp xếp các phần tử từ thấp đến cao
// $mylist->sort();
// Đặt lại
$mylist->reset();
// Trả về độ dài
echo $mylist->size();
//In doi tuong ra
echo '<pre>';
print_r($mylist);
echo '</pre>';
