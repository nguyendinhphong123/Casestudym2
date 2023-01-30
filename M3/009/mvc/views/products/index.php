<a href="index.php?controller=product&action=create"> Thêm mới </a>
<table border="1">
    <thead>
        <tr>
        <th>STT</th>
            <th>The Loai</th>
            <th>TENSANPHAM</th>
            <th>SoLuong</th>
            <th>GiaN</th>
            <th>GiaB</th>
            <th>Anh</th>
            <th>mota</th>
            <th>Sửa, Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $items as $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
            <td> <?php echo $row['id'];?> </td>
                <td> <?php echo $row['category_name'];?> </td>
                <td><?php echo $row['TenSp'];?></td>
                <td><?php echo $row['SoLuong'];?></td>
                <td><?php echo $row['GiaN'];?></td>
                <td><?php echo $row['GiaB'];?></td>
                <td><?php echo $row['Anh'];?></td>
                <td><?php echo $row['mota'];?></td>
                <td>
                    <a href="index.php?controller=product&action=edit&id=<?= $row['id'] ;?>">Edit</a> <br>
                    <a href="index.php?controller=product&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>