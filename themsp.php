<?php
    include 'dbconnect.php';
    if (isset($_POST['submit'])){
        $tensp=$_POST['ten'];
        $gia=$_POST['gia'];
        $mota=$_POST['mota'];
        $hinhanh=$_FILES['hinhanh']['name'];
        $target_dir="./images/";
        $target_file=$target_dir.$hinhanh;
        if(isset($tensp)&& isset($gia) && isset($mota)&& isset($hinhanh)){
            move_uploaded_file($_FILES['hinhanh']['tmp_name'],$target_file);
            $sql="INSERT INTO `sanpham`(`masp`, `tensp`, `gia`, `mota`, `imgURL`) VALUES (NULL,'$tensp','$gia','$mota','$hinhanh')";
            $result=mysqli_query($conn,$sql);
            if($result==true){
                echo "<script> alter('Ban da them thanh cong')</script>";
                header("Location:trangchu.php");
            }else{
                echo "Them san pham that bai".$sql;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Them san pham</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Ten san pham</label><br>
        <input type="text" name="ten"><br>
        <label for="">Gia san pham</label><br>
        <input type="text" name="gia"><br>
        <label for="">Mo ta san pham</label><br>
        <textarea name="mota" cols="30" rows="10"></textarea><br>
        <label for="">Hinh anh</label><br>
        <input type="file" name="hinhanh"><br>
        <input type="submit" value="Them" name="submit">
    </form>
</body>
</html>