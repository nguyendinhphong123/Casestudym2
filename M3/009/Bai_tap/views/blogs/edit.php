<form action="index.php?controller=blog&action=update&id=<?= $item['id'];?>" method="post">
    title : <input type="text" name="title" value="<?= $item['title'];?>"> <br>
    description : <input type="text" name="description" value="<?= $item['description'];?>"> <br>
    <input type="submit" value="Them">

</form>