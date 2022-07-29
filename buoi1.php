<?php
// ctrl + // : Comment lại 
// câu lệnh in ra màn hình
echo "Hello World";
echo "<h1> đây là dấu ngăn cách </h1>";
print "Hello print";
// Biến trong php (phải có dấu đô la)

$myNumber = 1; // kiểu int
$Cuong = "Ho Huu Cuong"; // kiểu string
$myFloat = 1.234; // kiểu float
$myBolean = true; // kiểu bolean true hoặc false


// để check giá trị hoặc kiểu dữ liệu dùng câu lệnh var_dump();
var_dump($myNumber);



$hoTen = "Ho";
$ten = "Cuong";

// Dấu chấm thể hiện cho nối chuỗi

echo $hoTen . " " . $ten;
echo $hoTen . "Hữu" . $ten;
// khác nhau ngoặc kép với ngoặc đơn
echo "$hoTen $ten";
echo '$hoTen $ten';

echo 'Hồ Hữu' . $ten;



$a = 1;
$b = 2;

echo "<h3> Phép cộng </h3>";
echo $c = $a + $b;
echo "<br>";
echo "<h3> Phép  trừ </h3>";
echo $c = $a - $b;
echo "<br>";
echo "<h3> Phép Nhân </h3>";
echo $c = $a * $b;
echo "<br>";
echo "<h3> Phép Chia </h3>";
echo $c = $a / $b;


// hằng số (có  2 cách đặt tên)
// ví dụ : 1 hệ thống  có 2 trạng thái hoàn thành hoặc thất bại

$trangthaidonhang = 2;
// cách 1
// const SUCCESS = 1;
// const FAILED = 2;
// cách 2 : define ('Tên hằng số',giá trị)
    define('SUCCESS',1);
    define('FAILED',2);
if ($trangthaidonhang == SUCCESS) {
    echo "Đặt hàng thành công";
} else if ($trangthaidonhang == FAILED) {
    echo "Đặt hàng thất bại";
} else {
    echo "Bố mày đéo nhận đơn hàng";
}





?>

<!-- in ra màn hình với html  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1</title>
</head>

<body>

    <span>Tên bố mày là :</span>
    <h1> <?php echo $hoTen . $ten ?> </h1>

    <?php
    echo "<script> alert('Thông báo') </script>";
    ?>

    <?php
    // -- Hàm kiểm tra tồn tại isset()
    // trong trường hợp muốn kiểm tra biến tồn tại hay không
    // sử dụng phương thúc isset(Tên biến muốn kiểm tra)
    // Trả về true nếu như mà biến đó tồn tại
    // Trả về false nếu như mà biến đó không tồn tại

    var_dump(isset($ab));
    var_dump(isset($hoTen));

    // nếu tồn tại thì mới in ra
    if (isset($ab) == true) {
        echo $ab;
    }
    // không tồn tại thì ko in
    else {
        echo "";
    }


    // -- Hàm kiểm tra trống , rỗng , chưa được khai báo empty();
    // sử dụng phương thúc empty(Tên biến muốn kiểm tra)
    // Trả về true nếu như mà biến rỗng , undefind , null , 0
    // Trả về false nếu như mà biến đó có giá trị
    // Ví dụ :

    if (empty($ab) == false) {
        echo $ab;
    } else {
        echo "1234";
    }







    ?>



</body>

</html>