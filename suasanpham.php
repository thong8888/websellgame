<?php
    require ("dbconnect.php");
$masp=(int) $_GET['id'];
$sql="SELECT*FROM `sanpham` WHERE `masp`='$masp'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
$img=$row['imgURL'];
?>
<?php
if (isset($_POST['submit'])){
    $gia=$_POST['gia'];
    $tensp=$_POST['ten'];
    $mota=$_POST['mota'];
    $hinhanh=$_FILES['hinhanh']['name'];
    $target_dir="./images/";
    if ($hinhanh){
        if (file_exists("./images/".$img)){
            unlink("./images".$img);
        }
        $target_file=$target_dir.$hinhanh;
    }else{
        $target_file=$target_dir.$img;
        $hinhanh=$img;
    }
    if(isset($tensp)&& isset($gia)&& isset($mota)&& isset($hinhanh)){
        move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$target_file);
        $sql="UPDATE `sanpham` SET `masp`='$masp',`tensp`='$tensp',`gia`='$gia',`mota`='$mota',`imgURL`='$hinhanh' WHERE `sanpham`.`masp`='$masp'; ";
        mysqli_query($conn,$sql);
        header("Location:trangchu.php");
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
<a href="trangchu.php">Quay về</a>    
<h1>Cap nhat san pham</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Ten san pham</label><br>
        <input type="text" name="ten" value="<?= $row["tensp"]?>"><br>
        <img style="width: 200px;heught: 200px;" src="./images/<?= $row["imgURL"]?>" alt=""><br>
        <label for="">Gia san pham</label><br>
        <input type="text" name="gia"><br>
        <label for="">Mo ta san pham</label><br>
        <textarea name="mota" cols="30" rows="10"><?= $row["mota"]?></textarea><br>
        <label for="">Hinh anh</label><br>
        <input type="file" name="hinhanh"><br>
        <div>
            <button type="submit" name="submit">
            Cập nhật sản phẩm
            </button>
        </div>
    </form>
</body>
</html>