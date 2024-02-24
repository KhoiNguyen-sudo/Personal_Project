<?php
session_start();
require "connect.php";

// kết nối file database
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin 👨‍💻</title>
    <link rel="stylesheet" href="css/style-1.css">
    <link rel="stylesheet" href="css/sliderPage.css">
    <link rel="shortcut icon" href="CSS\img\icon.png">
    <script>
      function xoa() {
        var conf = confirm(`bạn có chắc chắn xóa không ?`);
        return conf
      }
    </script>
  </head>
  <style>
    th{
      color: wheat;
    }
    td {
      color: white;
    }
    a {
        color: white;
        text-decoration: none;
    }
     a:hover{
            color: purple;
            text-decoration: none;
        }
  </style>
  <body>
    <div class="HCF">
      <div class="header">
        <div style="position: relative;" class="img">
          <img src="css\img\Bia.png" alt="" width="100%" height="235px">
          <center>
            <!-- Nút tìm kiếm  --> 
            <form action="manager.php">
            <button style="margin-right: 1600px" id="manager.php" >Quay về</button>  
            </form>
            <form method="post" action="">
            <input style="width: 100px" type="submit" name="search" value="Tìm kiếm">
            <br>
            <input name="txtsearch" type="text">
            </form> 
            <?php if (isset($_POST["search"])) {
                $s = $_POST["txtsearch"];
                if ($s == "") {
                  echo '<span style="color:#AFA;text-align:center;">Vui lòng nhập vào</span>';
                } else {
                    $sql = "select * from thoikhoabieu where msgv LIKE '%$s%'";
                    $qr = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($qr);
                    if ($count <= 0) {
                      echo '<span style="color:#AFA;text-align:center;">Không tìm thấy kết quả</span> ,
                      <b>'.
                          '</b>';
                  } else {
                          $count .
                          ", 
                        <b>" .
                          "</b>"; ?> <table border="1">  
                            <!-- xuất hiện bảng -->
                            <tr>
                            <th style="height: 50px;">Thứ</th>
                            <th>Tên giảng viên</th>
                            <th>Mã số giảng viên</th>
                            <th>Ca giảng dạy</th>
                            <th>Môn</th>
                            <th>Niên khóa</th>
                            <th>Hành động</th>
                        </tr>
                          <!-- truy vấn -->
               <?php while ($row = mysqli_fetch_array($qr)) { ?> 
                <td> <?php echo $row["thu"]; ?> </td>
                <td> <?php echo $row["hoten"]; ?> </td>
                <td> <?php echo $row["msgv"]; ?> </td>
                <td> <?php echo $row["ca"]; ?> </td>
                <td> <?php echo $row["mon"]; ?> </td>
                <td> <?php echo $row["nienkhoa"]; ?> </td>
                <td>
                  <a href="ud.php?id=<?= $row["id"] ?>">Sửa </a>
                  <a onclick="return xoa()" href="delete.php?id=<?= $row["id"] ?>">Xóa</a>
                </td>
              </tr>
               <?php } ?>
            </table> <?php
                    }
                }
            } else {
                require "conntent.php ";
            } ?>
          </center>
        </div>
      </div>
    </div>
  </body>
</html>