<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG KÝ 👨‍💻</title>
    <link rel="stylesheet" href="User\css\login.css">
    <link rel="shortcut icon" href="User\CSS\img\icon.png">  
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    a {
        color: BLACK;
        text-decoration: none;
    }
     a:hover{
            color: BLACK;
            text-decoration: none;
        }
    #color {
        color: BLACK;
    }

    #color:hover {
        color: purple;
    }
</style>
	<title>ĐĂNG KÝ </title>

</head>
<body> 
     <!--  -->
     <div class="HCF">
      <div class="header">
        <div style="position: relative;" class="img">
          <img src="User\css\img\Bia.png" alt="" width="100%" height="235px">

<!--  --> 
<center> 
<div class="signup"> 
     <form action="signup-check.php" method="post">
     	<h2>ĐĂNG KÝ </h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Họ và tên</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>Tên tài khoản</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Mật khẩu</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Nhập lại mật khẩu</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Xác nhận</button> 
          <div>
          <a href="index.php" class="ca">Bạn đã có tài khoản?</a>  

          </div>
          </center>
          </div> 
          </div> 
          </div> 
          </div>
     </form>
</body>
</html>