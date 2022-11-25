<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include "db_conn.php";

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
      header("Location: changePassword.php?error=Bắt buộc nhập tài khoản");
	  exit();
    }else if(empty($np)){
      header("Location: changePassword.php?error=Bắt buộc nhập mật khẩu");
	  exit();
    }else if($np !== $c_np){
      header("Location: changePassword.php?error=Tài khoản hoặc mật khẩu không đúng");
	  exit();
    }else {
    	// hashing the password
    	$op = md5($op);
    	$np = md5($np);
        $id = $_SESSION['id'];

        $sql = "SELECT password
                FROM thoikhoabieu WHERE 
                id='$id' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE thoikhoabieu
        	          SET password='$np'
        	          WHERE id='$id'";
        	mysqli_query($conn, $sql_2);
        	header("Location: changePassword.php?success=Mât khẩu đã đổi thành công");
	        exit();

        }else {
        	header("Location: changePassword.php?error=Nhập sai mật khẩu. Vui lòng nhập lại");
	        exit();
        }

    }

    
}else{
	header("Location: changePassword.php");
	exit();
}

}else{
     header("Location: index.php");
     exit();
}