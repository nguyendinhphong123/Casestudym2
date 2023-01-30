<?php
include_once 'models/Model.php';
class User extends Model {

    public function all(){
        // Viet cau sql
        $sql = "SELECT * FROM `khach_hang`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
        $items = $stmt->fetchAll();
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `khach_hang` WHERE id = $id";
          //Debug sql
          // var_dump($sql);
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
  
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($data){
        $name = $data['TenKH'];
        $address = $data['DiaChi'];
        $email = $data['email'];
        $phone = $data['SDT'];
        $password = $data['matkhau'];
        $sql = "INSERT INTO `khach_hang` ( `TenKH`, `DiaChi`, `email`, `SDT`,`matkhau`) VALUES ('$name', '$address', '$email', '$phone','$password')";
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
        $name = $data['TenKH'];
        $address = $data['DiaChi'];
        $email = $data['email'];
        $phone = $data['SDT'];
        $password = $data['matkhau'];

        $sql = "UPDATE `khach_hang` SET 
        `TenKH` = '$name', 
        `DiaChi` = '$age',
         `email` = '$phone',
         `SDT` = '$address',
         `matkhau` = '$password'
          WHERE `khach_hang`.`id` = $id";

          // thuc hien truy van
          $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM khach_hang WHERE id = $id";
        //Debug sql
        // var_dump($sql);

        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}

// Khoi tao doi tuong
// $user = new User();

// Goi phuong thuc save
// $data = [
//     'TenKH' => 'Nho',
//     'DiaChi' => 'Quang tri',
//     'email' => 'nho123@gmail.com',
//     'SDT' => '123111',
//     'matkhau' => 'abc'
// ];
// $user->save($data);

// - Gọi phương thức all và in ra kết quả
// echo '<pre>';
// print_r($user->all());
// echo '</pre>';
// Gọi phương thức find và truyền vào id là 1 sau đó in ra kết quả
// echo '<pre>';
// print_r($user->find(2));
// echo '</pre>';
// Gọi phương thức update và truyền vào id và mảng dữ liệu
// $userData = [
//     'name' => 'Phong123',
//     'age' => 256,
//     'phone' => '0367717778',
//     'address' => 'Quang tri',
// ];
// $user->update(2,$userData);

// Gọi phương thức delete và truyền vào id
// $user->delete(1);

// - Gọi phương thức all và in ra kết quả
// echo '<pre>';
// print_r($user->all());
// echo '</pre>';

  
    