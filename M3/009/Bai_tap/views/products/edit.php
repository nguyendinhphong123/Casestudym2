<form action="index.php?controller=product&action=update&id=<?= $item['id'];?>" method="post">
    title : <input type="text" name="title" value="<?= $item['title'];?>"> <br>
    price : <input type="text" name="price" value="<?= $item['price'];?>"> <br>
    quantity : <input type="text" name="quantity" value="<?= $item['quantity'];?>"> <br>
    description : <input type="text" name="description" value="<?= $item['description'];?>"> <br>
    <input type="submit" value="Them">

</form>