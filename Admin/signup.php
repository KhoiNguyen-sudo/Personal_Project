<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG KÝ 👨‍💻</title>
    <link rel="stylesheet" href="..\User\css\login.css">
    <link rel="shortcut icon" href="User\CSS\img\icon.png">  
    <style>
form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: black;
	font-size: 18px;
	padding: 10px;
}

button{
    width: 400px;
    height: 40px;
    border: none;
    background-color:rgba(183, 19, 19); ;
    color: white;
    border-radius: 5px;
    margin-bottom: 25px;
    transition: all 0.1s ease;
}
button:hover{
    background-color: rgb(102, 19, 19);
    color: white;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

.ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
	color: #444;
}
.ca:hover {
	text-decoration: underline;
} 
</style>
	<title>ĐĂNG KÝ </title>

</head>
<body>  

     <!--  -->
     <div class="HCF">
      <div class="header">
        <div style="position: relative;" class="img">
        <img src="..\User\css\img\Bia.png" alt="" width="100%" height="235px">

<!--  --> 
<center> 
<div class="signup">  
<br> <br>
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
          <a href="manager.php" class="ca">Trở về </a>  

          </div>
          </center>
          </div> 
          </div> 
          </div> 
          </div>
     </form>
</body>
</html>