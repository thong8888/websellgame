<?php
    require("dbconnect.php");
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
    <div class="container">
        <h2>Shopping</h2>
        <?php
            $sql="SELECT*From`sanpham`";
            $query=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while ($row = mysqli_fetch_array($result));
            }   
        ?>
    </div>
</body>
</html>