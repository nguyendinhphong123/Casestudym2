<form action="index.php?controller=product&action=update&id=<?= $item['id'];?>" method="post">
    Thể loại : <input type="text" name="MAHANGSX_id" value="<?= $item['MAHANGSX_id'];?>"> <br>
    TENSANPHAM : <input type="text" name="TenSp" value="<?= $item['TenSp'];?>"> <br>
    SoLuong : <input type="text" name="SoLuong" value="<?= $item['SoLuong'];?>"> <br>
    GiaN : <input type="text" name="GiaN" value="<?= $item['GiaN'];?>"> <br>
    GiaB : <input type="text" name="GiaB" value="<?= $item['GiaB'];?>"> <br>
    Anh : <input type="text" name="Anh" value="<?= $item['Anh'];?>"> <br>
    mota : <input type="text" name="mota" value="<?= $item['mota'];?>"> <br>
    <input type="submit" value="Them">

</form>