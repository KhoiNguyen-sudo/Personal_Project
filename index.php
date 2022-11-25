<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập 👨‍💻</title>
    <link rel="stylesheet" href="User\css\login.css">
    <link rel="shortcut icon" href="User\CSS\img\icon.png"> 
    <style>
    a {
        color: white;
        text-decoration: none;
    }
     a:hover{
            color: white;
            text-decoration: none;
        }
    #color {
        color: white;
    }

    #color:hover {
        color: purple;
    }
</style>
</head>
<body> 
    <div class="header">
            <div class="logo"><a href="menu.html"><img src="click menu.png" alt=""></a></div>
            <div class="login">
                <div class="form">
                    <h1>Đăng Nhập</h1> 
                    <!-- Bước liên kết giữa PHP và HTM; phương thức liên kết là POST -->
                    <form action="login.php" method="POST"> 
                    <div> 
                        <label for="taikhoan"></label> 
                        <!-- Thông báo từ phía PHP -->
                        <?php if (isset($_GET["error"])) { ?> 
                            <p class="error"><?php echo $_GET["error"]; ?></p> 
                            <?php } ?>
                        <input  id="username" name="uname" type="text" placeholder = "Nhập tài khoản">
                    </div> 
                    <br>
                    <div>
                        <label for="matkhau"></label>
                        <input id="password" name="password" type="password"  placeholder = "Nhập mật khẩu"><br>
                        </div>
                        <div>
                        <button type="submit" >Đăng Nhập</button>    
                        <br>
                        <button  ><a href="signup.php" class="ca">Đăng ký</a></button>    

                        </div> 
                        <div>
                        <button ><a href="Admin/indexadmin.php" class="ca">Admin</a></button>    

                        </div>
                    </form>
                </div>
            </div>
    </div>
    <script src="script\index.js"></script>
</body>
</html> 

