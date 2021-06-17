<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "123456";
$dbname='book_sc';

$con = mysqli_connect($servername, $username, $password,$dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "连接成功";
// var_dump($con);

// //读取文件内容
// $_sql = file_get_contents('book_sc.sql');
// $_arr = explode(';', $_sql);

// //执行sql语句
// foreach ($_arr as $_value) {
//   $is = $con->query($_value.';');
// }
// $con->close();
// $con = null;

?>
