<?php include("class_lib.php");
// Khoi tao đối tượng
$stefan = new Person("Nguyen Dinh phong");
echo "Tên đầy đủ của Phong là: " . $stefan->getName();

// Khi $pinNumber được khai báo là private, đoạn mã lệnh này sẽ sinh ra lỗi!
echo "Nói với tôi những điều riêng tư: " . $stefan->$pinNumber;
?>
