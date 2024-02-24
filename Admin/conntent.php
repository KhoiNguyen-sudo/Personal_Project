<table border = "1">
                        <tr>
                            <th>Thứ</th>
                            <th>Tên giảng viên</th>
                            <th>Mã số giảng viên</th>
                            <th>Ca giảng dạy</th>
                            <th>Môn</th>
                            <th>Niên khóa</th>
                            <th>Hành động</th>
                        </tr>
                        <?php          
                          $sql = "SELECT * FROM thoikhoabieu";
                          $qr = mysqli_query($conn,$sql);                   
                            while($row = mysqli_fetch_array( $qr)){
                        ?>
                        <tr> 
                        <td> <?php echo $row["thu"]; ?> </td> 
                        <td> <?php echo $row["hoten"]; ?> </td>
                        <td> <?php echo $row["msgv"]; ?> </td> 
                        <td> <?php echo $row["ca"]; ?> </td>
                        <td> <?php echo $row["mon"]; ?> </td> 
                        <td> <?php echo $row["nienkhoa"]; ?> </td>  
                            <td>
                            <a onclick="return xoa()" href="delete.php?id=<?= $row["id"]?>">Xóa</a>
                            <a href="ud.php?id=<?= $row["id"]?>">Sửa</a>
                            </td>
                        </tr>
                        <?php }?>
                    </table> 


