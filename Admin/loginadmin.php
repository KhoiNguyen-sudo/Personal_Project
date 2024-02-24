<?php
session_start();
include_once "db_conn.php"; // kết nối file database
// Hàm làm sạch dữ liệu nhập từ người dùng
if (isset($_POST["uname"]) && isset($_POST["password"])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST["uname"]);
    $pass = validate($_POST["password"]);
    // Thông báo nếu người nhập không nhập đúng từ phía yêu cầu
    if (empty($uname)) {
        header("Location: index.php?error=Vui lòng nhập tài khoản");
        exit();
    } elseif (empty($pass)) {
        header("Location: index.php?error=Vui lòng nhập mật khẩu");
        exit();
    } else {
        $pass = md5($pass); // mã hóa passowrd trong SQL bằng md5
        $sql = "SELECT * FROM admin WHERE user_name='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        // Chuyển quyền nếu là user hoặc admin
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row["user_name"] === $uname && $row["password"] === $pass) {
                $_SESSION["user_name"] = $row["user_name"];
                $_SESSION["name"] = $row["name"];
                $_SESSION["id"] = $row["id"];
                header("Location: index.php");
                exit();
            }  else {
                header(
                    "Location: indexadmin.php?error=Nhập tài khoản hoặc mật khẩu"
                );
                exit();
            }
        } else {
            header("Location: indexadmin.php?error=Nhập tài khoản hoặc mật khẩu");
            exit();
        }
    }
} else {
    header("Location: indexadmin.php");
    exit();
}
