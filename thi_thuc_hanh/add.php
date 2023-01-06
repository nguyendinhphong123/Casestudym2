<?php
    include_once 'db.php';?>
<?php
     $sql = "SELECT * FROM `student`";
     $stmt = $conn->query($sql);
     $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
     $class = $stmt->fetchAll();
     $error = [];
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

        if($TENHOCSINH == ""){
            $error['name'] = 'Bạn chưa tên';
            }
          if($NGAYSINH == ""){
            $error['date'] = 'Bạn chưa nhập ngày sinh';
            }
          if($GIOITINH == ""){
            $error['gender'] = 'Bạn chưa nhập giới tính';
            }
            if($THONGTIN == ""){
                $error['information'] = 'Bạn chưa nhập thông tin';
                }


                if (count($error) == 0){
                    $sql = "INSERT INTO student(name,class_id,date,gender,information) VALUES('$TENHOCSINH',$LOP,'$NGAYSINH','$GIOITINH','$THONGTIN')";
        //Debug sql
        // var_dump($sql);
        // die();

        //Thuc hien truy van
        $conn->exec($sql);

        //Chuyen huong
        header("Location: list.php");
                }
        //Viet cau truy van
        
    }
    ?>
    
<form action="" method="post">
    Tên Học Sinh :<input type="text" name="name"> <br>
    <div class="text-danger"> <?php echo isset($error['name']) ? $error['name'] : ''; ?> </div>
    Lớp: <select name="class_id" class="form-control">
    <?php foreach( $class as $category ): ?>
      <option value="<?php echo $category['id'];?>"><?php echo $category['id'];?></option>
      <?php endforeach; ?>
    </select><br>
    Ngày Sinh: <input type="date" name="date"> <br>
    <div class="text-danger"> <?php echo isset($error['date']) ? $error['date'] : ''; ?> </div>
    Giới Tính: <input type="text" name="gender"> <br>
    <div class="text-danger"> <?php echo isset($error['gender']) ? $error['gender'] : ''; ?> </div>
    Thông tin: <input type="text" name="information"> <br>
    <div class="text-danger"> <?php echo isset($error['information']) ? $error['information'] : ''; ?> </div>
    <input type="submit" value="Them">
    <a href="list.php">Thoát</a>
</form>