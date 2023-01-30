<?php
class User {
    public array $data;
    public $conn = null;
    public string $name;
    public int $age;
    public string $phone;
    public string $address;

    public function __construct(){
        $username   = 'root';
        $password   = '';
        $database   = 'bai_tap';
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
        } catch (Exception $e) {
            // echo $e->getMessage();
            echo '<h1>Khong the ket noi CSDL</h1>';
        }
    }
    public function all(){
        // Viet cau sql
        $sql = "SELECT * FROM `users`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
        $items = $stmt->fetchAll();
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `users` WHERE id = $id";
          //Debug sql
          // var_dump($sql);
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
  
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($userData){
        $name = $userData['name'];
        $age = $userData['age'];
        $phone = $userData['phone'];
        $address = $userData['address'];
        $sql = "INSERT INTO `users` ( `name`, `age`, `phone`, `address`) VALUES ('$name', '$age', '$phone', '$address')";
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$userData){
        $name = $userData['name'];
        $age = $userData['age'];
        $phone = $userData['phone'];
        $address = $userData['address'];

        $sql = "UPDATE `users` SET 
        `name` = '$name', 
        `age` = '$age',
         `phone` = '$phone',
         `address` = '$address'
          WHERE `users`.`id` = $id";

          // thuc hien truy van
          $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM users WHERE id = $id";
        //Debug sql
        // var_dump($sql);

        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}

// Khoi tao doi tuong
$user = new User();
// Gọi phương thức save 5 lan và truyền vào mảng dữ liệu thông tin của 5 thành viên
$userData = [
    'name' => 'Phong',
    'age' => 25,
    'phone' => '0367717778',
    'address' => 'Quang tri',
];
// $user->save($userData);

// - Gọi phương thức all và in ra kết quả
echo '<pre>';
print_r($user->all());
echo '</pre>';
// Gọi phương thức find và truyền vào id là 1 sau đó in ra kết quả
echo '<pre>';
print_r($user->find(2));
echo '</pre>';
// Gọi phương thức update và truyền vào id và mảng dữ liệu
$userData = [
    'name' => 'Phong123',
    'age' => 256,
    'phone' => '0367717778',
    'address' => 'Quang tri',
];
$user->update(2,$userData);

// Gọi phương thức delete và truyền vào id
$user->delete(1);

// - Gọi phương thức all và in ra kết quả
echo '<pre>';
print_r($user->all());
echo '</pre>';

