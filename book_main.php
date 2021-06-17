<!DOCTYPE html>
<html lang="en" xmlns:100px>
<head>
    <meta charset="UTF-8">
    <title>二手书</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery2.0.0.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<div class="head row">
    <div class="col-md-4 logo_box">
        <a href="book_main.php">
            <h3>二手书网站</h3>
        </a>
    </div>
    <div class="col-md-5 search_box">
        <div class="col-md-12 search">
            <div class="col-md-2 search_p">
                <p>搜索</p>
            </div>
            <form action="search_book.php" method="GET">
                <div class="col-md-9 search_input_box">
                    <input type="text" name="search">
                </div>
                <div class="col-md-1">
                    <button type="submit" style="background-color: rgba(0,0,0,0);border: none"><span class="glyphicon glyphicon-search"></span></button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-3 buy_car_box">
        <div class="col-md-8 col-md-offset-2 buy_car">
            <div class="col-md-8" style="align-content: center" id="buy_car_btn">
                <?php
                require ('test.php');
                if(@$_COOKIE['user_name']){
                    $user = $_COOKIE['user_name'];
                    $q = "SELECT * from buy_car WHERE user_name='$user'";
                    $r = @mysqli_query($con,$q);
                    $ra=mysqli_num_rows($r);
                }else{
                    $ra = 0;
                }
                echo '<span class="glyphicon glyphicon-shopping-cart"></span><span>购物车</span><span>'.$ra.'</span>';
                ?>
<!--                <span class="glyphicon glyphicon-shopping-cart"></span><span>购物车</span><span>0</span>-->
            </div>
            <div class="col-md-4" style="background-color: #ffffff;padding: 0">
<!--                <div id="login_btn" data-toggle="modal" data-target="#myModal" style="border: 1px solid red;height: 50px;width: 50px;color: red;">-->
                    <?php
                    if(@$_COOKIE['user_name']){
                        $aaa = $_COOKIE['user_name'];
                        $sql="SELECT user_img FROM users WHERE user_name='$aaa'";
                        $ra = mysqli_fetch_array(@mysqli_query($con, $sql));
                        echo '<div id="login_btn" data-toggle="modal" data-target="#myModal" style=height: 50px;width: 50px;color: red;">';
                        echo '<img src="'.$ra['user_img'].'" style="height: 50px;width: 50px;">';
                        echo '</div>';
                    }else{
                        echo '<div id="login_btn" data-toggle="modal" data-target="#myModal" style="border: 1px solid red;height: 50px;width: 50px;color: red;">';
                        echo '<b style="line-height: 45px">login</b>';
                        echo '</div>';
                    }
                    ?>
<!--                    <b style="line-height: 45px">login</b>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</div>
<div class="line row"></div>
<div class="in row">
    <div class="classification col-md-2 col-md-offset-1">
        <div class="in_title"><span>分类</span></div>
        <ul class="classification_content">
            <li class="li_btn">文艺</li>
            <li class="li_btn">青春</li>
            <li class="li_btn">童书</li>
            <li class="li_btn">励志/成功</li>
            <li class="li_btn">生活</li>
            <li class="li_btn">人文社科</li>
            <li class="li_btn">科技</li>
            <li class="li_btn">教育</li>
        </ul>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">登陆</h4>
            </div>
            <div class="modal-body">
                <div class="login_box">
                    <form action="login_submit.php" method="POST" id="register-form" enctype="multipart/form-data">
                    <div class="input-group col-md-8 col-md-offset-2 login_input">
                        <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" id="login_name" class="form-control" name="login_name" placeholder="用户名" aria-describedby="sizing-addon2">
                    </div>
                    <div class="input-group col-md-8 col-md-offset-2 login_input">
                        <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-pencil"></span></span>
                        <input type="password" id="login_password" class="form-control" name="login_password" placeholder="密码" aria-describedby="sizing-addon2">
                    </div>
                        <div class="row" style="margin: 20px 0">
                            <button type="submit" name="submit" id="login_true" class="btn btn-default col-md-8 col-md-offset-2">登陆</button>
                        </div>
                    </form>
                </div>
                <div class="register_box">
                    <form action="register_submit.php" method="POST" id="register-form" enctype="multipart/form-data">
                    <div class="input-group col-md-8 col-md-offset-2 login_input">
                        <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" id="register_name" class="form-control" name="register_name" placeholder="用户名" aria-describedby="sizing-addon2">
                    </div>
                    <p class="register_false col-md-offset-2" id="name_false1">您的用户名不能为空</p>
                    <p class="register_false col-md-offset-2" id="name_false2">您的用户名不能含有特殊字符</p>
                    <p class="register_false col-md-offset-2" id="name_false3">您的输入的用户名已存在</p>
                    <p class="register_true col-md-offset-2" id="name_true">您的用户名可以使用</p>
                    <div class="input-group col-md-8 col-md-offset-2 login_input">
                        <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-pencil"></span></span>
                        <input type="password" id="register_password" class="form-control" name="register_password" placeholder="密码" aria-describedby="sizing-addon2">
                    </div>
                    <p class="register_false col-md-offset-2" id="password_false1">您的密码不能为空</p>
                    <p class="register_false col-md-offset-2" id="password_false2">您的密码不能小于六位，大于十六位</p>
                    <p class="register_true col-md-offset-2" id="password_true">您的密码可以使用</p>
                    <div class="input-group col-md-8 col-md-offset-2 login_input">
                        <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-pencil"></span></span>
                        <input type="password" id="register_password_again" class="form-control" placeholder="确认密码" aria-describedby="sizing-addon2">
                    </div>
                    <p class="register_false col-md-offset-2" id="password_again_false1">您的确认密码不能为空</p>
                    <p class="register_false col-md-offset-2" id="password_again_false2">您两次输入的密码不一致</p>
                    <p class="register_true col-md-offset-2" id="password_again_true">您两次输入的密码一致</p>
                        <div class="row" style="margin: 20px 0">
                            <button type="submit" name="submit" id="register_true" class="btn btn-default col-md-8 col-md-offset-2" disabled="disabled">注册</button>
                        </div>
                        </form>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <p style="float: left">没有账号？<span id="login_register">注册</span></p>
            </div> -->
        </div>
    </div>
</div>
<!-- otherModal -->
<div class="modal fade" id="myOtherModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <?php
//                $name=$_COOKIE['buy_name'];
                    echo '<div class="media">';
                    echo '<div class="media-left media-middle">';
                    echo '<a href="#">';
                    echo '<img class="media-object" src="..." alt="...">';
                    echo '</a>';
                    echo '</div>';
                    echo '<div class="media-body">';
                    echo '<h4 class="media-heading"></h4>';
                    echo '</div>';
                    echo '</div>';
                //                    <div class="media">
//  <div class="media-left media-middle">
//    <a href="#">
//      <img class="media-object" src="..." alt="...">
//    </a>
//  </div>
//  <div class="media-body">
//    <h4 class="media-heading">Middle aligned media</h4>
//    ...
//  </div>
//</div>
                ?>
                <input type="text" class="form-control" id="buy_count">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">立即购买</button>
                <button type="button" class="btn btn-primary" id="put_in_car">放入购物车</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>