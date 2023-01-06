<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT books.*,categories.name AS category_name FROM `books`
JOIN categories ON books.category_id = categories.id";
// echo '<pre>';
// print_r($_GET);
// die();
if( isset( $_GET["s"] )  ){
    $s = $_GET["s"];
    $sql .= " WHERE books.name LIKE '%$s%'";

}

//Debug sql
        // var_dump($sql);
        // die();

$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$books = $stmt->fetchAll();
?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
<a href="add.php"> Thêm mới </a>
<table border="1" class="table">
    <thead>
        <tr>
            <th>MASACH</th>
            <th>THELOAISACH</th>
            <th>TENSACH</th>
            <th>GIA</th>
            <th>MOTA</th>
            <th>Sửa, Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $books as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo  $key+1;?> </td>
                <td><?php echo $row['category_name'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['description'];?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ;?>">Edit</a> <br>
                    <!-- <button type="submit" class="w3-button w3-red" onclick="return confirm('Chuyên vào thùng rác')">Xóa</button> -->
                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="delete.php?id=<?= $row['id'] ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php include_once '../footer.php'; ?>