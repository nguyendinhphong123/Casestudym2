<?php
include_once 'models/Model.php';
class Product extends Model{

    public function all(){
        // Viet cau sql
        $sql = "SELECT san_pham.*,hang_san_xuat.name AS category_name FROM `san_pham`
JOIN hang_san_xuat ON san_pham.MAHANGSX_id = hang_san_xuat.id";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
        $items = $stmt->fetchAll();
        
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `san_pham` WHERE id = $id";
          //Debug sql
          // var_dump($sql);
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
  
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($data){
        $mahang = $data['MAHANGSX_id'];
        $name = $data['TenSp'];
        $amount = $data['SoLuong'];
        $gian = $data['GiaN'];
        $giab = $data['GiaB'];
        $anh = $data['Anh'];
        $mota = $data['mota'];
        $sql = "INSERT INTO `san_pham` ( `MAHANGSX_id`, `TenSp`, `SoLuong`, `GiaN`, `GiaB`, `Anh`, `mota`) VALUES ( $mahang, '$name', $amount, '$gian', '$giab', '$anh', '$mota')";
        // var_dump($sql);
        // echo '<pre>';
        // print_r($data);
        // die();
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
        $mahang = $data['MAHANGSX_id'];
        $name = $data['TenSp'];
        $amount = $data['SoLuong'];
        $gian = $data['GiaN'];
        $giab = $data['GiaB'];
        $anh = $data['Anh'];
        $mota = $data['mota'];

        $sql = "UPDATE `san_pham` SET 
        `MAHANGSX_id` = $mahang, 
        `TenSp` = '$name', 
        `SoLuong` = $amount, 
        `GiaN` = '$gian', 
        `GiaB` = '$giab', 
        `Anh` = '$anh', 
        `mota` = '$mota' 
        WHERE `san_pham`.`id` = $id";

          // thuc hien truy van
          $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM san_pham WHERE id = $id";
        //Debug sql
        // var_dump($sql);

        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}
