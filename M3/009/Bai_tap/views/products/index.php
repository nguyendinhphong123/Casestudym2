<a href="index.php?controller=product&action=create" > Thêm mới </a>
<table border="1">
    <thead>
        <tr>
        <th>id</th>
            <th>title</th>
            <th>price</th>
            <th>quantity</th>
            <th>description</th>
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
                <td> <?php echo $row['title'];?> </td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['quantity'];?></td>
                <td><?php echo $row['description'];?></td>
                <td>
                    <a href="index.php?controller=product&action=edit&id=<?= $row['id'] ;?>" >Edit</a> <br>
                    <a href="index.php?controller=product&action=destroy&id=<?= $row['id'] ;?>" >Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>