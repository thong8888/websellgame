<?php
    require("dbconnect.php");
    $sql="SELECT*From`sanpham`";
    $query=mysqli_query($conn,$sql);
?>
<button>
    <a href="themsp.php">Thêm sản phẩm</a>
</button>
<button1>
    <a href="http://localhost:81/doanwebgame/project/login/login.php">Đăng nhập/ Đăng ký/</a>
</button1>
<h1>SHOPPING</h1>
<table id="productList">

    <?php
    while($row=mysqli_fetch_array($query)){
    ?>
    
    <div class="home">
        <div class="list">
            <div class="item">
                <div class="img"><img style="width:200px;height:250px" src='./images/<?=$row["imgURL"]?>'alt=""></div></br>
                </div>
                <div class="content">
                    <div class="title"><?=$row["tensp"]?></div>
                    <div class="mota"><?=$row["mota"]?></div>   
                    <div class="gia"><?=$row["gia"]?> ></div>             
                </div>
                <div class="ft">                                        
                    <div class="giohang"><a href="cart.php?id=<?= $row['masp']?>">Thêm vào giỏ hàng</a></div>
                    <div class="edit"><a href="suasanpham.php?id=<?= $row['masp']?>">Sửa</a></div>
                    <div class="del"><script>
                            function xoasanpham(){
                            var conf=confirm(`bạn có chắc chắn xóa sản phẩm hay không?`);
                            return conf;
                            }
                            </script>
                        <a onclick="return xoasanpham()" href="xoasanpham.php?id=<?= $row['masp']?>" >Xóa</a></div>
                </div>

        </div>
    </div>
    <?php } ?>
</table>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    
</body>
</html>


