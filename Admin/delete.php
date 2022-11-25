<?php
require "connect.php";
$id = (int) $_GET["id"];
$mgv = "SELECT msgv FROM `thoikhoabieu` WHERE `thoikhoabieu`.`id` = '$id'";
$query = mysqli_query($conn, $mgv);
$after = mysqli_fetch_assoc($query);
$sql = "DELETE FROM `thoikhoabieu` WHERE `thoikhoabieu`.`id` = $id";
mysqli_query($conn, $sql);
header("location:manager.php");
?>
