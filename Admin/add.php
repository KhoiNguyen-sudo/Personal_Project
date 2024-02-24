<?php
require("connect.php");
$ht = $_POST['hoten'];
$magv =$_POST['magv'];
$ca = $_POST['ca'];
$mon = $_POST['mon'];
$nienkhoa = $_POST['nienkhoa'];
$thu= $_POST['thu'];

if(isset($_POST["submit"]) ){
    $ht = $_POST['hoten'];
    $magv =$_POST['magv'];
    $ca = $_POST['ca'];
    $mon = $_POST['mon'];
    $nienkhoa = $_POST['nienkhoa'];
    $thu= $_POST['thu'];
    if(isset($ht) && isset($magv) && isset($ca) && isset($mon) && isset($nienkhoa) && isset($thu)){
        $sql = "INSERT INTO `thoikhoabieu` (hoten, msgv, ca, mon, nienkhoa, thu) VALUES('$ht', '$magv','$ca', '$mon', '$nienkhoa', '$thu')";
        mysqli_query($conn, $sql);
        echo"<script>alter('Bạn đã thêm thành công')</script>";
        header("Location:manager.php");
    }
}
?>