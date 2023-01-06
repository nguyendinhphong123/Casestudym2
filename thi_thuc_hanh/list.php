<?php
    include_once 'db.php';//$conn
    $sql = "SELECT student.*,class.name AS category_name FROM `student`
    JOIN class ON student.class_id = class.id";

    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array

    //Lấy về dữ liệu nhiều hơn 1
    $student = $stmt->fetchAll();

    // echo '<pre>';
    // print_r($rows);
    // echo '</pre>';
?>
<a href="add.php"> Thêm mới </a>
<table border="1">
    <thead>
        <tr>
            <th>Mã học sinh</th>
            <th>Tên học sinh</th>
            <th>Lớp</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Thông tin</th>
            <th>Sửa, Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $student as $key => $row ):
            //  echo '<pre>';
            //  print_r($row);
            // die();
            ?>
            <tr>
            <td> <?php echo  $key+1;?> </td>
               <td> <?php echo $row['name'];?> </td>
               <td><?php echo $row['category_name'];?></td>
               <td><?php echo $row['date'];?></td>
               <td><?php echo $row['gender'];?></td>
               <td><?php echo $row['information'];?></td>

               <td>
                    <a href="edit.php?id=<?= $row['id'] ;?>" >Edit</a> <br>
                    <!-- <button type="submit" class="w3-button w3-red" onclick="return confirm('Chuyên vào thùng rác')">Xóa</button> -->
                     <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="delete.php?id=<?= $row['id'] ;?>">Delete</a> 
                </td>
               
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>