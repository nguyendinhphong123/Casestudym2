<?php
    include_once '../db.php';//$conn
    // echo '<pre>';
    // print_r($_GET);
    // die();
    $sql = "SELECT * FROM `categories`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $categories = $stmt->fetchAll();
 
    //Lay gia tri ID tren URL
    $id = $_GET['id'];
    //lay du lieu theo ID
    $sql = "SELECT * FROM `books` WHERE id = $id";
    //Debug sql
    // var_dump($sql);
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array

    //Lấy về dữ liệu duy nhat
    $row = $stmt->fetch();
    //  echo '<pre>';
    // print_r($row['category_id']);
    // die();
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        $THELOAISACH = $_REQUEST['category_id'];
        $TENSACH = $_REQUEST['name'];
        $GIA = $_REQUEST['price'];
        $description = $_REQUEST['description'];

        //Viet cau truy van
        $sql = "UPDATE `books` SET 
        category_id= $THELOAISACH,
        `name`='$TENSACH',
        `price`=$GIA ,
        `description`='$description'
         WHERE id = $id
        ";
       
        //Debug sql
        // var_dump($sql);
        // die();

        //Thuc hien truy van
        $conn->exec($sql);

        //Chuyen huong
        header("Location: list.php");
    }

?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
<form action="" method="post">
    <div class="mb-3">
    <label  class="form-label">THELOAISACH</label>
    <select name="category_id" class="form-control" id="">
            <?php foreach ($categories as $category) {?>
            <option <?=$category['id'] == $row['category_id'] ? "selected" : " " ?> value="<?=$category['id'];?>"><?=$category['name'];?></option>
            <?php } ?>
    </select>
  </div>
  
  <div class="mb-3">
    <label  class="form-label">TENSACH</label>
    <input type="text" class="form-control"  value ="<?= $row['name'];?>" name="name">
  </div>
  <div class="mb-3">
  <label  class="form-label">GIA</label>
    <input type="text" class="form-control" value ="<?= $row['price'];?>" name="price">
  </div>
  <div class="mb-3">
  <label  class="form-label">description</label>
    <input type="text" class="form-control"  value ="<?= $row['description'];?>" name="description">
  </div>
  <input type="submit" value="Them">
  </form>
<?php include_once '../footer.php'; ?>



