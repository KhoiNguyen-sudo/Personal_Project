<?php
// file database có tên là test_db
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "test_db";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$conn) {
    echo "Connection failed!";
}
?>
