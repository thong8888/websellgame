<?php
    require("dbconnect.php");
    $sql="SELECT*From`sanpham`";
    $query=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>

    
    <div class="container">
        <div class="menu">
            <div class="logo">
                shop<span></br>báo nhà</span>
            </div>
            <ul>
                <li class="active"><i class="fa-solid fa-house-user"></i> Home</li>
                <li><i class="fa-regular fa-user"><a href="/project/login/login.php"></i> User</a></li>
                <li><i class="fa-solid fa-heart"></i> Favourite</li>
            </ul>
             <ul>
                <li><i class="fa-brands fa-facebook"></i> Facebook</li>
                <li><i class="fa-brands fa-instagram"></i> Instagram</li>
            </ul>
        </div>
        <div class="center">
            <div class="search">
                <div class="form">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search...">
                    <button>Search</button>
                </div>
            </div>
            
            <h2>Sản phẩm</h2>
            <?php
                while($row=mysqli_fetch_array($query)){
                ?>
            <div class="list">
                <div class="item" data-key="1">
                    <div class="img">
                        <img src='./images/<?=$row["imgURL"]?>' alt="">
                    </div>
                    <div class="content">
                        <div class="title"><?=$row["tensp"]?></div>
                        <div class="des"><?=$row["mota"]?></div>
                        <div class="price"><?=$row["gia"]?> đ</div>
                        <button class="add">Thêm vào giỏ hàng</button>
                        <button class="remove" onclick="Remove(1)"><i class="fa-solid fa-trash-can"></i></button>
                    </div>                    
                </div>                                                               
            </div>
            <?php } ?>
        </div>
        <div class="cart">
            <div class="name">Giỏ hàng</div>
            <div class="listCart">

            </div>
        </div>
    </div>
    

    <script src="script.js"></script>
</body>
</html>