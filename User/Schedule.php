<?php 
session_start(); 
    require("connect.php");
    $sql = "SELECT * FROM `thoikhoabieu` ";
    $query = mysqli_query($conn, $sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User 👨‍💻</title>
    <link rel="stylesheet" href="css/style-1.css">
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
                    <button type="submit"><h3>Đổi mật khẩu</h3></button>
                </form>
                <form action="logout.php">
                    <button type="submit"><h3>Thoát</h3></button>
                </form>
            </div>
            <div class="Aside">
                <div class="center1">
                <div class="center2">
                    <table>
                        <tr>
                         
                            <th>Thứ </th>  
                            <th>Mã số giảng viên</th>
                            <th>Tên giảng viên</th>
                            <th>Ca giảng dạy</th>
                            <th>Môn</th>
                            <th>Niên khóa</th>
                        </tr>
                        <?php                           
                            while($row = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?= $row["thu"]?></td> 
                            <td><?= $row["msgv"]?></td> 
                            <td><?= $row["hoten"]?></td> 
                            <td><?= $row["ca"] ?></td>
                            <td><?= $row["mon"]?></td>   
                            <td><?= $row["nienkhoa"]?></td>
                        </tr>
                        <?php }?>   
                    </table>
                </div>
            </div>
        </div>
            <div class="foot"></div>
    </div>
</body>
</html>