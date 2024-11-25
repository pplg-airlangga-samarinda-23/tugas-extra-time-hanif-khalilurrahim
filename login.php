<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>login</title>
</head>
<body>
        <div class="kosong">
            <img src="wuwa1.png">
                <div class="login">
                    <div class="logo">
                        <img src="tomut.jpg">
                    </div>

                    <form action="passname.php" method="post">
     	                <?php if (isset($_GET['error'])) { ?>
     		                <p class="error"><?php echo $_GET['error']; ?></p>
     	                <?php } ?>
     	                <input type="text" name="uname" placeholder="User Name"><br>

     	                <input type="password" name="password" placeholder="Password"><br>
                        
     	                <button type="submit">Login</button>
                    </form>

                    <div class="forgot">
                        <a href="">Forgot_Password</a>
                    </div>
                </div>
        
        </div>
</body>
</html>