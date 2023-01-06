<?php
    include_once '../db.php';?>
<?php
    // Lay toan bo the loai
    $sql = "SELECT * FROM `categories`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $categories = $stmt->fetchAll();

    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        // $MASACH = $_REQUEST['id'];
        $THELOAISACH = $_REQUEST['category_id'];
        $TENSACH = $_REQUEST['name'];
        $GIA = $_REQUEST['price'];
        $description = $_REQUEST['description'];


        //Viet cau truy van
        $sql = "INSERT INTO books(category_id,name,price,description) VALUES($THELOAISACH,'$TENSACH',$GIA,' $description')";
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
<h3>Thêm mới sản phẩm</h3>
<form action="" method="post">
  <div class="mb-3">
    <label  class="form-label">THELOAISACH</label>
    <select name="category_id" class="form-control">
    <?php foreach( $categories as $category ): ?>
      <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="mb-3">
    <label  class="form-label">TENSACH</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
  <label  class="form-label">GIA</label>
    <input type="text" class="form-control" name="price">
  </div>
  <div class="mb-3">
  <label  class="form-label">description</label>
    <input type="text" class="form-control" name="description">
  </div>
  <input type="submit" value="Them">
  
</form>

</div>




