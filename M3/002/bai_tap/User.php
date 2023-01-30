<?php
class User {
    protected string $name = '';
    protected string $email = '';
    public int $role;
    // Trả về giá trị thuộc tính
    public function getInfo() {
        return $this->isAdmin(). $this->name .'<br>'.'Email: '. $this->email ;
    }
    public function isAdmin() {
        if($this->role == 1){
            echo "Admin: ";
        }
        if($this->role == 2){
            echo "Người dùng bình thường: ";
        }
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setRole($role){
        $this->role = $role;
    }
}
//Khoi tao doi tuong
$user = new User();
// Goi phuong thuc thiet lap gia tri
$user->setName('Nguyen Dinh Phong');
$user->setEmail('deepsea221297@gmail.com');
$user->setRole(1);
// In ra gia tri thuoc tinh
echo $user->getInfo();

