<?php  
session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User 👨‍💻</title>
    <link rel="stylesheet" href="css/style.css">
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
                <!-- gọi tên -->
            <h2>Tên: <?php echo $_SESSION['name']; ?></h2>
                <form action="index.php">
                    <button type="submit"><h3>Thông tin cá nhân</h3></button>
                </form>
                <form action="news.php">
                    <button type="submit"><h3>Tin tức hot</h3></button>
                </form>
                <form action="Schedule.php">
                    <button type="submit"><h3>Thời khóa biểu giảng dạy</h3></button>
                </form>
                <form action="changePassword.php"> 
                    <button type="submit" name="submit1" value="Potvrdit"><h3>Đổi mật khẩu</h3></button>   
                </form>
                <form action="logout.php">
                    <button type="submit"><h3>Thoát</h3></button>
                </form> 
             
            </div>
            <div class="Aside">
                <div class="center">
                    <div class="center-2-1-2">
                        <div class="img">
                            <div class="col-md-12">
<!-- gọi ảnh -->
                                <img src="upload/<?php echo $_SESSION['pp']; ?>" class="img-circle" style="width: 140px; height: 150px; padding: 10px; margin: 15px; border: 1px solid #dfdfdf;"> 
                            </div>
                        </div>
                        <div class="table">
                            <table style="width:100%;" > 
                                <tr >
                                    <th>Thông tin cá nhân </th> 
                                    <th>Thông tin cơ bản</th>
                                    <th>Thông tin chức vụ và ngân hàng</th>
                                </tr>
                                <tr >
                                    <td>Họ và tên: <label for=""></label> <?php echo $_SESSION['name']; ?></td>
                                    <td>Mã giảng viên: <label for=""></label> <?php echo $_SESSION['msgv']; ?> </td>
                                    <td>Hàm học: <label for=""></label><?php echo $_SESSION['hamhoc']; ?></td>
                                </tr>
                                <tr >
                                    <td>Ngày sinh: <label for=""></label><?php echo $_SESSION['ngaysinh']; ?></td>
                                    <td>Ngày cấp CCCD: <label for=""></label><?php echo $_SESSION['ngaycapcccd']; ?></td>
                                    <td>Học vị: <label for=""></label><?php echo $_SESSION['hocvi']; ?></td>
                                </tr>
                                <tr >
                                    <td>giới tính: <label for=""></label><?php echo $_SESSION['gioitinh']; ?></td>
                                    <td>Nơi cấp CCCD: <label for=""></label><?php echo $_SESSION['noicapcccd']; ?></td>
                                    <td>Chức vụ: <label for=""></label><?php echo $_SESSION['chucvu']; ?></td>
                                </tr>
                                <tr >
                                    <td>CCCD: <label for=""></label><?php echo $_SESSION['CCCD']; ?></td>
                                    <td>Số điện thoại: <label for=""></label><?php echo $_SESSION['sodienthoai']; ?></td>
                                    <td>Loại giảng viên: <label for=""></label><?php echo $_SESSION['loaigiangvien']; ?></td>
                                </tr>
                                <tr >
                                    <td>Nơi sinh: <label for=""></label><?php echo $_SESSION['noisinh']; ?></td>
                                    <td>Dân tộc: <label for=""></label><?php echo $_SESSION['dantoc']; ?></td>
                                    <td>Chuyên ngành: <label for=""></label><?php echo $_SESSION['chuyennganh']; ?></td>
                                </tr>
                                <tr >
                                    <td>Địa chỉ thường trú: <label for=""></label><?php echo $_SESSION['diachithuongtru']; ?></td>
                                    <td>Tôn giáo: <label for=""></label><?php echo $_SESSION['tongiao']; ?></td>
                                    <td>Số tài khoản: <label for=""></label><?php echo $_SESSION['sotaikhoan']; ?></td>
                                </tr>
                                <tr >
                                    <td>Địa chỉ liên lạc: <label for=""></label><?php echo $_SESSION['diachilienlac']; ?></td>
                                    <td>Mã số thuế: <label for=""></label><?php echo $_SESSION['masothue']; ?></td>
                                    <td>Tên ngân hàng: <label for=""></label><?php echo $_SESSION['tennganhang']; ?></td>
                                </tr>
                                <tr >
                                    <td></td>
                                    <td></td>
                                    <td>Email: <label for=""></label><?php echo $_SESSION['email']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot"></div>
    </div>
</body>
</html>
