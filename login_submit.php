<?php
require ('test.php');
$name = $_POST['login_name'];
$password = $_POST['login_password'];
$q = "SELECT * FROM users WHERE user_name = '$name'";
$r=@mysqli_query($con, $q);
foreach ($r as $value) {
    $result=$value['user_key'];
    if($password==$result){
        setcookie("user_name",$name,time()+24*3600);
        echo "登陆成功！";
        @mysqli_close($con);                //关闭数据库

        function redirect($url)
        {           //重定向函数
            echo "<script language=\"javascript\">";
            echo "location.href='".$_SERVER["HTTP_REFERER"]."'";
            echo "</script>";
        }
        redirect($url);                  //重定向页面
    }
    else{
        echo "<p>You could not be logged in.<br/>
            You must be logged in to view this page.</p>";
    }
}