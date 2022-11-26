<?php
require "connect.php";
$themsql = "SELECT * FROM `thoikhoabieu`";
$query = mysqli_query($conn, $themsql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin 👨‍💻</title>
    <link rel="stylesheet" href="css/manager.css">
    <link rel="stylesheet" href="css/pagemini.css">
    <link rel="shortcut icon" href="CSS\img\icon.png">  
    <script>
        function xoa(){
            var conf = confirm(`bạn có chắc chắn xóa không ?`);
            return conf
        }
</script>
</head>
<style>
    a {
        color: black;
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
<body>
    <div class="HCF">
        <div class="header">
            <div style="position: relative;" class="img">
                <img src="css\img\Bia.png" alt="" width="100%" height="235px">
            </div>
        </div>
        <div style="position: relative;height: auto;" class="contain">
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
                <button id="export.php" > <a href="signup.php" ><h3>Thêm thành viên</h3></a> </button> 
            </div>
            <div class="Aside">
                <div class="center1">
                    <div class="b1">
                            <button id="Btn"><h3>Thêm</h3></button>    
                            <!-- Nút xuất file excel -->
                            <button id="export.php" ><a href="export.php"><h3>Xuất file excel</h3></a></button>  
                             <!--Nút tìm kiếm  -->
                             <button id="export.php" ><a href="search.php"><h3>Tìm kiếm</h3></a></button> 

                            <div style="height: 600px; background-color: rgb(44, 117, 182, 0.8);" id="OOO" >
                                <form  action="add.php" method="post" enctype="multipart/form-data">
                                  <label id="btn-1" for="hoten">Tên giảng viên:</label><br>
                                  <input id="Btn-1" type="text" id="hoten" name="hoten"  required ><br><br>
                                  <label id="btn-1" for="magv">Mã số giảng viên:</label><br>
                                  <input id="Btn-1" type="text" id="magv" name="magv" required><br><br>
                                  <label id="btn-1" for="thu">Thứ:</label><br>
                                  <input id="Btn-1" type="text" id="thu" name="thu" required><br><br>
                                  <label id="btn-1" for="ca">Ca giảng dạy:</label><br>
                                  <input id="Btn-1" type="text" id="ca" name="ca" required><br><br>
                                  <label id="btn-1" for="nienkhoa">Niên khóa:</label><br>
                                  <input id="Btn-1" type="text" id="nienkhoa" name="nienkhoa"  required><br><br>
                                  <label id="btn-1" for="mon">Môn giảng dạy:</label><br>
                                  <input id="Btn-1" type="text" id="mon" name="mon" required><br><br>
                                  <button style="margin-left: 35px; width: 200px;" id="TX" type="submit" name="submit">Thêm</button> 
                                </form>
                                </div>
                    </div>
                    <div class="b2">
                            
                    </div>
                </div>
                <div class="center2">
                    <table> 
                        <tr>
                            <th style="height: 50px;">Thứ</th>
                            <th>Tên giảng viên</th>
                            <th>Mã số giảng viên</th>
                            <th>Ca giảng dạy</th>
                            <th>Môn</th>
                            <th>Niên khóa</th>
                            <th>Hành động</th>
                        </tr>
                        <?php
                        require "connect.php";
                        $themsql = "SELECT * FROM `thoikhoabieu`";
                        $query = mysqli_query($conn, $themsql);
                        while ($row = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?= $row["thu"] ?></td>
                            <td><?= $row["hoten"] ?></td>
                            <td><?= $row["msgv"] ?></td>
                            <td><?= $row["ca"] ?></td>
                            <td><?= $row["mon"] ?></td>   
                            <td><?= $row["nienkhoa"] ?></td>
                            <td>
                            <a id="color" href="ud.php?id=<?= $row["id"] ?>">Sửa</a>
                            <a id="color" onclick="return xoa()" href="delete.php?id=<?= $row[
                                "id"
                            ] ?>">Xóa</a>
                            </td>
                        </tr>
                        <?php }
                        ?>
                    </table>
                </div>
            </div>
        </div>
            <div class="foot"></div>
    </div>
</body>
<script src="script/sliderPage.js"></script>
</html>
