<?php
include_once 'Employee/Employee.php';
include_once 'EmployeeManage/EmployeeManager.php';

use Employee\Employee;
use EmployeeManage\EmployeeManager;
$phong = new Employee('nguyen','phong','1997','quang tri','lap trinh');
$nho = new Employee('nguyen','phong','1997','quang tri','lap trinh');
$huyen = new Employee('nguyen','phong','1997','quang tri','lap trinh');

EmployeeManager::new($phong);
EmployeeManager::new($nho);
EmployeeManager::new($huyen);

echo '<pre>';
print_r(EmployeeManager::list());
echo '</pre>';

?>

<table border="1">
    <thead>
        <tr>
            <th>Họ</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Vị trí công việc</th>
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
