<?php
// Lop chưa du lieu
class ArrayList {
    // Thuoc tinh luu tru du lieu
    public array $elements = [];
    public $limit;

    public function __construct($limit){
        $this->limit = $limit;
    }

    // Them phan tu vao mảng (danh sach)
    public function add($item){
        if($this->isFull()){
            echo 'Danh sach da day';
        }else{
            array_push($this->elements,$item);
        }
    }   

    // Chèn phan tu vao  mảng dựa vao vi tri
    public function addAtPos($item,$index){
        array_splice($this->elements,$index,0,$item);
    }

    // xoa phan tu tai vi tri
    public function removeByIndex($index){
        //array_key_exists: Kiem tra chi so co ton tai trong mang hay khong
        // isset();
        if( isset($this->elements[$index])){
            array_splice($this->elements,$index,1);
        }else{
            echo 'Chi so khong ton tai';
        }
    }
    // cap nhat
    public function update($index,$value){
        $this->elements[$index] = $value;
    }
    // tra ve do dai
    public function size(){
        return count($this->elements);
    }
    //Kiem tra danh sach co day hay khong
    public function isFull(){
        if($this->size() == $this->limit){
            return true;
        }
        return false;
    }
    // Lay phan tu tai vi tri
    public function getByIndex($index){
        return $this->elements[$index];
    }
}

// Khoi tao doi tuong: thiet lap danh sach gioi han (limit:4)
$arrayList = new ArrayList(4);

//Goi phuong thuc add (Huyen, Nho,Phong)
$arrayList->add('Huyen');
$arrayList->add('Nho');
$arrayList->add('Phong');
// Them tam vao vi tri 2
$arrayList->addAtPos('Tam',2);
// Xoa Tam ra khoi danh sach
$arrayList->removeByIndex(2);
//Cap nhat Nho thanh Siu
$arrayList->update(2,'Siu');
// Xem danh sach co bao nhieu phan tu
echo 'danh sach' . $arrayList->size();
// Kiem tra xem danh sach da day hay chua
var_dump($arrayList->isFull());
// Lay phan tu tai vi tri 1
echo $arrayList->getByIndex(1);
//In doi tuong ra
echo '<pre>';
print_r($arrayList);
echo '</pre>';


