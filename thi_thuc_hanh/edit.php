<?php
    include_once 'db.php';//$conn
    // echo '<pre>';
    // print_r($_GET);
    // die();
    $sql = "SELECT * FROM `class`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $student = $stmt->fetchAll();
     
    //Lay gia tri ID tren URL
    $id = $_GET['id'];
    //lay du lieu theo ID
    $sql = "SELECT * FROM `student` WHERE id = $id";
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
        $TENHOCSINH = $_REQUEST['name'];
        $LOP = $_REQUEST['class_id'];
        $NGAYSINH = $_REQUEST['date'];
        $GIOITINH = $_REQUEST['gender'];
        $THONGTIN = $_REQUEST['information'];

        //Viet cau truy van
        $sql = "UPDATE student SET 
                name = '$TENHOCSINH',
                class_id = $LOP,
                date = '$NGAYSINH',
                gender = '$GIOITINH',
                information = '$THONGTIN'
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
<form action="" method="post">
    Tên Học Sinh :<input type="text" name="name" value ="<?= $row['name'];?>"> <br>
    Lớp:<select name="class_id" class="form-control" id="">
            <?php foreach ($student as $st) {?>
            <option <?= $st['id'] == $row['class_id'] ? "selected" : "" ?> value="<?=$st['id'];?>"><?=$st['id'];?></option>
            <?php } ?>
    </select><br>
    Ngày Sinh: <input type="date" name="date" value ="<?= $row['date'];?>"> <br>
    Giới Tính: <input type="text" name="gender" value ="<?= $row['gender'];?>"> <br>
    Thông Tin: <input type="text" name="information" value ="<?= $row['information'];?>"> <br>
    <input type="submit" value="Them">
    <a href="list.php">Thoát</a>
</form>
