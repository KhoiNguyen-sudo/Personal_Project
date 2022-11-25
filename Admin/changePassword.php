<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin 👨‍💻</title>
    <link rel="stylesheet" href="css\style-2.css">
    <link rel="shortcut icon" href="CSS\img\icon.png">
</head>
<body>
    <div class="HCF">
        <div class="header">
            <div style="position: relative;" class="img">
                <img src="css\img\Bia.png" alt="" width="100%">
            </div>
        </div>
        <div style="position: relative; height: auto;" class="contain">
            <div class="Nav">
                <form action="index.php">
                    <button type="submit"><h3>Trang chủ</h3></button>
                </form>
                <form action="manager.php">
                    <button type="submit"><h3>Quản lí phân công giảng dạy của GV</h3></button>
                </form>
                <form action="changePassword.php">
                    <button type="submit"><h3>Đổi mật khẩu</h3></button>
                </form>
                <form action="logout.php">
                    <button type="submit"><h3>Thoát</h3></button>
                </form>
            </div>
            <div class="Aside">
                <div class="center">
                    <div class="center-1">
                        <div class="h3">  
                            <!-- Phương thức xác nhận là kiểu post -->
                        <form action="change-p.php" method="post"> 
                        <h3>
                                Đổi mật khẩu
                            </h3> 
                        
                        </div>
                        <div class="nd"> 
                            <!-- Thông báo  --> 
                            <center>
                             <?php if (isset($_GET['error'])) { ?> 
                                <p class="error"><?php echo $_GET['error']; ?></p>
                                <?php } ?>
                                <?php if (isset($_GET['success'])) { ?>
                                    <p class="success"><?php echo $_GET['success']; ?></p>
                                    <?php } ?> 
                                </center>
                            <div>
                                <tr>
                                    <b><td>Mật khẩu cũ :</td></b> 
                                    
                                    <td>
                                        <input style="padding-left: 5px; margin-left: 80px; height: 35px; width: 200px; border-radius: 8px;" type="password" name="op"  placeholder="Mật khẩu cũ" class="form-control" required name="txtPW" id="txtPW" width="80%">
                                    </td>
                                </tr>
                            </div>
                            <div>
                                <tr>
                                    <b><td>Mật khẩu mới :</td></b>
                                    <td><input style="padding-left: 5px; margin-left: 70px; margin-top: 15px; height: 35px; width: 200px; border-radius: 8px;" type="password" name="np" placeholder="Mật khẩu mới" class="form-control" required name="txtPW1" id="txtPW1" width="80%" aria-autocomplete="list"></td>
                                </tr>
                            </div>
                            <div>
                                <tr>
                                    <b><td>Nhập lại mật khẩu mới :</td></b>
                                    <td><input style="padding-left: 5px; margin-left: 15px; margin-top: 15px; height: 35px; width: 200px; border-radius: 8px;" type="password" name="c_np"  placeholder="Xác nhận lại mật khẩu" class="form-control" required name="txtPW2" id="txtPW2" width="80%"></td>
                                </tr>
                            </div>
                        </div>
                        <div class="icon">
                            <button style="margin-left: 30px;" type="submit" name = "doimatkhau" method = "POST"><h4>Cập nhật mật khẩu</h4></button>
                        </div>
                </div>
            </div>
        </div>
            <div class="foot"> 1
                
            </div>
    </div>     
    </form>
</body>
</html>   


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

