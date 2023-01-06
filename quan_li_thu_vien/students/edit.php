<?php
    include_once '../db.php';//$conn
    // echo '<pre>';
    // print_r($_GET);
    // die();

     
    //Lay gia tri ID tren URL
    $id = $_GET['id'];
    //lay du lieu theo ID
    $sql = "SELECT * FROM `students` WHERE id = $id";
    //Debug sql
    // var_dump($sql);
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array

    //Lấy về dữ liệu duy nhat
    $row = $stmt->fetch();

    //  echo '<pre>';
    // print_r($row);
    // die();
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        $TEN = $_REQUEST['name'];
        $LOP = $_REQUEST['class'];
        $DIACHI = $_REQUEST['address'];
        $EMAIL = $_REQUEST['email'];
        $ANH = '';

        if (isset($_FILES['image']))
        {
            if (!$_FILES['image']['error'])
            {
                move_uploaded_file($_FILES['image']['tmp_name'], ROOT_DIR.'/public/uploads/'.$_FILES['image']['name']);
                $ANH = '/public/uploads/'.$_FILES['image']['name'];
            }
        }

        //Viet cau truy van
        $sql = "UPDATE `students` SET 
        `name`= '$TEN',
        `class`='$LOP',
        `address`='$DIACHI',
        `email`='$EMAIL',
        `image`='$ANH'
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
<form action="" method="post" enctype="multipart/form-data">
TEN :<input type="text" name="name" value ="<?= $row['name'];?>"> <br>
LOP: <input type="text" name="class" value ="<?= $row['class'];?>"> <br>
DIACHI: <input type="text" name="address" value ="<?= $row['address'];?>"> <br>
EMAIL: <input type="text" name="email" value ="<?= $row['email'];?>"> <br>
ANH: <input type="file" name="image" value ="<?= $row['image'];?>"> <br>
    <input type="submit" value="Them">
</form>
<?php include_once '../footer.php'; ?>