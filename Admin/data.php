<!-- DÙNG ĐỂ XUẤT FILE EXCEL -->
<?php
include_once("connect.php"); // kết nối file database 
?>
<table border = 1> 
  <tr>
    <td>Thứ</td>
    <td>Tên giảng viên</td>
    <td>Mã số giảng viên</td>
    <td>Ca giảng dạy</td> 
    <td>Môn</td> 
    <td>Niên khóa</td>
  </tr> 
  <?php 
  $rows = mysqli_set_charset($conn, 'UTF8'); // Đọc file tiếng việt
  $rows = mysqli_query($conn, "SELECT * FROM thoikhoabieu "); // truy vấn vào bảng admin trong database qlgv
  foreach($rows as $row) : // mảng PHP
  ?> 
  <tr>  
  <td> <?php echo $row["thu"]; ?> </td> 
    <td> <?php echo $row["hoten"]; ?> </td>
    <td> <?php echo $row["msgv"]; ?> </td> 
    <td> <?php echo $row["ca"]; ?> </td>
    <td> <?php echo $row["mon"]; ?> </td> 
    <td> <?php echo $row["nienkhoa"]; ?> </td>  
  </tr> 
  <?php endforeach; ?>
  </table>