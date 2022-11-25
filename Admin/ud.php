<?php
require "connect.php";
$id = (int) $_GET["id"];
$sql = "SELECT * FROM `thoikhoabieu` WHERE `id` = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
if (isset($_POST["submit"])) {
    $ht = $_POST["hoten"];
    $magv = $_POST["magv"];
    $ca = $_POST["ca"];
    $mon = $_POST["mon"];
    $nienkhoa = $_POST["nienkhoa"];
    $thu = $_POST["thu"];
    if (
        isset($ht) &&
        isset($magv) &&
        isset($ca) &&
        isset($mon) &&
        isset($nienkhoa) &&
        isset($thu)
    ) {
        $sql = "UPDATE `thoikhoabieu` SET `hoten`='$ht', `msgv` = '$magv', `ca`= '$ca', `mon`= '$mon', `nienkhoa`='$nienkhoa', `thu`= '$thu' 
            WHERE `thoikhoabieu`.`id` = '$id';";
        mysqli_query($conn, $sql);
        header("Location:manager.php");
    }
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Admin 👨‍💻</title>
        <link rel="shortcut icon" href="CSS\img\icon.png">
        
    </head>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

.header{
    background-image: url(css/img/background.jpg);
    height: 100vh;
    background-position: center;
    background-size: cover;
}

.header::before{
    position: absolute;
    background-color: rgba(0,0,0,0.8);
    content: "";
    width: 100%;
    height: 100%;
}

.fix{
    position: relative;
    padding: 36px 50px;
}


.form h1{
    margin-bottom: 15px;
}

.fixed{
    position: relative;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center ;
    height: 650px;
    width: 500px;
    margin: auto;
    margin-top: 0;
    background-color: #d5d5d5;
    border-radius: 5px;
}

input{
    margin-bottom: 10px;
    width: 400px ;
    height: 40px;
    border-radius: 10px;
    border: none;
    padding: 5px;
    transition: all 0.5s ease;
}

input:hover{
    border: 1.5px solid red;
}

.forgotpass{
    text-align: right;
    font-size: 15px;
    margin-bottom: 10px;
}
.forgotpass a{
    text-decoration:none;
}
.forgotpass:hover a{
    text-decoration: underline;
}

button{
    width: 400px;
    height: 40px;
    border: none;
    background-color:rgba(183, 19, 19); ;
    color: white;
    border-radius: 5px;
    margin-bottom: 25px;
    transition: all 0.1s ease;
}
button:hover{
    background-color: rgb(102, 19, 19);
    color: white;
}

.noAccount a{
    text-decoration: none;
}
.noAccount:hover a{
    text-decoration: underline;
}

#btn-1 {
    font-weight: bold;
    color:black; 
}
#Btn-1 {
    margin-top: 5px;
}
form {
    margin-top: 10px;
}
    </style>
    <body>
        <div class="header">
                <div class="fix"><a ><img alt=""></a></div>
                <div class="fixed">
                    <div class="form">
                        <h2 style="margin-top: 15px" >Chỉnh sửa thông tin</h2>
                        <form  action="" method="POST" enctype="multipart/form-data">
                        <label id="btn-1" for="hoten">Tên giảng viên</label><br>
                                  <input id="Btn-1" type="text" id="hoten" name="hoten" value="<?= $row[
                                      "hoten"
                                  ] ?>"><br><br>
                                  <label id="btn-1" for="magv">Mã số giảng viên</label><br>
                                  <input id="Btn-1" type="text" id="magv" name="magv" value="<?= $row[
                                      "msgv"
                                  ] ?>"><br><br>
                                  <label id="btn-1" for="thu">Thứ</label><br>
                                  <input id="Btn-1" type="text" id="thu" name="thu" value="<?= $row[
                                      "thu"
                                  ] ?>"><br><br>
                                  <label id="btn-1" for="ca">Ca giảng dạy</label><br>
                                  <input id="Btn-1" type="text" id="ca" name="ca" value="<?= $row[
                                      "ca"
                                  ] ?>"><br><br>
                                  <label id="btn-1" for="nienkhoa">Niên khóa</label><br>
                                  <input id="Btn-1" type="text" id="nienkhoa" name="nienkhoa"  value="<?= $row[
                                      "nienkhoa"
                                  ] ?>"><br><br>
                                  <label id="btn-1" for="mon">Môn giảng dạy</label><br>
                                  <input id="Btn-1" type="text" id="mon" name="mon" value="<?= $row[
                                      "mon"
                                  ] ?>"><br>
                                  <button id="Btn-1" type="submit" name="submit">
                                    Cập nhật thông tin
                                  </button>
                        </form>
                    </div>
                </div>
        </div>
        <script src="script\index.js"></script>
    </body>
    </html>