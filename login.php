<?php
if(isset($_POST["login"])){
$username = $_POST["user"];
$password = $_POST["pass"];
if($username=="admin" && $password== "admin"){
echo "<script type='text/javascript'>alert('Login Success')</script>";
}else{
echo "<script type='text/javascript'>alert('Login Error')</script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>login</title>
</head>
<body>
        <div class="kosong">
            <img src="wuwa1.png">
                <div class="login">
                    <div class="logo">
                        <img src="tomut.jpg">
                    </div>

                    <div class="username">
                        <form class="Name" action="/action_page.php">
                            <input type="text" placeholder="UserName..." name="search">
                          </form>                        
                    </div>

                    <div class="pw">
                        <form class="Pass" action="/action_page.php">
                            <input type="text" placeholder="PassWord..." name="search">
                          </form>
                    </div>

                    <div class="masuk">
                        <a href="dashboard.php">Login</a>
                    </div>
                    
                    <div class="forgot">
                        <a>Forgot Password</a>
                    </div>
                </div>
        </div>
</body>
</html>