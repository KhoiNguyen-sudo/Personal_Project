<?php
//database có tên là test_db
$sname = "us-cdbr-east-06.cleardb.net";
$unmae = "bbcbe2106a19d4";
$password = "c2bb67ae";
$db_name = "heroku_445958caf28b0de";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$conn) {
    echo "Kết nối thất bại";
}
?>
