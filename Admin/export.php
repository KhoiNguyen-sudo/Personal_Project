<?php
// Để tải về dạng file excel
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; Filename = Data.xls"); //  đặt tên file excel
require "data.php"; // gọi file data.php để tải về
?>
